<?php
declare(strict_types=1);

// 1) Si existe BASE_URL en entorno (Cloudflare build / build local), úsalo
$base_url = getenv('BASE_URL');
if ($base_url !== false && $base_url !== '') {
    $base_url = rtrim($base_url, '/');
    return;
}

// 2) Si no existe env var, fallback a detección local/prod (solo útil en XAMPP)
$host = $_SERVER['HTTP_HOST'] ?? '';

$is_local = ($host === 'localhost' || str_starts_with($host, '127.') || str_contains($host, 'localhost'));

if ($is_local) {
    $base_url = '/pymento';   // ajustar si vive en otro subpath local
} else {
    $base_url = '';          // prod (en estático ya viene resuelto desde build)
}

$base_url = rtrim($base_url, '/');
