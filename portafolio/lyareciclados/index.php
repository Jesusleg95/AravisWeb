<?php 
   include 'assets/includes/header.php';
?>
    
   <div id="search">
      <button type="button" class="close">
         x
      </button>
      <form class="search-overlay-form">
         <input 
            type="search" 
            value="" 
            placeholder="type keyword(s) here" 
         />
         <button 
            type="submit" 
            class="btn btn-primary"
         >
            <i class="fas fa-search"></i>
         </button>
      </form>
   </div>

   <!-- Slider Inicio-->
   <section id="home-slider" class="owl-carousel owl-theme wf100">
      <div class="item">
         <div class="slider-caption">
            <div class="container">
               <strong class="capitalizar">
                  Soluciones Integrales de Reciclaje
               </strong>
               <h1>
                  L & A Reciclados Industriales
               </h1>
               <p>
                  Dedicados a la recolección, manejo y disposición de residuos 
                  reciclables.
               </p>
               <a href="servicios.php" class="active">
                  Nuestros Sevicios
               </a> 
               <a href="nosotros.php">
                  Sobre Nosotros
               </a> 
            </div>
         </div>
         <img 
            src="assets/img/slide1.jpg" 
            alt="Imagen Slider 1"
         /> 
      </div>
      <div class="item">
         <div class="slider-caption">
            <div class="container">
               <strong class="capitalizar">
                  Tu mejor aliado en la gestión responsable de residuos de manejo 
                  especial
               </strong>
               <p class="heading-1">
                  Asistencia Personalizada
               </p>
               <p>
                  Cumplimos las normativas y estándares de calidad en los procesos 
                  de reciclados de diversas fuentes de residuos.
               </p>
               <a href="servicios.php" class="active">
                  Nuestros Servicios
               </a>
               <a href="nosotros.php">
                  Sobre nosotros
               </a> 
            </div>
         </div>
         <img 
            src="assets/img/slide2.png" 
            alt="Imagen Slider 2"
         /> 
      </div>
   </section>
   <!-- Slider Fin -->

   <!-- Nosotros Inicio -->
   <section id="#about" class="#about">
      <div class="home-about wf100 p80">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about-txt">
                     <h2 class="capitalizar"> 
                        <span>
                           L & A Reciclados Industriales
                        </span> 
                        "Comprometidos con el Medio Ambiente"
                     </h2>
                     <p class="justificar">
                        Con más de 20 años de experiencia en el manejo de residuos de 
                        manejo especial en la industria maquiladora, somos líderes 
                        confiables en ofrecer soluciones eficientes y seguras para la 
                        recolección, transporte, tratamiento y disposición final de los 
                        residuos.
                     </p>
                     <p class="justificar">
                        Nuestra trayectoria nos respalda, garantizando un servicio 
                        eficiente, seguro y puntual. 
                        Confía en nuestra experiencia para mantener tu operación en 
                        cumplimiento y contribuir a un futuro más sostenible.    
                     </p>
                     <a class="lm" href="nosotros.php">
                        Conocer más
                     </a> 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about-pic">
                     <div class="pic1">
                        <div id="pic-slider" class="owl-carousel owl-theme">	
                           <div class="item">
                              <img 
                                 src="assets/img/nosotros-1.jpg" 
                                 alt="Imagen nosotros 1"
                              />
                           </div>
                           <div class="item">
                              <img 
                                 src="assets/img/nosotros-2.jpg" 
                                 alt="Imagen nosotros 2"
                              />
                           </div>
                        </div>
                     </div>
                     <div class="pic2">
                        <img 
                           src="assets/img/nosotros-3.jpg" 
                           alt="Imagen nosotros 3"
                        />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Nosotros Fin --> 

   <!-- Servicios Inicio -->
   <section class="home-services wf100 p80bottom">
      <div class="load-more text-center w-100"> 
         <a 
            style="position: relative;z-index: 2;" 
            href="servicios.php" 
            class="lm"
         >
            Conoce nuestros Servicios
         </a> 
      </div>
      <div class="row">
         <div class="ser-col">
            <!-- Servicio 1 Inicio -->
            <div class="ser-box">
               <div class="ser-thumb">      
                  <img 
                     src="assets/img/servicio-index1.jpg" 
                     alt="Imagen Servicio 1"
                  />
               </div>
               <div class="ser-txt">
                  <h4>
                     <a href="#">
                        Disposición de metales de todo tipo: Fierro, acero, 
                        aluminio, cobre, bronce, cable, lámina etc..
                     </a>
                  </h4>
               </div>
            </div>
         </div>
         <!-- Servicio 1 Fin --> 

         <!-- Servicio 2 Inicio -->
         <div class="ser-col">
            <div class="ser-box">
               <div class="ser-thumb">
                  <img 
                     src="assets/img/servicio-index2.jpg" 
                     alt="Imagen Servicio 2"
                  />
               </div>
               <div class="ser-txt">
                  <h4>
                     <a href="#">
                        Reciclado de plásticos, transformándolos en materia 
                        prima de insumos.
                     </a> 
                  </h4>
               </div>
            </div>
         </div>
         <!-- Servicio 2 Fin-->

         <!-- Servicio 3 Inicio -->
         <div class="ser-col">
            <div class="ser-box">
               <div class="ser-thumb"> 
                  <img 
                     src="assets/img/servicio-index3.jpg" 
                     alt="Imagen Servicio 3"
                  />
               </div>
               <div class="ser-txt">
                  <h4> 
                     <a href="#">
                        Recolección y disposición de tarimas de madera de todas 
                        las medidas.
                     </a> 
                  </h4>    
               </div>
            </div>
         </div>
         <!-- Servicio 3 Fin --> 

         <!-- Servicio 4 Inicio -->
         <div class="ser-col">
            <div class="ser-box">
               <div class="ser-thumb">
                  <img 
                     src="assets/img/servicio-index4.jpg" 
                     alt="Imagen Servicio 4"
                  />
               </div>
               <div class="ser-txt">
                  <h4>
                     <a href="#">
                        Venta de tarimas con excelente calidad y 
                        tratamiento térmico.
                     </a> 
                  </h4>
               </div>
            </div>
         </div>
         <!-- Servicio 4 Fin -->

         <!-- Servicio 5 Inicio -->
         <div class="ser-col">
            <div class="ser-box">
               <div class="ser-thumb">
                  <img 
                     src="assets/img/servicio-index5.jpg" 
                     alt="Imagen Servicio 5"
                  />
               </div>
               <div class="ser-txt">
                  <h4>
                     <a href="#">
                        Comercialización de carton tipo americano y mixto.
                     </a> 
                  </h4>
               </div>
            </div>
         </div>
         <!-- Servicio 5 Fin -->

      </div>
   </section>
   <!-- Servicios Fin --> 
            
   <!-- Contacto Inicio -->
   <section class="promises wf100 p80">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="pro-title">
                  <h2>
                     Estamos listos!
                  </h2>
                  <h3>
                     Disponemos de personal capacitado para realizar la segregación 
                     adecuada y oportuna de sus residuos dentro de sus instalaciones 
                     en caso de requerirlo.
                  </h3>
               </div>
            </div>
            <div class="col-md-5">
               <div class="volunteer-form">
                  <div class="section-title">
                     <strong>
                        Deseas que te contactemos?
                     </strong>
                     <h2>
                        Nosotros te llamamos
                     </h2>
                  </div>
                  <form 
                     id="formLlamada" 
                     action="php/llamada.php" 
                     method="POST"
                  >
                     <ul>
                        <li>
                           <input 
                              type="text" 
                              class="form-control" 
                              placeholder="Nombre"  
                              required 
                              name="nombre" 
                              aria-label="Your Name"
                           />
                        </li>
                        <li>
                           <input 
                              type="text" 
                              class="form-control" 
                              placeholder="Teléfono"  
                              required 
                              name="telefono" 
                              aria-label="Email Address"
                           />
                        </li>
                        <li>
                           <input 
                              type="text" 
                              class="form-control" 
                              placeholder="Empresa" 
                              required  
                              name="empresa" 
                              aria-label="Contact"
                           />
                        </li>
                        <li>
                           <input 
                              type="submit" 
                              class="fsubmit" 
                              value="Solicitar llamada"
                           />
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Contacto Fin --> 

   <!-- Galería Inicio -->
   <section class="agallery gallery wf100 p80">
      <div class="container">
         <div class="row">
            <div class="col-lg-5">
               <div class="section-title">
                  <strong>
                     Galería
                  </strong>
                  <h2>
                     Nuestros Servicios
                  </h2>
               </div> 
            </div>
            <div class="col-lg-7">
               <ul class="flinks">
                  <li>
                     <a data-filter="*" href="#" title="">
                        Mostrar todo
                     </a>
                  </li>
                  <li>
                     <a data-filter=".f-cat1" href="#" title="">
                        Metales
                     </a>
                  </li>
                  <li>
                     <a data-filter=".f-cat2" href="#" title="">
                        Plásticos
                     </a>
                  </li>
                  <li>
                     <a data-filter=".f-cat3" href="#" title="">
                        Tarimas
                     </a>
                  </li>
                  <li>
                     <a data-filter=".f-cat4" href="#" title="">
                        Reciclados
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="gallery-inner masonry">
            <div class="row">
               <ul>
                  <li class="col-md-3 col-sm-6 f-cat f-cat1 f-cat4">
                     <span>
                        <a 
                           href="assets/img/galeria-metal1.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        >
                           <i class="fas fa-search"></i> 
                        </a> 
                        <img 
                           src="assets/img/galeria-metal1.jpg" 
                           alt="Imagen Galería Metal 1"
                        />
                     </span>
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat2 f-cat3">
                     <span> 
                        <a 
                           href="assets/img/galeria-plastico1.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        > 
                           <i class="fas fa-search"></i> 
                        </a>
                        <img 
                           src="assets/img/galeria-plastico1.jpg" 
                           alt="Imagen Galería Plastico 1"
                        />
                     </span> 
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat3 f-cat1">
                     <span>
                        <a 
                           href="assets/img/galeria-metal2.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        > 
                           <i class="fas fa-search"></i> 
                        </a> 
                        <img 
                           src="assets/img/galeria-metal2.jpg" 
                           alt="Imagen Galería Metal 2"
                        />
                     </span> 
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat4 f-cat2">
                     <span>
                        <a 
                           href="assets/img/galeria-reciclaje1.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        >
                           <i class="fas fa-search"></i> 
                        </a>
                        <img 
                           src="assets/img/galeria-reciclaje1.jpg" 
                           alt="Imagen Galería Reciclaje 1"
                        />
                     </span>
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat1">
                     <span>
                        <a 
                           href="assets/img/galeria-metal3.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        > 
                           <i class="fas fa-search"></i>
                        </a>
                        <img 
                           src="assets/img/galeria-metal3.jpg" 
                           alt="Imagen Galería Metal 3"
                        />
                     </span>
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat2">
                     <span>
                        <a 
                           href="assets/img/galeria-plastico2.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        >
                           <i class="fas fa-search"></i>
                        </a>
                        <img 
                           src="assets/img/galeria-plastico2.jpg" 
                           alt="Imagen Galería Plastico 2"
                        />
                     </span>
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat3 f-cat2">
                     <span>
                        <a 
                           href="assets/img/galeria-plastico3.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        >
                           <i class="fas fa-search"></i>
                        </a>
                        <img 
                           src="assets/img/galeria-plastico3.jpg" 
                           alt="Imagen Galería Plastico 3"
                        />
                     </span> 
                  </li>
                  <li class="col-md-3 col-sm-6 f-cat f-cat4">
                     <span>
                        <a 
                           href="assets/img/galeria-pallets1.jpg" 
                           data-rel="prettyPhoto[gallery]"
                        >
                           <i class="fas fa-search"></i>
                        </a>
                        <img 
                           src="assets/img/galeria-pallets1.jpg" 
                           alt="Imagen Galería Pallets 1"
                        />
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- Galería Fin --> 
         
<?php
   include 'assets/includes/footer.php';
?>