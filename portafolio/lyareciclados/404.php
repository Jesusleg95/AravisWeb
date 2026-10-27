<?php
   http_response_code(404);
?>

<!doctype html>
<html lang="es-MX">
<head>
   
<!-- Meta Básico -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Título Principal -->
<title>Error 404 | Página no encontrada - L&A Reciclados</title>

<!-- SEO Básico -->
<meta 
    name="description" 
    content="La página que buscas no está disponible. Regresa al inicio de L&A Reciclados para conocer nuestros servicios."
>
<meta name="robots" content="noindex, follow">

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
  
   .capitalizar {
      text-transform: capitalize;
   }
   .justificar {
      text-align: justify;
   }
</style>



</head>
<body>

<div class="wrapper <?php if($index){ echo "home1";} ?>">
    
    <section class="wf100 about">
        <div class="about-video-section wf100">
            <div class="container">
                <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>
                            La página que buscas no existe.
                        </h2>
                        <a href="./">
                            Volver al Inicio
                        </a> 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img 
                            src="assets/img/404.png"
                            alt="Imagen Error 404"
                        /> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

</div> 

<!--   JS Files Start  --> 
<script src="assets/js/whatsapp.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script> 
<script src="assets/js/jquery-migrate-1.4.1.min.js"></script> 
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/jquery.prettyPhoto.js"></script> 
<script src="assets/js/isotope.min.js"></script> 
<script src="assets/js/custom.js"></script>
<script>
    // this is the id of the form
    $("#formLlamada").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
        var url = form.attr('action');

        $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data){
            if (data) {
                alert('Mensaje enviado, Gracias'); // show response from the php script.
                $('#formLlamada').trigger("reset");
            }else{
                alert('Error, intentelo de nuevo');  
            }
        }
        });
    });
</script>
</body>
</html>