<?php
    include 'assets/includes/variables.php';
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
	<!-- Meta Básico -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Título principal -->
    <title><?= $title ?></title>

    <!-- SEO Básico -->
    <meta 
        name="description" 
        content="<?= $description ?>"
    >
    <meta 
        name="keywords" 
        content="desarrollo web, páginas web en México, páginas web en Ciudad Juárez, diseño web, sitios web empresariales, landing pages, páginas web para negocios"
    >      
    <meta name="author" content="AravisWeb">
    <meta name="robots" content="index, follow">

    <!-- URL principal de la página -->
    <link rel="canonical" href="<?= $canonical ?>">
    
    <!-- Open Graph: WhatsApp, Facebook, LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="AravisWeb - Desarrollo web profesional para negocios">
    <meta 
        property="og:description" 
        content="Creamos sitios web rápidos, modernos y optimizados para ayudar a tu negocio a crecer en internet."
    >
    <meta property="og:url" content="https://aravisweb.com/">
    <meta property="og:site_name" content="AravisWeb">
    <meta property="og:image" content="https://aravisweb.com/assets/img/og-image.png">
    <meta property="og:image:alt" content="AravisWeb - Desarrollo web profesional para negocios en México">

    <!-- Search Console -->
    <meta name="google-site-verification" content="-rLQYCRALhEm0Fnqr0ryh9F-QBu9zMc8VzoZcm6gVDA" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RLV3Q1XR6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3RLV3Q1XR6');
    </script>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
   
    <!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/custom.css" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"
            ></div>
			<div id="loading-icon">
                <img 
                    src="assets/img/logo.png" 
                    alt="icono AravisWeb preloader"
                />
            </div>
		</div>
	</div>
	<!-- Preloader End -->

	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Inicio -->
					<a class="navbar-brand text-light" href="./">
						<img 
                            src="assets/img/logo.png" 
                            alt="logo AravisWeb header" 
                            class="logo"
                        />
					</a>
					<!-- Logo Fin -->

                    <!-- Menu Inicio -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./">
                                        Inicio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./#nosotros">
                                        Nosotros
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./#servicios">
                                        Servicios
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./#faqs">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="portafolio.php">
                                        Portafolio
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-btn">
                            <a href="./#contacto" class="btn-default btn-highlighted">Contacto</a>
                        </div>
                    </div>
					<!-- Menu Fin -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>

    