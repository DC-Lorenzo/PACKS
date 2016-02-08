<?php
//Envía email
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "$email_address";
$mail->FromName = "$member_name | Elforodeltenis.com";
$mail->Subject = "Te invito a conocer el mayor foro de tenis de habla hispana.";
$mail->AddAddress($email_target);

$body = "<h3>Hola, un amigo tuyo registrado como $member_name en elforodeltenis.com, te invita a que conozcas el mayor foro de tenis de habla hispana.</h3><br>";
$body.= "<strong>Elforodeltenis.com</strong> existe desde el a&ntilde;o 2007 y en &eacute;l se re&uacute;nen todo tipo de aficionados, jugadores y profesionales dedicados el mundo del tenis.<br>";
$body.= "Conoce jugadores o aficionados al tenis, reg&iacute;strate, comparte, comenta, junto con nuestra comunidad de tenis compuesta por mas de 20.000 usuarios, noticias, art&iacute;culos, etc., relacionados con el tenis.<br>";
$body.= "<br>En elforodeltenis.com podr&aacute;s adem&aacute;s comprar y/o vender todo lo necesario para la pr&aacute;ctica de este deporte.<br><br>";
$body.= "<i>Mensaje enviado desde elforodeltenis.com</i>&nbsp;&nbsp;&nbsp;<a href=\"http://www.elforodeltenis.com/register\">[Quiero Registrarme!]</a><br><br><a href=\"http://www.elforodeltenis.com\"><img src=\"http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif\"></a>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

?>