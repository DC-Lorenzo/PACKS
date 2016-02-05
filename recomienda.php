<?php include "header.php";
if (isset($_POST['invita'])&&($_POST['invita'])) { 

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email1]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email1_existe = $hy -> getNumRows();
	if ($email1_existe<1) {
		$email1_existe = "NO";
		$query = "SELECT email_member FROm elforodeltenis_members WHERE email_member = '$_POST[email1]'";
		$hy = new conexionBD();
		$hy -> doQuery("$query");
		$email1_es_usuario = $hy -> getNumRows();
		if ($email1_es_usuario>0) { $email1_existe="SI";}
		
	$query = "INSERT INTO elforodeltenis_recomendaciones (id_member, email_member, email_amigo, fecha_enviado, numero) 
	VALUES ('$_GET[m]', '$email_address', '$_POST[email1]', '$today', '1')";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	}
	if ($email1_existe>0) {$email1_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email2]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email2_existe = $hy -> getNumRows();
	if ($email2_existe<1) {$email2_existe = "NO";}
	if ($email2_existe>0) {$email2_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email3]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email3_existe = $hy -> getNumRows();
	if ($email3_existe<1) {$email3_existe = "NO";}
	if ($email3_existe>0) {$email3_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email4]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email4_existe = $hy -> getNumRows();
	if ($email4_existe<1) {$email4_existe = "NO";}
	if ($email4_existe>0) {$email4_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email5]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email5_existe = $hy -> getNumRows();
	if ($email5_existe<1) {$email5_existe = "NO";}
	if ($email5_existe>0) {$email5_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email6]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email6_existe = $hy -> getNumRows();
	if ($email6_existe<1) {$email6_existe = "NO";}
	if ($email6_existe>0) {$email6_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email7]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email7_existe = $hy -> getNumRows();
	if ($email7_existe<1) {$email7_existe = "NO";}
	if ($email7_existe>0) {$email7_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email8]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email8_existe = $hy -> getNumRows();
	if ($email8_existe<1) {$email8_existe = "NO";}
	if ($email8_existe>0) {$email8_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email9]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email9_existe = $hy -> getNumRows();
	if ($email9_existe<1) {$email9_existe = "NO";}
	if ($email9_existe>0) {$email9_existe = "SI";}
	$hy -> setClose();

	$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE email_amigo = '$_POST[email10]'";
	$hy = new conexionBD();
	$hy -> doQuery("$query");
	$email10_existe = $hy -> getNumRows();
	if ($email10_existe<1) {$email10_existe = "NO";}
	if ($email10_existe>0) {$email10_existe = "SI";}
	$hy -> setClose();

}

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member ='$_GET[m]'";
$gt = new conexionBD();
$gt -> doQuery("$query");
$tot_invitados = $gt -> getNumRows();
 
$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member ='$_GET[m]'AND registrado = 'SI'";
$gt = new conexionBD();
$gt -> doQuery("$query");
$tot_registrados = $gt -> getNumRows();
$gt -> setClose();


$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '1'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email1 = $gt -> getDataSQL("email_amigo");
	}

$gt -> setClose();	

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '2'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email2 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '3'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email3 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '4'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email4 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '5'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email5 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '6'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email6 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '7'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email7 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '8'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email8 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '9'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email9 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();

$query = "SELECT email_amigo FROM elforodeltenis_recomendaciones WHERE id_member = '$_GET[m]' AND numero = '10'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ( $gt -> setWhile()) {
		$email10 = $gt -> getDataSQL("email_amigo");
	}
$gt -> setClose();
 

?>
<div class="row space-up">
	<div class="col-md-3"><img src="http://www.elforodeltenis.com/Themes/BeCool_2/images/elforodeltenis.gif" alt="el foro del tenis"></div>
	<div class="col-md-6"></div>
	<div class="col-md-3">
		<a href="http://www.elforodeltenis.com">
			<h1>Volver al foro...</h1>
		</a>
	</div>
</div>
<div class="row space-up">
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12">
				<img src="http://www.elforodeltenis.com/addons/banners/img/recomienda.jpg" alt="Recomienda el foro del tenis" class="img-thumbnail">
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-9">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Consigue gratis la camiseta oficial de elforodeltenis.com</h3>
					</div>
					<div class="panel-body">
						<h4>Estimado <?php echo $member_name;?>, recomi&eacute;ndanos entre 10 de tus amigos, <strong>y si consigues que al menos 5 de ellos se registran en nuestro foro</strong>, te enviaremos gratuitamente la camiseta oficial a tu casa o trabajo.</h4>
					</div>
				</div>
			</div>	
			<div class="col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Tu estado:</h3>
					</div>
					<div class="panel-body">
						<table class="table table-condensed table-bordered">
							<tbody>
								<tr>
									<td>Recomendados:</td>
									<td><?php echo $tot_invitados;?>/10</td>
								</tr>
								<tr>
									<td>Registrados:</td>
									<td><?php echo $tot_registrados;?>/5</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info">
					<p>Ya puedes comenzar a recomendarnos, introduce los emails de tus amigos, para que les enviemos una invitación a registrarse en el foro. Cada vez que uno de ellos se registre te avisaremos. Siempre podr&aacute;s comprobar aqu&iacute; adem&aacute;s los que se hayan registrado.</p>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Comenzar a recomendar. Escribe los emails de tus amigos para enviar la invitaci&oacute;n</h3>
				</div>
				<div class="panel-body">
					<form method="post" action="recomienda.php?m=<?php echo $_GET['m'];?>">
					<input type="hidden" name="invita" value="invita">
					<div class="row">
						<div class="col-md-4"><input type="text" class="form-control" name="email1" placeholder="email amigo...1" value="<?php echo $email1;?>" <?php if ($email1<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email1_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email1_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
							<?php if ($email1_registrado)	{} ?>
						</div>
						<div class="col-md-4"><input type="text" class="form-control" name="email2" placeholder="email amigo...6" value="<?php echo $email2;?>" <?php if ($email2<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email2_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email2_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
					</div>
					<div class="row space-up">
						<div class="col-md-4"><input type="text" class="form-control" name="email3" placeholder="email amigo...2" value="<?php echo $email3;?>" <?php if ($email3<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email3_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email3_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
						<div class="col-md-4"><input type="text" class="form-control" name="email4" placeholder="email amigo...7" value="<?php echo $email4;?>" <?php if ($email4<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email4_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email4_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
					</div>
					<div class="row space-up">
						<div class="col-md-4"><input type="text" class="form-control" name="email5" placeholder="email amigo...3" value="<?php echo $email5;?>" <?php if ($email5<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email5_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email5_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
						<div class="col-md-4"><input type="text" class="form-control" name="email6" placeholder="email amigo...8" value="<?php echo $email6;?>" <?php if ($email6<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email6_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email6_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
					</div>
					<div class="row space-up">
						<div class="col-md-4"><input type="text" class="form-control" name="email7" placeholder="email amigo...4" value="<?php echo $email7;?>" <?php if ($email7<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email7_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email7_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
						<div class="col-md-4"><input type="text" class="form-control" name="email8" placeholder="email amigo...9" value="<?php echo $email8;?>" <?php if ($email8<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email8_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email8_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
					</div>
					<div class="row space-up">
						<div class="col-md-4"><input type="text" class="form-control" name="email9" placeholder="email amigo...5" value="<?php echo $email9;?>" <?php if ($email9<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email9_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email9_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
						<div class="col-md-4"><input type="text" class="form-control" name="email10" placeholder="email amigo...10" value="<?php echo $email10;?>" <?php if ($email10<>"") {echo "disabled readonly";}?>></div>
						<div class="col-md-2">
							<?php if ($email10_existe=="SI") {?><div style="color:red;">		<span class="glyphicon glyphicon-remove"></span> Ya existe!</div> 	<?php } ?>
							<?php if ($email10_existe=="NO") {?><div style="color:green;">	<span class="glyphicon glyphicon-ok"></span> Enviada!</div> 		<?php } ?>
						</div>
					</div>
					<div class="row space-up">
						<div class="col-md-12">
							<div style="float:right;"><button class="btn btn-success">Enviar invitaciones</button></div>
						</div>
					</div>	
					</form>				
				</div>
			</div>
		</div>
		</div>
	</div>
</div>


<?php include "footer.php"; ?>