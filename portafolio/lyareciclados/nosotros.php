<?php
   include 'assets/includes/header.php';
   include 'assets/includes/banner.php';
?>

   <!-- Nosotros Inicio -->
   <section class="wf100 about">
      <div class="about-video-section wf100">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-text">
                     <h5>
                        "Comprometidos con el medio ambiente"
                     </h5>
                     <h2>
                        L&A Reciclados Industriales S.A. de C.V.
                     </h2>
                     <p class="justificar">
                        <strong>
                           En L&A RECICLADOS INDUSTRIALES SA DE CV, Nuestro compromiso 
                           es contribuir a la sostenibilidad y eficiencia de nuestros 
                           clientes, gestionando de manera responsable y eficiente los 
                           residuos industriales generados en sus procesos productivos. 
                           Contamos con un equipo especializado y tecnología avanzada 
                           para garantizar un servicio confiable, adaptado a las 
                           necesidades específicas de cada cliente, promoviendo así 
                           prácticas responsables y sostenibles en el sector industrial 
                           que incluye el servicio integral de ZERO WASTE LANDFILL.
                        </strong>
                     </p>
                     <a href="contacto.php">
                        Contáctanos
                     </a> 
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-img">
                     <img 
                        src="assets/img/nosotros-imagen.jpg"
                        alt="Imagen Nosotros"
                     /> 
                  </div>
               </div>
            </div>
         </div>
      </div>
            
      <div class="choose-ecova wf100 p80">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="section-title-2">
                     <h5>
                        Porqué elegirnos
                     </h5>
                     <h2>
                        Asesoría Personalizada
                     </h2>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <div class="eco-box">
                           <span class="econ-icon">
                              <i class="far fa-handshake"></i>
                           </span>
                           <h5>
                              Personal Capacitado
                           </h5>
                           <p>
                              Disponemos de personal capacitado para realizar la 
                              segregación adecuada y oportuna de sus residuos dentro 
                              de sus instalaciones en caso de requerirlo 
                           </p>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="eco-box">
                           <span class="econ-icon">
                              <i class="far fa-handshake"></i>
                           </span>
                           <h5>
                              Servicio de Recolección
                           </h5>
                           <p>
                              Contamos con el servicio de disposición de basura industrial 
                              (Sujeto a la revisión de la clasificación de basura 
                              industrial - no peligroso-) 
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="volunteer-form">
                     <div class="section-title">
                        <strong>
                           ¿Deseas que te contactemos?
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
                                 aria-label="Your Name"
                              />
                           </li>
                           <li>
                              <input 
                                 type="text" 
                                 class="form-control" 
                                 placeholder="Teléfono" 
                                 aria-label="Email Address"
                              />
                           </li>
                           <li>
                              <input 
                                 type="text" 
                                 class="form-control" 
                                 placeholder="Empresa" 
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
      </div> 
   </section>
   <!-- Nosotros Fin --> 
             
<?php  
   include 'assets/includes/footer.php';
?>