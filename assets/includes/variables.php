<?php
    $phone = "(656)423-4960";
    $phone_link = "+526564234960";
    $email = "hola@aravisweb.com";
    $facebook = "https://www.facebook.com/share/1HNuYmC9m4/";
    $whatsapp = "https://wa.me/526564234960?text=Hola%2C%20me%20interesa%20una%20p%C3%A1gina%20web%20para%20mi%20negocio";
    $maps = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145073.98299647568!2d-106.52056173114838!3d31.65208227778436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75ecb3d0b329d%3A0xb196100549c7974!2zSnXDoXJleiwgQ2hpaC4!5e0!3m2!1ses-419!2smx!4v1784661053509!5m2!1ses-419!2smx";

    $currentPage = basename($_SERVER['SCRIPT_NAME']);

    switch ($currentPage) {
        case 'index.php':
            $title = 'AravisWeb | Páginas web para negocios en México';
            $description = 'Creamos páginas web rápidas, modernas y optimizadas para negocios en México. Incluimos dominio, hosting, correo empresarial, soporte técnico y SEO básico.';
            $canonical = 'https://aravisweb.com/';
        break;
        case 'portafolio.php':
            $title = 'Portafolio | Proyectos de páginas web desarrollados por AravisWeb';
            $description = 'Conoce algunos de los proyectos desarrollados por AravisWeb: sitios web empresariales, landing pages y soluciones web para negocios en México.';
            $canonical = 'https://aravisweb.com/portafolio.php';
        break;
        default:
            $title = 'AravisWeb | Páginas web para negocios en México';
            $description = 'Creamos páginas web rápidas, modernas y optimizadas para negocios en México. Incluimos dominio, hosting, correo empresarial, soporte técnico y SEO básico.';
            $canonical = 'https://aravisweb.com/'; 
        break;
    }
?>