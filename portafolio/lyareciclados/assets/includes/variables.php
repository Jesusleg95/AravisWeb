<?php

$currentPage = basename($_SERVER['SCRIPT_NAME']); 

switch ($currentPage) {
    case 'index.php':
        $title = 'L&A Reciclados | Reciclaje Industrial y Manejo de Residuos';
        $description = 'L & A Reciclados ofrece soluciones de reciclaje industrial y manejo responsable de residuos para empresas. Conoce nuestros servicios especializados.';
        $index = true;
    break;
    case 'nosotros.php':
        $title = 'Nosotros | L&A Reciclados Industriales - Reciclaje Industrial y Manejo de Residuos en Ciudad Juárez';
        $description = 'Conoce L&A Reciclados Industriales, empresa con más de 20 años de experiencia en gestión responsable de residuos y soluciones sostenibles en Ciudad Juárez.';
        $banner_title = 'quienes somos';
        $banner_text = 'nosotros';
    break;
    case 'servicios.php':
        $title = 'Servicios de Reciclaje Industrial | L&A Reciclados Industriales - Reciclaje Industrial y Manejo de Residuos en Ciudad Juárez';
        $description = 'Ofrecemos reciclaje de metales y plásticos, recolección de tarimas, manejo de residuos industriales y asesoría especializada en Ciudad Juárez, Chihuahua.';
        $banner_title = 'servicios';
        $banner_text = 'Recolección, manejo y disposición de residuos reciclables';
    break;
    case 'contacto.php':
        $title = 'Contacto | L&A Reciclados Industriales - Reciclaje Industrial y Manejo de Residuos en Ciudad Juárez';
        $description = 'Contacta a L&A Reciclados Industriales en Ciudad Juárez, Chihuahua. Solicita información y cotizaciones sobre reciclaje y manejo de residuos industriales.';
        $banner_title = 'contáctanos';
        $banner_text = 'Estamos Listos!';
    break;
    default:
        $title = 'L&A Reciclados Industriales | Reciclaje Industrial y Manejo de Residuos en Ciudad Juárez';
        $description = 'L & A Reciclados ofrece soluciones de reciclaje industrial y manejo responsable de residuos para empresas. Conoce nuestros servicios especializados.';
    break;
}
?>