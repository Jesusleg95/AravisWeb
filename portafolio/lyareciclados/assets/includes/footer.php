<!-- Footer Inicio -->
<footer class="footer">
    <div class="footer-top wf100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4>
                            Quiénes somos
                        </h4>
                        <p class="justificar">
                            En L&A RECICLADOS INDUSTRIALES SA DE CV, Nuestro compromiso es contribuir 
                            a la sostenibilidad y eficiencia de nuestros clientes, gestionando de manera 
                            responsable y eficiente los residuos industriales generados en sus procesos 
                            productivos.
                        </p>
                        <a 
                            href="nosotros.php" 
                            class="lm"
                        >
                            Más Info
                        </a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4>
                            Servicios
                        </h4>
                        <ul class="quick-links">
                            <li class="text-white"><a>Metales</a></li>
                            <li class="text-white"><a>Plasticos</a></li>
                            <li class="text-white"><a>Tarimas</a></li>
                            <li class="text-white"><a>Reciclados</a></li>
                            <li class="text-white"><a>Venta de Tarimas</a></li>
                            <li class="text-white"><a>Asesoría</a></li>
                        </ul>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4>
                            Datos de Contacto
                        </h4>
                        <ul class="lastest-products">
                            <li>
                                <strong>
                                    <a href="#">
                                    Calle Mazatlán #11053 <br> Col. Valle Dorado C.P. 32580<br>Cd Juárez Chihuahua
                                    </a>
                                </strong>
                            </li>
                            <li>
                                <strong>
                                    <a href="#">
                                    Tel: (656) 267 6014 <br> (656) 638 4419
                                    </a>
                                </strong>
                            </li>
                            <li>
                                <strong>
                                    <a href="#">
                                    Email: ventas@lyareciclados.com
                                    </a>
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyr wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img 
                        src="assets/img/logo.png" 
                        alt="Imagen Logotipo"
                    />
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>
                        <a href="./">
                            L&A Reciclados
                        </a>
                        , Todos los derechos reservados <?php echo Date('Y'); ?>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>
                        Desarrollado por:
                        <a 
                            target="_blank"
                            rel="noopener noreferrer" 
                            href="https://www.aravisweb.com"
                        >
                            AravisWeb
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Fin --> 
        
<div class="overlay"
></div>
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