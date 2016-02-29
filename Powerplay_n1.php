<?php
$fecha = date("d/m/Y");

include "classes/class_general_db.php";

$query = "SELECT member_name, email_address FROM elforodeltenis_members WHERE id_member = '$_GET[us]'";
$po = new conexionBD();
$po -> doQuery("$query");
	while ( $po -> setWhile()) {
		$member_name =  $po-> getDataSQL("member_name");
		$email_address =  $po-> getDataSQL("email_address");
	}
$po -> setClose();

$query = "INSERT INTO elforodeltenis_descarga_powerplay ( id_usuario, fecha, version) VALUES ('$_GET[us]', '$fecha', '1')";
$po = new conexionBD();
$po -> doQuery("$query");

include "classes/class.phpmailer.php";

//Envía email
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "noreply@elforodeltenis.com";
$mail->FromName = "Descarga Powerplay | Elforodeltenis.com";
$mail->Subject = "Nueva descarga de la revista N.1 de Powerplay";
$mail->AddAddress('dcolja@elforodeltenis.com; pacoalmendros@ono.com');

$body = "<strong>El usuario $member_name se acaba de descargar el n&uacute;mero 1 de la revista Powerplay.<br><br>";
$body.= "<i>Mensaje enviado desde la web de elforodeltenis.com</i><br>";
$body.= "<a href=\"http://www.elforodeltenis.com\"><img src=\"http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif\"></a>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "noreply@elforodeltenis.com";
$mail->FromName = "Contacto - Elforodeltenis.com";
$mail->Subject = "Descarga Revista powerplay.";
$mail->AddAddress($email_address);

$body = "<strong>Estimado $member_name,</strong><br>Gracias por descargar la revista. Esperamos que la disfrutes. <br>Saludos cordiales,<br><strong>elforodeltenis.com</strong><br><br>";
$body.= "<i>Mensaje enviado desde elforodeltenis.com</i>&nbsp;&nbsp;&nbsp;<br><br><a href=\"http://www.elforodeltenis.com\"><img src=\"http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif\"></a>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
  <head>
  <!--GOOGLE ANALYTICS-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2907763-6', 'auto');
  ga('send', 'pageview');

</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Venta de raquetas de tenis, zapatillas de tenis, ropa de tenis. Venta de segunda mano. Revista Powerplay N1">
    <title>ELFORODELTENIS.COM - Revista Powerplay N1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container-fluid">
		<div class="row" style="background-color:#000000!important; padding-bottom:10px;">
			<div class="col-md-3 col-xs-12" style="margin-top:5px;">
				<a href="http://www.elforodeltenis.com/addons/banners/banner-events-scores.php">
					<img src="http://www.elforodeltenis.com/addons/banners/img/foro-tenis-live-events.png" alt="Foro Tenis Live Events" title="Live Events. Elforodeltenis.com" width="320px">
				</a>
			</div>
			<div class="col-md-2 col-xs-6"  style="margin-top:5px;">
				<a href="https://livestream.com/ATP" target="_blank">
					<img src="http://www.elforodeltenis.com/addons/banners/img/foro-atp-live.png" alt="Foro ATP Live" title="ATP Live. Elforodeltenis.com"  width="100%" max-width="220px"  style="max-width:220px;">
				</a>
			</div>
			<div class="col-md-2 col-xs-6"  style="margin-top:5px;">
				<a href="https://livestream.com/WTA" target="_blank">
					<img src="http://www.elforodeltenis.com/addons/banners/img/tenis-wta-live.png" alt="Tenis WTA Live" title="WTA Live. Elforodeltenis.com"  width="100%"  max-width="220px" style="max-width:220px;">
				</a>
			</div>
			<div class="col-md-5 col-xs-12"  style="margin-top:5px;">
				<a href="http://www.elforodeltenis.com" class="btn btn-primary">Volver al foro...</a>
			</div>
		</div>  		
  	</div>
    <div class="container">

<div class="row space-up">
	<div class="col-md-3 col-xs-12"><img src="http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif" alt="elforodeltenis.com" title="logo el foro del tenis" style="margin-top:50px;"></div>
	<div class="col-md-9 col-xs-12"></div>
</div>
<div class="row space-up">
	<div class="col-md-12">
		<div class="alert alert-info"><h3>Powerplay partner t&eacute;cnico de elforodeltenis.com.</h3>
		Powerplay con m&aacute;s de 24 a&ntilde;os de experiencia en formaci&oacute;n de jugadores, pone a disposici&oacute;n de nuestros usuarios su revista, la que pod&eacute;s descargar desde este apartado.
		</div>
	</div>	
</div>
<div class="row space-up">
	<div class="col-md-4 col-xs-12"><img src="http://packs.elforodeltenis.com/img/revista_powerplay_v1.jpg" width="100%" alt="elforodeltenis.com Revista Powerplay N1" title="Powerplay partner de el foro del tenis"></div>
	<div class="col-md-8 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Descargar el n&uacute;mero 1 de la revista Powerplay</h3>
		</div>
		<div class="panel-body">
			<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="http://packs.elforodeltenis.com/img/powerplay_logo.jpg" alt="Logo Powerplay" title="Logo Powerplay partner ELFORODELTENIS.COM">
			      <div class="caption">
			        <h3>Revista n&deg; 1</h3>
			        <p>
			           	<a href="descargas/powerplay_tennis_n1.pdf" class="btn btn-danger" target="_blank">Descargar</a>
			        </p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="panel-footer">
			Elforodeltenis.com desde 2007. Todos los derechos reservados.
		</div>
	</div>
	</div>
</div>
<?php
include "footer.php";
?>
