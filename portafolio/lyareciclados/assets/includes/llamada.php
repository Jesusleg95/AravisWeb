<?php 
  
$name =utf8_encode($_POST['nombre']);
$telefono =utf8_encode($_POST['telefono']);
$empresa=utf8_encode($_POST['empresa']);
if (empty($name) or empty($telefono) or empty($empresa)) {
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
<p>Solicita llamada</p>
<p>Nombre: $name</p>
<p>Telefono: $telefono</p>
<p>Empresa: $empresa</p>

</body>
</html>
";

$headers = "MINE-Version: 1.0"."\r\n";
$headers.= "Content-type:text/html;charset=UTF-8"."\r\n";

$success = mail($yourEmail, $subject, $message, $headers);
echo $success;

}



?>