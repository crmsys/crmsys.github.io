<?php 
error_reporting(0); 
$apelnombre = $_POST['apelnom']; 
$correo_electronico= $_POST['email']; 
$texto = $_POST['mensaje'];
 
$header = 'De: ' . $correo_electronico ."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $apelnombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "Su mensaje es: " . $texto . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'supp.crmsys@gmail.com'; 
$asunto = 'Correo Contacto'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

header("Location:index.html");
?> 