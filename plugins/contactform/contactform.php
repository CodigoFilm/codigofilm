<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$empresa = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "Nombre: ".$nombre."\r\n";
$message .= "Email: ".$mail."\r\n";
$message .= $_POST['message']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'bannermuere@gmail.com';
$asunto = 'Notificación web codigoFilms';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='index.html';</script>";
 ?>