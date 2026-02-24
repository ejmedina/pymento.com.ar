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

	<link rel="shortcut icon" href="<?= $base_url ?>/images/img-pymento/favicon-256.png" type="image/x-icon">
	<link rel="icon" href="<?= $base_url ?>/images/img-pymento/favicon-256.png" type="image/x-icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<?php
						$home_href = ($base_url ?: '') . '/';
					?>
					<div class="logo">
						<a href="<?= htmlspecialchars($home_href) ?>">
							<img src="<?= htmlspecialchars($base_url) ?>/images/img-pymento/logo.png" alt="" title="">
						</a>
					</div>
					
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
										<?php
											$is_home = ($nav_variant === "home");
											$href = $is_home ? "#about" : ($base_url . "/#about");
											$text = $is_home ? 'Nosotros' : 'Inicio';
										?>
										<li>
											<a href="<?= $href ?>"><?= $text ?></a>
										</li>
										<li class="dropdown"><a href="#">Servicios</a>
											<ul>
												<li><a href="<?= $base_url ?>/servicios/marketing/">Marketing y Adquisición</a></li>
												<li><a href="<?= $base_url ?>/servicios/consultoria/">Consultoría en negocios</a></li>
												<li><a href="<?= $base_url ?>/servicios/desarrollo/">Desarrollos y soluciones</a></li>
												<li><a href="<?= $base_url ?>/servicios/ia/">IA aplicada a soporte/ventas</a></li>
												<li><a href="<?= $base_url ?>/servicios/content/">Content Factory</a></li>
											</ul>
										</li>
										<?php if ($nav_variant === "home"): ?>
                                            <li><a href="#testimonial">Testimonios</a></li>
                                        <?php endif; ?>
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
					<?php
						$home_href = ($base_url ?: '') . '/';
					?>
					<div class="logo">
						<a href="<?= htmlspecialchars($home_href) ?>">
							<img src="<?= htmlspecialchars($base_url) ?>/images/img-pymento/logo.png" alt="" title="">
						</a>
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
                <div class="nav-logo"><a href="<?= $base_url ?>/index.php"><img src="<?= $base_url ?>/images/img-pymento/logo-contorno.webp" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->