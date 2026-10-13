<!-- Proceso Inicio -->
    <div class="our-faqs-royal bg-section dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">¿Cómo Trabajamos?</span>
                        <h2 class="text-anime-style-3">Proceso de trabajo</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5">
                    <div class="faqs-image-box-royal wow fadeInUp">
                        <div class="faqs-image-royal">
                            <figure class="image-anime">
                                <img src="assets/img/proceso.webp" alt="imagen seccion proceso">
                            </figure>
                        </div>
                        <div class="faqs-cta-box-royal">
                            <p>¿Alguna duda?</p>
                            <div class="faqs-cta-item-royal">
                                <ul>
                                    <li>
                                        <img src="assets/img/icon-phone.svg" alt="icono telefono alguna duda">
                                        <a href="callto:<?php echo $phone_link; ?>">
                                            <?php echo $phone; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="faq-accordion-royal" id="accordion">
                        <!-- Opcion 1 Inicio -->
                        <div class="accordion-item wow fadeInUp">
                            <p class="accordion-header" id="heading1">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse1" aria-expanded="true" 
                                    aria-controls="collapse1"
                                >
                                    1. Cuéntanos sobre tu negocio
                                </button>
                            </p>
                            <div 
                                id="collapse1" 
                                class="accordion-collapse collapse" 
                                role="region" 
                                aria-labelledby="heading1" 
                                data-bs-parent="#accordion"
                            >
                                <div class="accordion-body">
                                    <p>
                                        Revisamos tus necesidades, servicios, objetivos y la información 
                                        que quieres mostrar en tu sitio web.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Opcion 1 Fin -->

                        <!-- Opcion 2 Inicio -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <p class="accordion-header" id="heading2">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse2" 
                                    aria-expanded="false" 
                                    aria-controls="collapse2"
                                >
                                    2. Diseñamos la estructura
                                </button>
                            </p>
                            <div 
                                id="collapse2" 
                                class="accordion-collapse collapse" 
                                role="region" 
                                aria-labelledby="heading2" 
                                data-bs-parent="#accordion"
                            >
                                <div class="accordion-body">
                                    <p>
                                        Organizamos el contenido y definimos las secciones necesarias 
                                        para presentar tu negocio de forma clara y profesional.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Opcion 2 Fin -->

                        <!-- Opcion 3 Inicio -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <p class="accordion-header" id="heading3">
                                <button 
                                    class="accordion-button" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse3" 
                                    aria-expanded="false" 
                                    aria-controls="collapse3"
                                >
                                    3. Desarrollamos tu sitio
                                </button>
                            </p>
                            <div 
                                id="collapse3" 
                                class="accordion-collapse collapse show" 
                                role="region" 
                                aria-labelledby="heading3" 
                                data-bs-parent="#accordion"
                            >
                                <div class="accordion-body">
                                    <p>
                                        Construimos tu página web optimizada para dispositivos móviles, 
                                        velocidad, SEO básico y experiencia de usuario.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Opcion 3 Fin -->

                        <!-- Opcion 4 Inicio -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <p class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. Publicamos y damos soporte
                                </button>
                            </p>
                            <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        Configuramos dominio, hosting, SSL, correos y dejamos tu sitio 
                                        listo para compartir con tus clientes.   
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Opcion 4 Fin -->
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <!-- Proceso Fin -->