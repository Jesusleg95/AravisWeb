<?php
   include 'assets/includes/header.php';
   include 'assets/includes/banner.php';
?> 
   <!-- Contacto Inicio -->
   <section class="contact-page wf100 p80">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="contact-form">
                  <h3>
                     Formulario de Contacto
                  </h3> 
                  <form 
                     id="formContacto" 
                     action="php/contacto.php" 
                     method="POST"
                  >
                     <ul class="cform">
                        <li class="half pr-15">
                           <input 
                              type="text" 
                              class="form-control" 
                              name="nombre" 
                              placeholder="Nombre"
                           />
                        </li>
                        <li class="half pl-15">
                           <input 
                              type="text" 
                              class="form-control" 
                              name="email" 
                              placeholder="Email"
                           />
                        </li>
                        <li class="half pr-15">
                           <input 
                              type="text" 
                              class="form-control" 
                              name="empresa" 
                              placeholder="Empresa"
                           />
                        </li>
                        <li class="half pl-15">
                           <input 
                              type="text" 
                              class="form-control" 
                              name="asunto" 
                              placeholder="Asunto"
                           />
                        </li>
                        <li class="full">
                           <textarea 
                              class="textarea-control" 
                              name="mensaje" 
                              placeholder="Mensaje"
                           ></textarea>
                        </li>
                        <li class="full">
                           <input 
                              type="submit" 
                              value="Enviar" 
                              class="fsubmit"
                           />
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
            <div class="col-md-6">
               <div class="google-map">
                  <iframe 
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.140387070559!2d-106.47272484900846!3d31.602612781250873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e760e5f8c83cf9%3A0x1a27d16d4acb38b1!2sL%26A%20Reciclados%20Industriales%20SA%20De%20CV!5e0!3m2!1ses!2smx!4v1590774446122!5m2!1ses!2smx" 
                     width="600" 
                     height="450" 
                     frameborder="0" 
                     style="border:0;" 
                     allowfullscreen="" 
                     aria-hidden="false" 
                     tabindex="0"
                  ></iframe>
               </div>
            </div>
         </div>
      </div>
      <div class="container contact-info">
         <div class="row">
            <div class="col-md-12">
               <h3>
                  Información de Contacto
               </h3>
            </div>
            <div class="col-md-4">
               <div class="c-info">
                  <h6>
                     Dirección:
                  </h6>
                  <p>
                     Calle Mazatlán #11053 <br> Col. Valle Dorado C.P. 32580<br>
                     Cd Juárez Chihuahua
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="c-info">
                  <h6>
                     Teléfono:
                  </h6>
                  <p>
                     <span>Teléfono 1:</span> 
                     (656) 267 60 14
                  </p>
                  <p>
                     <span>Teléfono 2</span> 
                     (656) 638 44 19
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="c-info">
                  <p>
                     <span>Email:</span> 
                     ventas@lyareciclados.com
                  </p>
                  <p>
                     www.lyareciclados.com
                  </p>
               </div>
            </div> 
         </div>
      </div>
   </section>
   <!-- Contacto Fin--> 
    
<?php 
   include 'assets/includes/footer.php';
?>