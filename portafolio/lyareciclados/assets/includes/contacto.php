<?php 
  
$nombre =utf8_encode($_POST['nombre']);
$email =utf8_encode($_POST['email']);
$empresa =utf8_encode($_POST['empresa']);
$asunto =utf8_encode($_POST['asunto']);
$mensaje =utf8_encode($_POST['mensaje']);
if (empty($nombre) or empty($email) or empty($empresa) or empty($asunto) or empty($mensaje)) {
  echo 'false';
}else{
	$yourEmail="ventas@lyareciclados.com";



$subject ="Contacto de su pagina lyareciclados.com!";

$message ="
<html>
<head>
<title>Contacto</title>
</head>
<body>
<p>Contacto de:</p>
<p>Nombre: $nombre</p>
<p>Empresa: $empresa</p>
<p>Email: $email</p>
<p>Telefono: $telefono</p>
<p>Asunto: $asunto</p>
<p>Mensaje: $mensaje</p>

</body>
</html>
";

$headers = "MINE-Version: 1.0"."\r\n";
$headers.= "Content-type:text/html;charset=UTF-8"."\r\n";

$success = mail($yourEmail, $subject, $message, $headers);
echo $success;

}



?>