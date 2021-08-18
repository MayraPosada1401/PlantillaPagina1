<?php
$para = 'mayra.v.posada.a@gmail.com';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $correo . " \r\n";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $correo . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);
echo "<script>alert('Correo enviado exitosamente')</script>"
echo "<script>setTimeout(\"location.href='acerca.html'\",1000)</script>"

?>