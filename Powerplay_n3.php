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

$query = "INSERT INTO elforodeltenis_descarga_powerplay ( id_usuario, fecha, version) VALUES ('$_GET[us]', '$fecha', 'Compra3')";
$po = new conexionBD();
$po -> doQuery("$query");

include "classes/class.phpmailer.php";

//Envía email
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "noreply@elforodeltenis.com";
$mail->FromName = "Acceso Compra Powerplay V3| Elforodeltenis.com";
$mail->Subject = "Acceso descarga de la revista N.3 de Powerplay";
$mail->AddAddress('dcolja@elforodeltenis.com; pacoalmendros@ono.com');

$body = "<strong>El usuario $member_name acaba de acceder al &aacute;rea de descarga del n&uacute;mero 3 de la revista Powerplay.<br>Recuerda confirmar pago y enviar enlace descarga.<br><br>";
$body.= "<i>Mensaje enviado desde la web de elforodeltenis.com</i><br>";
$body.= "<a href=\"http://www.elforodeltenis.com\"><img src=\"http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif\"></a>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "noreply@elforodeltenis.com";
$mail->FromName = "Compras - Elforodeltenis.com";
$mail->Subject = "Compra Revista Powerplay. N3";
$mail->AddAddress($_POST['email']);

$body = "<strong>Hola!,</strong><br>Conla compra del n&uacute;mero 3 de la revista nos ayudas a seguir adelante con nuestra inicitativa. En cuanto comprobemos el pago, recibir&aacute;s el link para descargar la revista. Este proceso no tarda m&aacute;s de 5 horas.Esperamos que la disfrutes. <br>Saludos cordiales,<br><strong>elforodeltenis.com</strong><br><br>
	Este enlace solo te permitir&aacute; una descarga...
";
$body.= "<i>Mensaje enviado desde elforodeltenis.com</i>&nbsp;&nbsp;&nbsp;<br><br><a href=\"http://www.elforodeltenis.com\"><img src=\"http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif\"></a>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

?>

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
    <meta name="description" content="Venta de raquetas de tenis, zapatillas de tenis, ropa de tenis. Venta de segunda mano. Revista Powerplay N3">
    <title>ELFORODELTENIS.COM - Revista Powerplay N3</title>

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
	<div class="col-md-4 col-xs-12"><img src="http://packs.elforodeltenis.com/img/revista_powerplay_v3.jpg" width="100%" alt="elforodeltenis.com Revista Powerplay N3" title="Powerplay partner de el foro del tenis"></div>
	<div class="col-md-8 col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Comprar el n&uacute;mero 3 de la revista Powerplay</h3>
		</div>
		<div class="panel-body">
			<div class="row">
			  <div class="col-sm-7 col-md-5">
			    <div class="thumbnail">
			      <img src="http://packs.elforodeltenis.com/img/powerplay_logo.jpg" alt="Logo Powerplay" title="Logo Powerplay partner ELFORODELTENIS.COM">
			      <div class="caption">
			        <h3>Revista n&deg; 3 por 2&euro;</h3>
			        <p>

			        <!-- paypal action -->
			           	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="M66P7B6A4JLBU">
							<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
							<img alt="Revista Powerplay 3 Compra Paypal" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1" title="Compra Revista Powerplay 3 elforodeltenis.com">
						</form>
			        </p>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-7 col-sm-12">Con la compra de la revista, nos ayudas a continuar con nuestra iniciativa de aporte al tenis. Gracias!</div>
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
