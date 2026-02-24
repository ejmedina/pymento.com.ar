<?php
require_once __DIR__ . '/../config.php';

$page_title = "PyMENTO | Soluciones tecnológicas para PyMES y Startups";
$nav_variant = "home";

include __DIR__ . '/../partials/header.php';

?>
	
	<!-- Main Slider -->
	<section class="slider-two">
		<div class="single-item-carousel owl-carousel owl-theme">
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(<?= $base_url ?>/images/img-pymento/hero-tecnologia.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(<?= $base_url ?>/images/main-slider/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Tecnología aplicada a negocios reales</div>
							<h1 class="slider-two_heading">Tecnología que ordena tu operación y acelera tus ventas</h1>
							<div class="slider-two_text">
									Automatizamos procesos, integramos herramientas y construimos software a medida para que tu PyME o Startup 
									gane eficiencia, reduzca costos y convierta mejor.
							</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Conocer nuestros servicios<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Conocer nuestros servicios<i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(<?= $base_url ?>/images/img-pymento/hero-marketing.jpeg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(<?= $base_url ?>/images/main-slider/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Marketing y Adquisicion</div>
							<h1 class="slider-two_heading">Adquisición con medición</h1>
							<div class="slider-two_text">
								Definimos propuesta de valor, canales y embudo. Ejecutamos campañas y optimizamos semanalmente con métricas claras para que cada peso invertido genere demanda.
							</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Conocé más <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Conocé más <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(<?= $base_url ?>/images/img-pymento/hero-ia.webp)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(<?= $base_url ?>/images/main-slider/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">IA aplicada a soporte y ventas</div>
							<h1 class="slider-two_heading">Automatizá tu atención al cliente y ventas con IA</h1>
							<div class="slider-two_text">
								Implementamos asistentes inteligentes conectados a WhatsApp, web y redes sociales para responder consultas, 
								calificar clientes y reducir carga operativa.
							</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Conocé más <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Conocé más <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Main Slider -->
	
	<!-- Featured -->
	<section class="featured-one">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="<?= $base_url ?>/servicios/marketing/"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="<?= $base_url ?>/images/icons/feature-1.png" alt="" />
						</span>
						<h5 class="feature-block_one-title">Marketing y Adquisición</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="<?= $base_url ?>/servicios/consultoria/"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="<?= $base_url ?>/images/icons/feature-2.png" alt="" />
						</span>
						<h5 class="feature-block_one-title">Consultoría en negocios</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="<?= $base_url ?>/servicios/desarrollo/"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="<?= $base_url ?>/images/icons/feature-3.png" alt="" />
						</span>
						<h5 class="feature-block_one-title">Desarrollos y soluciones</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="<?= $base_url ?>/servicios/ia/"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="<?= $base_url ?>/images/icons/feature-4.png" alt="" />
						</span>
						<h5 class="feature-block_one-title">IA aplicada a soporte/ventas</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="<?= $base_url ?>/servicios/content/"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="<?= $base_url ?>/images/icons/content-icon.png" class="content-factory-icon" alt="" />
						</span>
						<h5 class="feature-block_one-title">Content Factory</h5>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured -->
	
	<!-- Clients One -->
	<section class="clients-one">
		<div class="clients-one_pattern" style="background-image:url(<?= $base_url ?>/images/img-pymento/hero-tecnologia.jpg)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="clients-one_title-column col-lg-4 col-md-12 col-sm-12">
					<div class="client-one_title">NUESTROS CLIENTES: </div>
				</div>
				<!-- Carousel Column -->
				<div class="clients-one_carousel-column col-lg-8 col-md-12 col-sm-12">
					<!-- Sponsors Carousel -->
					<ul class="sponsors-carousel-two owl-carousel owl-theme">
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="<?= $base_url ?>/images/img-pymento/logo-plusrasgo.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="<?= $base_url ?>/images/img-pymento/logo-cooperativa.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="<?= $base_url ?>/images/img-pymento/logo-ahorrointeligente.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box client-logo-small"><a href="#"><img src="<?= $base_url ?>/images/img-pymento/logo-SNZ-bg.png" alt=""></a></figure></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients One -->
	
	<!-- About -->
	<section id="about" class="about-two">
		<div class="about-two_pattern-two" style="background-image:url(<?= $base_url ?>/images/background/pattern-13.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_pattern-one" style="background-image:url(<?= $base_url ?>/images/background/pattern-12.png)"></div>
					<div class="about-two_image">
						<img src="<?= $base_url ?>/images/img-pymento/about.webp" alt="" />
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_content-inner">
						<div class="sec-title_two">
							<div class="sec-title_two-title">Sobre Nosotros</div>
							<h2 class="sec-title_two-heading">Soluciones <span>reales</span> para negocios <span>reales</span></h2>
						</div>
						<div class="about-two_text">
							En PyMENTO ayudamos a PyMEs y startups a convertir ideas en resultados. Combinamos desarrollo, automatización y 
							estrategia digital para ordenar procesos, reducir tareas manuales y mejorar ventas. Trabajamos cerca: 
							implementamos, documentamos y seguimos mejorando para que la solución funcione hoy y escale mañana.
						</div>
						<div class="about-two_feature">
							<div class="row clearfix">
							
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="<?= $base_url ?>/images/icons/about-1.png" alt="" />
										</span>
										<h6 class="about-two_block-heading">Implementación clara <br> y rápida</h6>
									</div>
								</div>
								
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="<?= $base_url ?>/images/icons/about-2.png" alt="" />
										</span>
										<h6 class="about-two_block-heading">Soporte técnico cercano y continuo</h6>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="d-flex flex-wrap">
							<a class="btn-style-three theme-btn btn-item" href="#">
								<div class="btn-wrap">
									<span class="text-one">Hablemos de tu proyecto <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">Hablemos de tu proyecto <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>							
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Two -->

	<!-- Services -->
	<section class="services-one" id="servicios">
		<div class="services-one_pattern-layer" style="background-image:url(<?= $base_url ?>/images/background/pattern-14.png)"></div>
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title_two centered">
				<div class="sec-title_two-title">Nuestros servicios</div>
				<h2 class="sec-title_two-heading">Lo que hacemos para que tu negocio <span>crezca</span></h2>
			</div>

			<div class="services-one_inner-coontainer">
				<div class="four-item-carousel owl-carousel owl-theme">

					<!-- 1) Marketing y Adquisición -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon">
								<img src="<?= $base_url ?>/images/icons/feature-1.png" alt="Marketing y Adquisición" />
							</span>
							<h5 class="service-block_three-heading">Marketing y Adquisición</h5>
							<div class="service-block_three-text">
								Campañas, embudos y medición para generar demanda y convertir mejor.
							</div>

							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two">
									<img src="<?= $base_url ?>/images/icons/feature-1.png" alt="Marketing y Adquisición" />
								</span>
								<h5 class="service-block_three-heading alternate">
									<a href="<?= $base_url ?>/servicios/marketing/">Marketing y Adquisición</a>
								</h5>
								<a class="service-block_three-learn" href="<?= $base_url ?>/servicios/marketing/">Ver detalle</a>
							</div>
						</div>
					</div>

					<!-- 2) Consultoría en negocios -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon">
								<img src="<?= $base_url ?>/images/icons/feature-2.png" alt="Consultoría en negocios" />
							</span>
							<h5 class="service-block_three-heading">Consultoría en negocios</h5>
							<div class="service-block_three-text">
								Diagnóstico + roadmap para ordenar operación, foco y métricas.
							</div>

							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two">
									<img src="<?= $base_url ?>/images/icons/feature-2.png" alt="Consultoría en negocios" />
								</span>
								<h5 class="service-block_three-heading alternate">
									<a href="<?= $base_url ?>/servicios/consultoria/">Consultoría en negocios</a>
								</h5>
								<a class="service-block_three-learn" href="<?= $base_url ?>/servicios/consultoria/">Ver detalle</a>
							</div>
						</div>
					</div>

					<!-- 3) Desarrollos y soluciones -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon">
								<img src="<?= $base_url ?>/images/icons/feature-3.png" alt="Desarrollos y soluciones" />
							</span>
							<h5 class="service-block_three-heading">Desarrollos y soluciones</h5>
							<div class="service-block_three-text">
								Software a medida, integraciones y automatizaciones para ganar eficiencia.
							</div>

							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two">
									<img src="<?= $base_url ?>/images/icons/feature-3.png" alt="Desarrollos y soluciones" />
								</span>
								<h5 class="service-block_three-heading alternate">
									<a href="<?= $base_url ?>/servicios/desarrollo/">Desarrollos y soluciones</a>
								</h5>
								<a class="service-block_three-learn" href="<?= $base_url ?>/servicios/desarrollo/">Ver detalle</a>
							</div>
						</div>
					</div>

					<!-- 4) IA aplicada a soporte/ventas -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon">
								<img src="<?= $base_url ?>/images/icons/feature-4.png" alt="IA aplicada a soporte/ventas" />
							</span>
							<h5 class="service-block_three-heading">IA aplicada a soporte/ventas</h5>
							<div class="service-block_three-text">
								Asistentes y automatizaciones para escalar atención y ventas con control.
							</div>

							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two">
									<img src="<?= $base_url ?>/images/icons/feature-4.png" alt="IA aplicada a soporte/ventas" />
								</span>
								<h5 class="service-block_three-heading alternate">
									<a href="<?= $base_url ?>/servicios/ia/">IA aplicada a soporte/ventas</a>
								</h5>
								<a class="service-block_three-learn" href="<?= $base_url ?>/servicios/ia/">Ver detalle</a>
							</div>
						</div>
					</div>

					<!-- 5) Content Factory -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon">
								<img src="<?= $base_url ?>/images/icons/content-icon.png" class="content-factory-icon" alt="Content Factory" />
							</span>
							<h5 class="service-block_three-heading">Content Factory</h5>
							<div class="service-block_three-text">
								Videos para anuncios con modelos generados con IA: consistentes, realistas y escalables.
							</div>

							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two">
									<img src="<?= $base_url ?>/images/icons/content-icon.png" class="content-factory-icon" alt="Content Factory" />
								</span>
								<h5 class="service-block_three-heading alternate">
									<a href="<?= $base_url ?>/servicios/content/">Content Factory</a>
								</h5>
								<a class="service-block_three-learn" href="<?= $base_url ?>/servicios/content/">Ver detalle</a>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Services -->

	<!-- Testimonial Section -->
	<section id="testimonial" class="testimonial-section" style="background-image: url(<?= $base_url ?>/images/img-pymento/testimonial-bg.webp)">
		<div class="pattern-layer-one" style="background-image: url(<?= $base_url ?>/images/background/pattern-25.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Sec Title -->
						<div class="sec-title_two">
							<div class="sec-title_two-title">Testimonios</div>
							<h2 class="sec-title_two-heading">Lo que dicen quienes <br> <span>trabajaron con nosotros</span></h2>
							<div class="sec-title_two-text">
								Nos enfocamos en resultados: orden, eficiencia y crecimiento. Estos son algunos comentarios
								de clientes con los que implementamos mejoras reales en sus procesos y su presencia digital.
							</div>
						</div>
						<!-- (Botón eliminado) -->
					</div>
				</div>

				<!-- Carousel Column -->
				<div class="carousel-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column" style="background-image: url(<?= $base_url ?>/images/background/pattern-26.png)">
						<div class="authors-outer">
							<div class="author-one">
								<img src="<?= $base_url ?>/images/img-pymento/testimonio-1.webp" alt="" />
							</div>
							<div class="author-two">
								<img src="<?= $base_url ?>/images/img-pymento/testimonio-4.webp" alt="" />
							</div>
							<div class="author-three">
								<img src="<?= $base_url ?>/images/img-pymento/testimonio-3.webp" alt="" />
							</div>
							<div class="author-four">
								<img src="<?= $base_url ?>/images/img-pymento/testimonio-2.webp" alt="" />
							</div>
						</div>

						<div class="single-item-carousel owl-carousel owl-theme">

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">“Necesitábamos ordenar procesos y automatizar tareas repetitivas. Pymento entendió rápido el negocio, propuso mejoras y lo implementó sin vueltas. Hoy trabajamos más rápido y con menos errores.”</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="<?= $base_url ?>/images/img-pymento/testimonio-1.webp" alt="" />
										</span>
										<h5>Mariana G.</h5>
										<div class="designation">Operaciones · PyME</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">
										“Ordenamos procesos y automatizamos tareas repetitivas.
										PyMENTO entendió rápido el negocio, propuso mejoras y las implementó por etapas. 
										Hoy trabajamos más rápido y con menos errores.”
									</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="<?= $base_url ?>/images/img-pymento/testimonio-4.webp" alt="" />
										</span>
										<h5>Lucas R.</h5>
										<div class="designation">Founder · Startup</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">“Implementamos automatizaciones e integraciones que nos liberaron horas por semana. Entregaron rápido, documentaron y quedaron disponibles para ajustes. Se nota el enfoque profesional.”</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="<?= $base_url ?>/images/img-pymento/testimonio-3.webp" alt="" />
										</span>
										<h5>Sofía P.</h5>
										<div class="designation">Administración · Servicios</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">

				<div class="left-box">
					<h3 class="cta-one_heading">¿Listo para mejorar tu negocio con tecnología?</h3>
					<div class="cta-one_text">
						Te ayudamos a ordenar procesos, automatizar tareas y crecer con soluciones digitales a medida para tu empresa.
					</div>
				</div>

				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.html">Contactarme</a>
				</div>

			</div>
		</div>
	</section>
	<!-- End CTA One -->

<?php 
	include __DIR__ . '/../partials/footer.php';
?>