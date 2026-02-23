<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

$root = __DIR__;
$dist = $root . '/dist';

function rrmdir(string $dir): void {
    if (!is_dir($dir)) return;
    $items = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($items as $item) {
        $item->isDir() ? @rmdir($item->getPathname()) : @unlink($item->getPathname());
    }
    @rmdir($dir);
}

function rcopy(string $src, string $dst): void {
    if (is_dir($src)) {
        @mkdir($dst, 0777, true);
        foreach (scandir($src) ?: [] as $file) {
            if ($file === '.' || $file === '..') continue;
            rcopy("$src/$file", "$dst/$file");
        }
    } elseif (is_file($src)) {
        @mkdir(dirname($dst), 0777, true);
        copy($src, $dst);
    }
}

/**
 * Carga un .env simple (KEY=VALUE) si existe.
 * - No soporta comillas complejas, alcanza para BASE_URL.
 */
function load_dotenv(string $path): void {
    if (!is_file($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) return;

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;

        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) continue;

        $key = trim($parts[0]);
        $val = trim($parts[1]);
        $val = trim($val, "\"'");

        if ($key !== '' && getenv($key) === false) {
            putenv("$key=$val");
            $_ENV[$key] = $val;
        }
    }
}

// 1) Cargar .env local si existe (NO se usa en Cloudflare, ahí va por env vars del panel)
load_dotenv($root . '/.env');

// 2) BASE_URL por entorno
$baseUrl = getenv('BASE_URL');
if ($baseUrl === false) $baseUrl = '';
$baseUrl = rtrim($baseUrl, '/'); // "" o "/pymento"

// 3) Limpiar dist
rrmdir($dist);
@mkdir($dist, 0777, true);

// 4) Servicios (keys) para generar páginas “bonitas”
$serviceKeys = ['marketing', 'consultoria', 'desarrollo', 'ia', 'content'];

// 5) Rutas a renderizar
$routes = [
    [
        'pretty' => '/',
        'file'   => $root . '/pages/index.php',
        'out'    => $dist . '/index.html',
        'get'    => [],
    ],
];

// generar 1 página por servicio
foreach ($serviceKeys as $key) {
    $routes[] = [
        'pretty' => "/servicios/$key/",
        'file'   => $root . '/pages/service-detail.php',
        'out'    => $dist . "/servicios/$key/index.html",
        'get'    => ['service' => $key],
    ];
}

// 6) Render
foreach ($routes as $cfg) {
    if (!file_exists($cfg['file'])) {
        throw new RuntimeException("No existe: {$cfg['file']}");
    }

    // Simular request
    $_GET = $cfg['get'] ?? [];
    $_SERVER['REQUEST_URI'] = $cfg['pretty'] ?? '/';
    $_SERVER['HTTP_HOST'] = 'example.com';

    // Dejar BASE_URL disponible también en runtime del render
    putenv("BASE_URL=$baseUrl");
    $_ENV['BASE_URL'] = $baseUrl;

    ob_start();
    include $cfg['file'];
    $html = ob_get_clean();

    @mkdir(dirname($cfg['out']), 0777, true);
    file_put_contents($cfg['out'], $html);

    echo "OK: {$cfg['pretty']} -> {$cfg['out']}\n";
}

// 7) Copiar assets al dist
$assetDirs = ['css', 'js', 'images', 'fonts', 'videos'];
foreach ($assetDirs as $dir) {
    if (is_dir("$root/$dir")) {
        rcopy("$root/$dir", "$dist/$dir");
    }
}

echo "Build terminado. BASE_URL={$baseUrl}\n";
