<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= htmlspecialchars($page_title ?? "PyMENTO | Soluciones tecnológicas para PyMES y Startups") ?></title>
	<!-- Stylesheets -->
	<link href="<?= $base_url ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?= $base_url ?>/css/style.css" rel="stylesheet">
	<link href="<?= $base_url ?>/css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="<?= $base_url ?>/css/custom.css" rel="stylesheet">

</head>

<body>

<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">

		<!-- Header Top -->
		<div class="header-top_two" hidden>
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<!-- Info List -->
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>(678) 345-3456</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>envato@mail.com</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>380 Albert St, Melbourne, Australia</a></li>
					</ul>
					
					<!-- Social Box -->
					<ul class="header-social_box">
						<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
						<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
						<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
						<li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
					</ul>
					
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<div class="logo"><a href="index.html"><img src="<?= $base_url ?>/images/img-pymento/logo-test.png" alt="" title=""></a></div>
					
					<!-- Upper Right -->
					<div class="upper-right">
						<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="<?= ($nav_variant === "home") ? "#about" : ($base_url . "/#about") ?>">Nosotros</a></li>
										<li class="dropdown"><a href="#">Servicios</a>
											<ul>
												<li><a href="<?= $base_url ?>/servicios/marketing/" target="_blank">Marketing y Adquisición</a></li>
												<li><a href="<?= $base_url ?>/servicios/consultoria/" target="_blank">Consultoría en negocios</a></li>
												<li><a href="<?= $base_url ?>/servicios/desarrollo/" target="_blank">Desarrollos y soluciones</a></li>
												<li><a href="<?= $base_url ?>/servicios/ia/" target="_blank">IA aplicada a soporte/ventas</a></li>
												<li><a href="<?= $base_url ?>/servicios/content/" target="_blank">Content Factory</a></li>
											</ul>
										</li>
										<?php if ($nav_variant === "home"): ?>
                                            <li><a href="#testimonial">Testimonios</a></li>
                                        <?php endif; ?>
										<li><a href="<?= $base_url ?>/contact.php/">Contacto</a></li>
									</ul>
								</div>
								
							</nav>
							<!-- Main Menu End-->
							
							<div class="outer-box d-flex align-items-center">								
								<div class="button-box">
									<a class="btn-style-three theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Contactarme<i class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Contactarme<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>
								
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title=""><img src="<?= $base_url ?>/images/img-pymento/logo-test.png" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
							
							<div class="button-box">
								<a class="btn-style-three theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Contactarme<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Contactarme<i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>						
					</div>					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="<?= $base_url ?>/images/img-pymento/logo.webp" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->