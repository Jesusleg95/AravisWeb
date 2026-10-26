<?php
    http_response_code(404);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
	<!-- Meta Básico -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Título principal -->
    <title>Error 404 | Página no encontrada - AravisWeb</title>

    <!-- SEO Básico -->
    <meta
        name="description"
        content="La página que buscas no está disponible. Regresa al inicio de AravisWeb para conocer nuestros servicios."
    >
    <meta name="robots" content="noindex, follow">

    
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
	
    <link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/custom.css" media="screen">
</head>
<body>

<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="assets/img/logo.png" alt="icono AravisWeb preloader"></div>
    </div>
</div>
<!-- Preloader End -->


<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-page-image wow fadeInUp">
                    <img src="assets/img/404.webp" alt="Imagen error 404">
                </div>
                <div class="error-page-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            La página que buscas no existe.
                        </h2>
                    </div>
                    <div class="error-page-content-body">
                        <a 
                            class="btn-default wow fadeInUp" 
                            data-wow-delay="0.4s" 
                            href="./"
                        >
                            Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Jquery Library File -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js file -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Validator js file -->
<script src="assets/js/validator.min.js"></script>
<!-- SlickNav js file -->
<script src="assets/js/jquery.slicknav.js"></script>
<!-- Magnific js file -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Wow js file -->
<script src="assets/js/wow.min.js"></script>
<!-- Main Custom js file -->
<script src="assets/js/function.js"></script>

</body>
</html>