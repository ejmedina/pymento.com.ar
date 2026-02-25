<?php
require_once __DIR__ . '/../config.php';

$services = [
	"marketing" => [
		"title" => "Marketing y Adquisición",
		"page_title" => "Servicios | Marketing y Adquisición",
		"hero" => [
		"image" => $base_url . "/images/img-pymento/service-marketing-1.webp",
		"excerpt" => "Estrategia, campañas y optimización para atraer clientes y convertir mejor.",
		"paragraphs" => [
			"Auditamos tu situación actual (web, campañas y analítica) y definimos propuesta de valor, audiencias y mensajes.",
			"Implementamos medición desde el día 1 (eventos, conversiones y reportes) y optimizamos semanalmente con tests y mejoras."
		],
		],
		"feature_twos" => [
		[
			"icon" => $base_url . "/images/icons/feature-6.png",
			"heading" => "Estrategia y canal correcto",
			"text" => "Propuesta de valor + mensajes + plan de canales."
		],
		[
			"icon" => $base_url . "/images/icons/service-21.png",
			"heading" => "Medición y optimización semanal",
			"text" => "Setup de tracking + A/B tests + mejoras continuas para convertir más."
		],
		],
		"mid" => [
		"image" => $base_url . "/images/img-pymento/service-marketing-2.webp",
		"heading" => "Campañas con objetivos y medición desde el día 1",
		"text" => "Planificamos, ejecutamos y ajustamos con métricas claras para que la inversión se traduzca en resultados."
		],
		"feature_threes" => [
		["icon" => $base_url . "/images/icons/service-3.png", "text" => "Tracking\nrápido"],
		["icon" => $base_url . "/images/icons/service-2.png", "text" => "Tests\nclaros"],
		["icon" => $base_url . "/images/icons/counter-3.png", "text" => "Resultados\nconstantes"],
		],
	],

	"consultoria" => [
		"title" => "Consultoría en negocios",
		"page_title" => "Servicios | Consultoría en negocios",
		"hero" => [
		"image" => $base_url . "/images/img-pymento/service-consultoria-1.webp",
		"excerpt" => "Diagnóstico y planificación para ordenar procesos y acelerar resultados.",
		"paragraphs" => [
			"Mapeamos procesos, detectamos fricciones y priorizamos acciones por impacto vs esfuerzo.",
			"Definimos un roadmap por etapas (30/60/90 días) con responsables, métricas y seguimiento."
		],
		],
		"feature_twos" => [
		[
			"icon" => $base_url . "/images/icons/feature-6.png",
			"heading" => "Mapa de procesos + foco",
			"text" => "Identificamos cuellos de botella y definimos prioridades sin dispersión."
		],
		[
			"icon" => $base_url . "/images/icons/service-18.2.png",
			"heading" => "Roadmap accionable",
			"text" => "Plan por etapas con objetivos, tiempos y métricas para ejecutar."
		],
		],
		"mid" => [
		"image" => $base_url . "/images/img-pymento/service-consultoria-2.webp",
		"heading" => "KPIs y tablero mínimo",
		"text" => "Definimos indicadores clave y armamos un tablero simple para decidir con datos y mejorar con continuidad."
		],
		"feature_threes" => [
		["icon" => $base_url . "/images/icons/service-35.png", "text" => "Impactos\nordenados"],
		["icon" => $base_url . "/images/icons/service-3.png", "text" => "Objetivos\nmedibles"],
		["icon" => $base_url . "/images/icons/service-6.png", "text" => "Acompañamiento\ncercano"],
		],
	],

	"desarrollo" => [
		"title" => "Desarrollos y soluciones",
		"page_title" => "Servicios | Desarrollos y soluciones",
		"hero" => [
		"image" => $base_url . "/images/img-pymento/service-desarrollo-1.webp",
		"excerpt" => "Software a medida, automatizaciones e integraciones pensadas para tu operación.",
		"paragraphs" => [
			"Diseñamos soluciones que se adaptan a tu flujo de trabajo, con foco en eficiencia y trazabilidad.",
			"Integramos tus herramientas (CRM, WhatsApp, email, pagos, etc.) para reducir tareas manuales y errores."
		],
		],
		"feature_twos" => [
		[
			"icon" => $base_url . "/images/icons/service-5.2.png",
			"heading" => "A medida y escalable",
			"text" => "Arquitectura modular para crecer sin rehacer todo desde cero."
		],
		[
			"icon" => $base_url . "/images/icons/service-4.2.png",
			"heading" => "Integraciones reales",
			"text" => "APIs y automatizaciones con CRM, WhatsApp, email, pagos y más."
		],
		],
		"mid" => [
		"image" => $base_url . "/images/img-pymento/service-desarrollo-2.webp",
		"heading" => "Del prototipo a producción",
		"text" => "Prototipamos rápido, validamos con vos y llevamos a producción con documentación y soporte."
		],
		"feature_threes" => [
		["icon" => $base_url . "/images/icons/service-33.png", "text" => "Automatización\nde tareas"],
		["icon" => $base_url . "/images/icons/service-32.png", "text" => "Integración\ncon sistemas"],
		["icon" => $base_url . "/images/icons/service-3.png", "text" => "Documentación\ny soporte"],
		],
	],

	"ia" => [
		"title" => "IA aplicada a soporte / ventas",
		"page_title" => "Servicios | IA aplicada a soporte y ventas",
		"hero" => [
		"image" => $base_url . "/images/img-pymento/service-ia-1.webp",
		"excerpt" => "Asistentes y automatizaciones con IA para escalar atención y ventas.",
		"paragraphs" => [
			"Diseñamos flujos conversacionales y automatizaciones para responder más rápido, calificar consultas y liberar tiempo del equipo.",
			"Integramos la IA con tus canales y procesos, con control, trazabilidad y derivación a humano cuando hace falta."
		],
		],
		"feature_twos" => [
		[
			"icon" => $base_url . "/images/icons/feature-6.png",
			"heading" => "Atención 24/7 con derivación",
			"text" => "Respuestas consistentes, derivación inteligente y seguimiento post-consulta."
		],
		[
			"icon" => $base_url . "/images/icons/feature-7.png",
			"heading" => "Ventas asistidas",
			"text" => "Califica leads, responde objeciones y mejora la experiencia hasta el cierre."
		],
		],
		"mid" => [
		"image" => $base_url . "/images/img-pymento/service-ia-2.webp",
		"heading" => "Automatización con control",
		"text" => "Definimos límites, aprobaciones y métricas para que la IA sume sin sorpresas."
		],
		"feature_threes" => [
		["icon" => $base_url . "/images/icons/service-11-1.png", "text" => "FAQ +\nderivación"],
		["icon" => $base_url . "/images/icons/service-32.png", "text" => "Leads\ncalificados"],
		["icon" => $base_url . "/images/icons/service-10-1.png", "text" => "Resumen +\nCRM"],
		],
	],

	"content" => [
		"title" => "Content Factory",
		"page_title" => "Servicios | Content Factory",
		"hero" => [
		"image" => $base_url . "/images/img-pymento/service-content-1.webp",
		"excerpt" => "Videos de anuncios con modelos IA: realistas, consistentes y escalables.",
		"paragraphs" => [
			"Creamos piezas para marketing online usando modelos humanos generados con IA: realistas, consistentes y listos para producir variaciones por campaña.",
			"Reducís costos y tiempos de producción sin resignar calidad visual.",
			"Entregamos guion, subtítulos y versiones en formatos para Reels/TikTok/Stories/Shorts, con rondas de revisión incluidas."
		],
		],
		"feature_twos" => [
		[
			"icon" => $base_url . "/images/icons/feature-6.png",
			"heading" => "Guion + subtítulos",
			"text" => "Armamos el mensaje, el hook y el CTA según tu oferta y el canal."
		],
		[
			"icon" => $base_url . "/images/icons/feature-7.png",
			"heading" => "Variantes por campaña",
			"text" => "3–10 versiones por segmento/oferta/CTA, listas para testear performance."
		],
		],
		"mid" => [
		"image" => $base_url . "/images/img-pymento/service-content-2.webp",
		"heading" => "Consistencia visual de marca",
		"text" => "Mantenemos estética y tono para que cada pieza sume a tu identidad y mejore resultados."
		],
		"feature_threes" => [
		["icon" => $base_url . "/images/icons/service-35.png", "text" => "Formatos\nverticales"],
		["icon" => $base_url . "/images/icons/service-36.png", "text" => "Variantes\npor test"],
		["icon" => $base_url . "/images/icons/service-37.png", "text" => "Revisión\ny ajuste"],
		],
	],
];

$video_files = [
	['yt' => 'qFtI8OXGoaA', 'poster' => 'video-poster-1.webp', 'client' => 'Autoelevadores DG', 'desc' => 'Campaña de adquisición de clientes'],
	['yt' => 'ZEubnhnv_GM', 'poster' => 'video-poster-2.jpg', 'client' => 'Cooperativa 2001', 'desc' => 'Campaña de adquisición de clientes'],
	['yt' => '-pCiJTNb4kI', 'poster' => 'video-poster-3.webp',  'client' => 'Cooperativa 2001', 'desc' => 'Campaña de adquisición de clientes'],
	['yt' => 'gNoGu_P7qwg', 'poster' => 'video-poster-4.webp',  'client' => 'Cooperativa 2001', 'desc' => 'Campaña de adquisición de clientes'],
	['yt' => 'mKyJitK2drg', 'poster' => 'video-poster-5.webp',  'client' => 'PGI Argentina', 'desc' => 'Campaña de adquisición de clientes'],
	['yt' => 'ZsbQKMs0wo4', 'poster' => 'video-poster-6.webp',  'client' => 'Ahorro Inteligente', 'desc' => 'Campaña de adquisición de clientes'],
];

$content_videos = array_map(function($v) use ($base_url) {
	return [
		'yt'    => $v['yt'], // ID DE YOUTUBE
		'poster' => $base_url . "/images/img-pymento/" . ($v['poster'] ?? ''),
		'client' => $v['client'] ?? '',
		'desc' => $v['desc'] ?? '',
	];
}, $video_files);


$service_key = $_GET["service"] ?? null;

// si no vino por query, intentar inferirlo desde /servicios/<key>/
if (!$service_key) {
	$uri = $_SERVER['REQUEST_URI'] ?? '';
	if (preg_match('~^/servicios/([^/]+)/?~', $uri, $m)) {
		$service_key = $m[1];
	}
}

if (!isset($services[$service_key])) $service_key = "desarrollo";


$page_title = "Servicios | Pymento";
$nav_variant = "inner";

include __DIR__ . '/../partials/header.php';

?>

		<!-- Page Title -->
		<section class="page-title" style="background-image:url(<?= $base_url ?>/images/img-pymento/service-hero-2.jpeg)">
			<div class="auto-container">
				<h2><?= htmlspecialchars($services[$service_key]["title"]) ?></h2>
					<ul class="bread-crumb clearfix">
					<li><a href="index.php">Inicio</a></li>
					<li><?= htmlspecialchars($services[$service_key]["title"]) ?></li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Sidebar Page Container -->
		<div class="sidebar-page-container">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Sidebar Side -->
					<div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar">
							<!-- Sidebar Widget -->
							<div class="sidebar-widget category-widget">
								<ul class="cat-list">
								<?php foreach ($services as $key => $s): ?>
									<li class="<?= ($key === $service_key) ? "active" : "" ?>">
										<a href="<?= htmlspecialchars($base_url) ?>/servicios/<?= rawurlencode($key) ?>/">
											<?= htmlspecialchars($s["title"]) ?>
										</a>
									</li>
								<?php endforeach; ?>
								</ul>

							</div>

							<!-- Contact Widget -->
							<div class="sidebar-widget contact-widget">
								<div class="widget-content" style="background-image:url(<?= $base_url ?>/images/img-pymento/service-contact.jpg)">
									<div class="title">Contános qué necesitás</div>
									<div class="help">Te brindamos una solución</div>
									<a class="phone" href="tel:+557-3452-234">557-3452-234</a>
									<div class="form">
										Contanos brevemente qué necesitás y te respondemos con una propuesta clara, incluyendo alcance, tiempos y costos.
									</div>
									<div class="button-box text-center">
										<a href="#">Escribinos por WhatsApp<span class="fa-brands fa-whatsapp"></span></a>
									</div>
								</div>
							</div>

						</aside>
					</div>

					<!-- Content Side -->
					<div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
						<div class="service-detail <?= ($service_key === 'content') ? 'is-content-factory' : '' ?>">
							<div class="inner-box">
								<?php if ($service_key !== 'content'): ?>
									<div class="image">
										<img src="<?= htmlspecialchars($services[$service_key]["hero"]["image"]) ?>" alt="" />
									</div>

									<h3><?= htmlspecialchars($services[$service_key]["title"]) ?></h3>
									<p><?= htmlspecialchars($services[$service_key]["hero"]["excerpt"]) ?></p>

									<?php if (!empty($services[$service_key]["hero"]["paragraphs"])): ?>
										<?php foreach ($services[$service_key]["hero"]["paragraphs"] as $p): ?>
											<p><?= htmlspecialchars($p) ?></p>
										<?php endforeach; ?>
									<?php endif; ?>


									<div class="row clearfix">
										<?php foreach ($services[$service_key]["feature_twos"] as $ft): ?>
											<div class="feature-two col-lg-6 col-md-6 col-sm-12">
												<div class="feature-two_inner">
													<div class="feature-two_content">
														<span class="feature-two_icon">
															<img src="<?= htmlspecialchars($ft["icon"]) ?>" alt="" />
														</span>
														<h5 class="feature-two_heading"><?= htmlspecialchars($ft["heading"]) ?></h5>
														<div class="feature-two_text"><?= htmlspecialchars($ft["text"]) ?></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>


									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="<?= htmlspecialchars($services[$service_key]["mid"]["image"]) ?>" alt="" />
											</div>
										</div>

										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h4><?= htmlspecialchars($services[$service_key]["mid"]["heading"]) ?></h4>
											<p><?= htmlspecialchars($services[$service_key]["mid"]["text"]) ?></p>
										</div>
									</div>


									<div class="feature-lower_box">
										<div class="row clearfix">
											<?php foreach ($services[$service_key]["feature_threes"] as $f3): ?>
											<div class="feature-three col-lg-4 col-md-4 col-sm-6">
												<div class="feature-three_inner">
													<span class="feature-three_icon">
														<img src="<?= htmlspecialchars($f3["icon"]) ?>" alt="" />
													</span>
													<?= nl2br(htmlspecialchars($f3["text"])) ?>
												</div>
											</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php else: ?>
									<!-- (B) Layout especial Content Factory -->
									<h3><?= htmlspecialchars($services[$service_key]["title"]) ?></h3>
									<p><?= htmlspecialchars($services[$service_key]["hero"]["excerpt"]) ?></p>

									<?php foreach (($services[$service_key]["hero"]["paragraphs"] ?? []) as $p): ?>
										<p><?= htmlspecialchars($p) ?></p>
									<?php endforeach; ?>

									<!-- Divider + título sección -->
									<div class="content-works-divider content-works-divider--pill">
										<h4 class="content-works-pill">Trabajos realizados</h4>
									</div>

									<!-- Slider videos estilo teléfono -->
									<div class="content-video-slider-wrapper">
										<div class="content-video-slider owl-carousel owl-theme">
											<?php foreach ($content_videos as $i => $v): ?>
												<div class="content-video-slide" data-pos="<?= (int)$i ?>">
												
													<div class="phone">
														<div class="phone__screen" style="background-image:url('<?= htmlspecialchars($v['poster'] ?? '') ?>')">
															<div
																class="phone__player"
																data-yt-id="<?= htmlspecialchars($v['yt']) ?>"
																aria-label="Video YouTube"
															></div>
														</div>

														<!-- overlay play (solo hasta que se cree el iframe) -->
														<button class="phone__tap" type="button" aria-label="Reproducir/Pausar">
															<span class="phone__play"></span>
														</button>
													</div>

													<?php if (!empty($v['client'])): ?>
														<div class="video-client">Cliente: <?= htmlspecialchars($v['client']) ?></div>
													<?php endif; ?>

													<?php if (!empty($v['desc'])): ?>
														<div class="video-desc"><?= htmlspecialchars($v['desc']) ?></div>
													<?php endif; ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Page Container -->

		<!-- CTA One -->
		<section class="cta-one">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">

					<div class="left-box">
						<h3 class="cta-one_heading">¿Listo para mejorar tu negocio con tecnología?</h3>
						<div class="cta-one_text">
							Te ayudamos a ordenar procesos, automatizar tareas y crecer con soluciones digitales pesadas para tu empresa.
						</div>
					</div>

					<div class="right-box">
						<a class="cta-one_btn theme-btn" href="contact.html">Contactate</a>
					</div>

				</div>
			</div>
		</section>
		<!-- End CTA One -->

<?php

include __DIR__ . '/../partials/footer.php';

?>