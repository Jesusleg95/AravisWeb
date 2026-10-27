<?php 
   include 'assets/includes/variables.php';
?>

<!doctype html>
<html lang="es-MX">
<head>
   
<!-- Meta Básico -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Título Principal -->
<title><?php echo $title; ?></title>

<!-- SEO Básico -->
<meta 
   name="description" 
   content="<?php echo $description; ?>"
>
<meta name="author" content="L&A Reciclados">
<meta name="robots" content="index, follow">

<!-- URL principal de la página -->
<?php 
   if($index){
?>
   <link rel="canonical" href="http://lyareciclados.com/">
<?php
   }else{
?>
   <link rel="canonical" href="http://lyareciclados.com/<?php echo $currentPage; ?>">
<?php
   }
?>

<!-- Open Graph: WhatsApp, Facebook, LinkedIn -->
<meta property="og:type" content="website">
<meta property="og:title" content="L&A Reciclados">
<meta 
   property="og:description" 
   content="Hola"
>
<meta property="og:url" content="http://lyareciclados.com/">
<meta property="og:site_name" content="L&A Reciclados">
<meta property="og:image" content="http://lyareciclados.com/assets/img/og-image.png">
<meta property="og:image:alt" content="L&A Reciclados">

<!-- Favicon -->
<link rel=icon href="assets/img/favicon.png" type="image/png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">

<!-- Stylesheet -->
<link href="assets/css/custom.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/prettyPhoto.css" rel="stylesheet">
<link href="assets/css/all.min.css" rel="stylesheet">
   
<style>
   <?php if($index){ ?>
      @media (min-width: 769px) {
         .home-services .load-more.text-center.w-100 {
            padding-top: 90px;
            padding-bottom: 30px;
         }
         a.navbar-brand {
            background: radial-gradient(circle, rgba(255,255,255,1) 34%, rgba(0,0,0,0) 50%);
         }
      }
      @media (min-width: 1000px) and (max-width: 1300px){
         a.navbar-brand {
            background: radial-gradient(circle, rgba(255,255,255,1) 51%, rgba(0,0,0,0) 71%);
         }
      }
   <?php }else{ ?>
      @media (min-width: 769px) {
         section.wf100.p100.inner-header {
            padding-top: 150px !important;
         }
      }
      @media (min-width: 769px) {
         a.navbar-brand {
            background: radial-gradient(circle, rgba(255,255,255,1) 34%, rgba(0,0,0,0) 50%);
         }
      }
      @media (min-width: 1000px) and (max-width: 1300px){
         a.navbar-brand {
            background: radial-gradient(circle, rgba(255,255,255,1) 51%, rgba(0,0,0,0) 71%);
         }
      }
   <?php } ?>
   .capitalizar {
      text-transform: capitalize;
   }
   .justificar {
      text-align: justify;
   }
   .heading-1{
      font-family: 'Roboto Slab', serif!important;
      font-weight: 700;
      margin: 0px;
      font-size: 90px!important;
      color: #ffffff;
      line-height: 70px;
   }

</style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18087610397"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'AW-18087610397');
</script>

</head>
<body>

<div class="wrapper <?php if($index){ echo "home1";} ?>">
      
<!-- Header Inicio -->
<header class="header-style-1">
   <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="./">
         <img 
            src="assets/img/logo.png" 
            alt="Imagen logotipo"
         />
      </a>
      <button 
         class="navbar-toggler" 
         type="button" 
         data-toggle="collapse" 
         data-target="#navbarSupportedContent" 
         aria-controls="navbarSupportedContent" 
         aria-expanded="false" 
         aria-label="Toggle navigation"
      > 
         <i class="fas fa-bars"></i> 
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
               <li class="nav-item"> 
                  <a class="nav-link" href="./">
                     Inicio
                  </a>
               </li>
            </li>
            <li class="nav-item"> 
               <a class="nav-link" href="nosotros.php">
                  Quienes Somos
               </a>
            </li>
            <li class="nav-item"> 
               <a class="nav-link" href="servicios.php">
                  Servicios
               </a>
            </li>  
            <li class="nav-item">
               <a class="nav-link" href="contacto.php">
                  Contacto
               </a>
            </li>
         </ul>
      </div>
   </nav>
</header>
<!-- Header Fin -->