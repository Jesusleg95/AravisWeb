<!-- Contacto Inicio -->
<div id="contacto" class="page-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-content-form-box">                        
                    <div class="contact-us-content-box">
                        <div class="contact-box-header-item wow fadeInUp">
                            <div class="icon-box">
                                <img 
                                    src="assets/img/icon-headphone-white.svg" 
                                    alt="icono informacion contacto" 
                                />
                            </div>
                            <div class="contact-box-header-item-content">
                                <h2>
                                    Información de Contacto
                                </h2>
                                <p>
                                    Creamos sitios web rápidos, modernos y optimizados para 
                                    ayudar a tu negocio a tener presencia profesional en 
                                    internet. 
                                </p>
                            </div>
                        </div>
                        <div class="contact-info-list">
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img 
                                        src="assets/img/icon-headphone-white.svg" 
                                        alt="icono contacto telefono" />
                                </div>
                                <div class="contact-info-item-content">
                                    <p class="contact-info-item-action">
                                        <a href="callto:<?php echo $phone_link; ?>">
                                            <?php echo $phone; ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img 
                                        src="assets/img/icon-mail-white.svg" 
                                        alt="icono contacto email"
                                    />
                                </div>
                                <div class="contact-info-item-content">
                                    <p class="contact-info-item-action">
                                        <a href="mailto:<?php echo $email; ?>">
                                            <?php echo $email; ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img 
                                        src="assets/img/icon-location-white.svg" 
                                        alt="icono contacto location" 
                                    />
                                </div>
                                <div class="contact-info-item-content">
                                    <p class="contact-info-item-action">
                                        Ciudad Juárez, Chihuahua
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-form">
                        <div class="row">
                            <iframe 
                                src=<?php echo $maps; ?> 
                                width="600" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="strict-origin-when-cross-origin"
                            >
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contacto Fin -->
    