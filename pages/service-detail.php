<?php
require_once __DIR__ . '/../config.php';

$services = [
	"marketing" => [
		"title" => "Marketing y Adquisición",
		"page_title" => "Servicios | Marketing y Adquisición",
		"hero" => [
		"image" => $base_url . "/images/resource/service-10.jpg",
		"excerpt" => "Estrategia, campañas y optimización para atraer clientes y convertir mejor.",
		"paragraphs" => [
			"Definimos tu propuesta de valor, el mensaje y el canal correcto para llegar al público ideal.",
			"Medimos, iteramos y optimizamos para que la inversión se traduzca en resultados."
		],
		],
		"feature_twos" => [
		[
			"icon" => "$base_url . /images/icons/feature-6.png",
			"heading" => "Estrategia clara",
			"text" => "Objetivos, audiencias y embudo definidos para ejecutar con foco."
		],
		[
			"icon" => "$base_url . /images/icons/feature-7.png",
			"heading" => "Optimización continua",
			"text" => "A/B tests, medición y mejoras constantes para convertir más."
		],
		],
		"mid" => [
		"image" => "$base_url . /images/resource/service-11.jpg",
		"heading" => "Campañas que generan demanda",
		"text" => "Planificamos y ejecutamos acciones alineadas a tu negocio para generar crecimiento sostenido."
		],
		"feature_threes" => [
		["icon" => "$base_url . /images/icons/service-35.png", "text" => "Implementación\nrápida"],
		["icon" => "$base_url . /images/icons/service-36.png", "text" => "Métricas\nclaras"],
		["icon" => "$base_url . /images/icons/service-37.png", "text" => "Mejoras\nconstantes"],
		],
	],

	"consultoria" => [
		"title" => "Consultoría en negocios",
		"page_title" => "Servicios | Consultoría en negocios",
		"hero" => [
		"image" => "$base_url . /images/resource/service-10.jpg",
		"excerpt" => "Diagnóstico y planificación para ordenar procesos y acelerar resultados.",
		"paragraphs" => [
			"Analizamos tu operación, detectamos cuellos de botella y priorizamos acciones de alto impacto.",
			"Te acompañamos con un plan claro, medible y ejecutable por etapas."
		],
		],
		"feature_twos" => [
		[
			"icon" => "$base_url . /images/icons/feature-6.png",
			"heading" => "Diagnóstico y foco",
			"text" => "Entendemos el problema real y definimos prioridades sin dispersión."
		],
		[
			"icon" => "$base_url . /images/icons/feature-7.png",
			"heading" => "Roadmap accionable",
			"text" => "Un plan por etapas con tiempos, responsables y métricas."
		],
		],
		"mid" => [
		"image" => "$base_url . /images/resource/service-11.jpg",
		"heading" => "Decisiones basadas en datos",
		"text" => "Definimos KPIs, armamos tableros y te ayudamos a medir para decidir mejor."
		],
		"feature_threes" => [
		["icon" => "$base_url . /images/icons/service-35.png", "text" => "Procesos\nordenados"],
		["icon" => "$base_url . /images/icons/service-36.png", "text" => "Objetivos\nmedibles"],
		["icon" => "$base_url . /images/icons/service-37.png", "text" => "Acompañamiento\ncercano"],
		],
	],

	"desarrollo" => [
		"title" => "Desarrollos y soluciones",
		"page_title" => "Servicios | Desarrollos y soluciones",
		"hero" => [
		"image" => "$base_url . /images/resource/service-10.jpg",
		"excerpt" => "Software a medida, automatizaciones e integraciones pensadas para tu operación.",
		"paragraphs" => [
			"Construimos soluciones que se adaptan a tu flujo de trabajo, no al revés.",
			"Integramos sistemas, reducimos tareas manuales y mejoramos la trazabilidad."
		],
		],
		"feature_twos" => [
		[
			"icon" => "$base_url . /images/icons/feature-6.png",
			"heading" => "A medida y escalable",
			"text" => "Diseño modular para crecer sin re-hacer todo de cero."
		],
		[
			"icon" => "$base_url . /images/icons/feature-7.png",
			"heading" => "Integraciones reales",
			"text" => "APIs, automatizaciones y conexiones con tus herramientas actuales."
		],
		],
		"mid" => [
		"image" => "$base_url . /images/resource/service-11.jpg",
		"heading" => "De la idea a producción",
		"text" => "Prototipamos rápido, validamos con vos y entregamos iterando con calidad."
		],
		"feature_threes" => [
		["icon" => "$base_url . /images/icons/service-35.png", "text" => "Automatización\nde tareas"],
		["icon" => "$base_url . /images/icons/service-36.png", "text" => "Integración\ncon sistemas"],
		["icon" => "$base_url . /images/icons/service-37.png", "text" => "Soporte y\nmejoras"],
		],
	],

	"ia" => [
		"title" => "IA aplicada a soporte/ventas",
		"page_title" => "Servicios | IA aplicada a soporte y ventas",
		"hero" => [
		"image" => "$base_url . /images/resource/service-10.jpg",
		"excerpt" => "Asistentes y automatizaciones con IA para escalar atención y ventas.",
		"paragraphs" => [
			"Implementamos flujos para responder más rápido, calificar consultas y liberar tiempo del equipo.",
			"La IA se integra con tus canales y procesos, manteniendo control y trazabilidad."
		],
		],
		"feature_twos" => [
		[
			"icon" => "$base_url . /images/icons/feature-6.png",
			"heading" => "Atención 24/7",
			"text" => "Respuestas consistentes, derivación inteligente y seguimiento."
		],
		[
			"icon" => "$base_url . /images/icons/feature-7.png",
			"heading" => "Ventas asistidas",
			"text" => "Calificación de leads, FAQs, objeciones y cierre con mejor experiencia."
		],
		],
		"mid" => [
		"image" => "$base_url . /images/resource/service-11.jpg",
		"heading" => "Automatización con control",
		"text" => "Definimos límites, aprobaciones y métricas para que la IA sume sin sorpresas."
		],
		"feature_threes" => [
		["icon" => "$base_url . /images/icons/service-35.png", "text" => "Respuestas\nmás rápidas"],
		["icon" => "$base_url . /images/icons/service-36.png", "text" => "Leads\nmejor calificados"],
		["icon" => "$base_url . /images/icons/service-37.png", "text" => "Menos carga\noperativa"],
		],
	],

	"content" => [
		"title" => "Content Factory",
		"page_title" => "Servicios | Content Factory",
		"hero" => [
		"image" => "$base_url . /images/resource/service-10.jpg",
		"excerpt" => "Contenido y piezas listas para comunicar mejor y vender más.",
		"paragraphs" => [
			"Creamos contenido alineado a tu marca y a tus objetivos (captación, confianza y conversión).",
			"Planificamos, producimos y optimizamos para sostener presencia con coherencia."
		],
		],
		"feature_twos" => [
		[
			"icon" => "$base_url . /images/icons/feature-6.png",
			"heading" => "Estrategia de contenidos",
			"text" => "Calendario, formatos y mensajes para cada etapa del embudo."
		],
		[
			"icon" => "$base_url . /images/icons/feature-7.png",
			"heading" => "Producción constante",
			"text" => "Piezas listas para publicar: textos, creatividades y variantes."
		],
		],
		"mid" => [
		"image" => "$base_url . /images/resource/service-11.jpg",
		"heading" => "Coherencia y calidad",
		"text" => "Mantenemos una línea clara de marca para que todo lo que publiques sume."
		],
		"feature_threes" => [
		["icon" => "$base_url . /images/icons/service-35.png", "text" => "Calendario\nmensual"],
		["icon" => "$base_url . /images/icons/service-36.png", "text" => "Piezas\nlistas"],
		["icon" => "$base_url . /images/icons/service-37.png", "text" => "Optimización\npor performance"],
		],
	],
];



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
		<section class="page-title" style="background-image:url(<?= $base_url ?>/images/background/7.jpg)">
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
								<div class="widget-content" style="background-image:url(<?= $base_url ?>/images/Img-pymento/service-contact.jpg)">
									<div class="title">Contactanos ahora</div>
									<div class="help">Cualquier Consulta!</div>
									<a class="phone" href="tel:+557-3452-234">557-3452-234</a>
									<div class="form">O podes llenar el form y nos pondremos en contacto:</div>
									<div class="button-box text-center">
										<a href="#">Contactarme<span class="fa-solid fa-link fa-fw"></span></a>
									</div>
								</div>
							</div>

						</aside>
					</div>

					<!-- Content Side -->
					<div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
						<div class="service-detail">
							<div class="inner-box">
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