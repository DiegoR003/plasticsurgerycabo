<?php

if(!$_POST) exit;

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$nombre   = $_POST['nombre'];
$correo   = $_POST['email'];
$phone    = $_POST['phone'];
$asunto   = $_POST['asunto'];
$mensaje  = $_POST['mensaje'];
$interes  = $_POST['interes'];



// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "plasticsurgerycabodr@gmail.com"; 
//$address = "jantonioga90@gmail.com"; 


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = $nombre . ' envió un mensaje desde la página.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "$nombre ha enviado un mensaje:" . PHP_EOL . PHP_EOL;
$e_reply = "Nombre: $nombre\r\nCorreo electronico: $correo\r\nTeléfono: $phone\r\nAsunto: $asunto\r\nSeleccionó: $interes";
$e_content = "$mensaje" . PHP_EOL . PHP_EOL;


$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $correo" . PHP_EOL;
$headers .= "Reply-To: $correo" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.


	header('location:/en/contact.php?msg=oken'); //Exito en el cmabio
    exit;}

else {

	header('location:/en/contact.php?msg=erroren'); //Exito en el cmabio
    exit;}
