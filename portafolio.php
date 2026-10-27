<?php
    include 'assets/includes/header.php';
?>

    <!-- Parallax Inicio -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">
                            Portafolio
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Fin -->

    <!-- Portafolio Inicio -->
    <div class="page-portfolio">
        <div class="container">

            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">
                            Nuestro Portafolio
                        </span>
                        <h2 class="text-anime-style-3">
                            Algunos de nuestros proyectos
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
                    include 'assets/includes/portafolio.php';
                ?> 
            </div>
        </div>
    </div>    
    <!-- Portafolio Fin -->

<?php 
    include 'assets/includes/footer.php';
?>