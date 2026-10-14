<?php
    http_response_code(404);
    
    $phone = "(656)423-4960";
    $phone_link = "+526564234960";
    $email = "hola@aravisweb.com";
    $facebook = "https://www.facebook.com/share/1HNuYmC9m4/";
    $whatsapp = "https://wa.me/526564234960?text=Hola%2C%20me%20interesa%20una%20p%C3%A1gina%20web%20para%20mi%20negocio";
    $maps = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145073.98299647568!2d-106.52056173114838!3d31.65208227778436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75ecb3d0b329d%3A0xb196100549c7974!2zSnXDoXJleiwgQ2hpaC4!5e0!3m2!1ses-419!2smx!4v1784661053509!5m2!1ses-419!2smx";
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
                    <img src="assets/img/404.webp" alt="404">
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