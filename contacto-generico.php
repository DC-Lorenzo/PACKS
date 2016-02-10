<?php

if (isset($_POST['contacto'])&&($_POST['contacto']=="contacto")) {

include "classes/class_general_db.php";
$query = "SELECT member_name FROM elforodeltenis_members WHERE email_address = '$_POST[email]'";
$po = new conexionBD();
$po -> doQuery("$query");
$existe = $po -> getNumRows();
if ($existe<1) {$es_usuario = "NO";}
if ($existe>0) {
	while ( $po -> setWhile()) {
		$member_name = $po -> getDataSQL("member_name");
	}
	$es_usuario = "SI -> $member_name";
}

include "classes/class.phpmailer.php";

//Envía email
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "$_POST[email]";
$mail->FromName = "$_POST[nombre] | Contacto - Elforodeltenis.com";
$mail->Subject = "$_POST[asunto]";
$mail->AddAddress('dcolja@elforodeltenis.com');

$body = "<strong>Contexto del mensaje: $_POST[destino]</strong><br><br>Asunto: $_POST[asunto]<br>Nombre: $_POST[nombre]<br>Email: $_POST[email]<br>Es usuario: $es_usuario<br><br>Mensaje: $_POST[mensaje]<br><br>";
$body.= "<i>Mensaje enviado desde la web de elforodeltenis.com</i>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "noreply@elforodeltenis.com";
$mail->FromName = "Contacto - Elforodeltenis.com";
$mail->Subject = "Hemos recibido tu mensaje.";
$mail->AddAddress($_POST['email']);

$body = "<strong>Estimado $_POST[nombre],</strong><br>Hemos recibido tu mensaje. Te contestaremos a la mayor brevedad.<br>Saludos cordiales,<br><strong>elforodeltenis.com</strong><br><br>";
$body.= "<i>Mensaje enviado desde elforodeltenis.com</i>&nbsp;&nbsp;&nbsp;<a href=\"http://www.elforodeltenis.com/register\">[Quiero Registrarme!]</a><br><br><a href=\"http://www.elforodeltenis.com\"><img src=\"http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif\"></a>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

}
?>

<div style="display:block; float:left; width:100%; background-color:black;">
	<div style="float:left;">
		<a href="http://www.elforodeltenis.com/addons/banners/banner-events-scores.php">
			<img src="http://www.elforodeltenis.com/addons/banners/img/foro-tenis-live-events.png" alt="Foro Tenis Live Events" title="Live Events. Elforodeltenis.com" width="320px">
		</a>
		<a href="https://livestream.com/ATP" target="_blank">
			<img src="http://www.elforodeltenis.com/addons/banners/img/foro-atp-live.png" alt="Foro ATP Live" title="ATP Live. Elforodeltenis.com"  width="220px">
		</a>
		<a href="https://livestream.com/WTA" target="_blank">
			<img src="http://www.elforodeltenis.com/addons/banners/img/tenis-wta-live.png" alt="Tenis WTA Live" title="WTA Live. Elforodeltenis.com"  width="220px">
		</a>
		<span style="margin-left:50px;"><a href="http://www.elforodeltenis.com" class="btn btn-primary">Volver al foro...</a></span>
	</div>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
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
    <meta name="description" content="Venta de raquetas de tenis, zapatillas de tenis, ropa de tenis. Venta de segunda mano.">
    <title>ELFORODELTENIS.COM - Contacto</title>

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
    <div class="container">


<div class="row space-up">
	<div class="col-md-3 col-xs-12"><img src="http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif" alt="elforodeltenis.com" title="logo el foro del tenis" style="margin-top:50px;"></div>
	<div class="col-md-2 col-xs-12"></div>
	<div class="col-md-2 col-xs-12"></div>
	<div class="col-md-5 col-xs-12"><div style="float:right;"><iframe width="350" frameborder="0" scrolling="NO" src="http://www.elforodeltenis.com/addons/slider_top1.php"></iframe></div></div>
</div>
<div class="row space-up">
	<div class="col-md-12">
		<div class="alert alert-info"><h3>Contacta con elforodeltenis.com</h3> Responderemos tu mensaje en menos de 24 horas.</div>
	</div>	
</div>
<div class="row space-up">
	<div class="col-md-4 col-xs-12"><img src="img/contactanos.jpg" width="100%" alt="elforodeltenis.com contacto" title="contactanos el foro del tenis"></div>
	<div class="col-md-8 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Formulario de contacto</h3>
		</div>
		<div class="panel-body">
			<?php if (isset($_POST['contacto'])&&($_POST['contacto']=="contacto")) {
				?>
				<div class="alert alert-success">
					Tu mensaje ha sido correctamente enviado!!!
				</div>
				<?php
				} else { ?>
			<p>Rellena los campos del formulario para que podamos canalizar coorectamente tu mensaje..</p>
			
			<form method="post" id="formulario">
			<input type="hidden" name="contacto" value="contacto">
			<div class="row">
				<div class="col-md-3 col-xs-3"><strong>Destino:</strong></div>
				<div class="col-md-9 col-xs-9">
					<select name="destino" class="form-control">
						<option>Seleccione</option>
						<option value="Moderacion">Moderaci&oacute;n</option>
						<option value="Direccion">Direcci&oacute;n</option>
						<option value="Colaboracion">Colaboraci&oacute;n</option>
						<option value="Patrocinio">Patrocinio</option>
						<option value="Publicidad">Publicidad</option>
						<option value="Otros">Otros</option>
					</select>
				</div>
			</div>
			<div class="row space-up">
				<div class="col-md-3 col-xs-3"><strong>Tu Nombre:</strong></div>
				<div class="col-md-9 col-xs-9"><input type="text" name="nombre" class="form-control"></div>
			</div>
			<div class="row space-up">
				<div class="col-md-3 col-xs-3"><strong>Tu Email:</strong></div>
				<div class="col-md-9 col-xs-9"><input type="email" name="email" class="form-control"></div>
			</div>
			<div class="row space-up">
				<div class="col-md-3 col-xs-3"><strong>Asunto:</strong></div>
				<div class="col-md-9 col-xs-9"><input type="text" name="asunto" class="form-control"></div>
			</div>
			<div class="row space-up">
				<div class="col-md-3 col-xs-3"><strong>Mensaje:</strong></div>
				<div class="col-md-9 col-xs-9"><textarea name="mensaje" class="form-control" placeholder="Escribe aqu&iacute; tu mensaje..." rows="5"></textarea></div>
			</div>
			<div class="row space-up">
				<div class="col-md-12 col-xs-12">
					<span style="float:right;"><input type="submit" class="btn btn-primary" value="Enviar"></span>
				</div>
			</div>
			</form>
		<?php } ?>	
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

<script src="js/validate.js"></script>

<script type="text/javascript">
$(document).ready(function(){
 $('#formulario').validate({
  errorElement: "span",
  rules: {
      nombre: {
        minlength: 2,
          required: true
      },
      email: {
          required: true,
          email: true
      },
      asunto: {
         minlength: 2,
          required: true
      },
      mensaje: {
          minlength: 2,
          required: true
      }
  },
  highlight: function(element) {
   $(element).closest('.control-group')
   .removeClass('success').addClass('error');
  },
  success: function(element) {
   element
   .text('OK!').addClass('help-inline')
   .closest('.control-group')
   .removeClass('error').addClass('success');
  }
 });
});

</script>