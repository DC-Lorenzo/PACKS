
<?php 
include "header.php";
include "menu.php";
?>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<a href="index.php?m=<?php echo $_GET['m'];?>">
			<span class="glyphicon glyphicon-home"></span>
		<small> 
			<a href="index.php?m=<?php echo $_GET['m'];?>">Inicio ></a> 
			Carro > 
			<div style="float:right;">Conectado como: <strong><?php echo $member_name;?></strong></div>
		</small>
	</div>
</div>
<div class="row space-up">
	<div class="col-md-4">
		<img src="img/colaboro-con-el-tenis.png" class="img-thumbnail">
	</div>
	<div class="col-md-8">
		<h3>Estimado <strong><?php echo $member_name;?></strong>, gracias a esta compra que vas a realizar podremos destinar x€ al fondo de ayudas al tenis.</h3>
		Ayudas a becar a jugadores en formación, patrocinar clubes, competiciones y escuelas de tenis. Recuerda que puedes consultar el programa de ayudas, becas y patrocinios que efectúa elforodeltenis.com <a href="#">haciendo clic aquí.</a>
	</div>
</div>
<div class="row space-up">
	<div class="col-md-12 col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><strong>Paso 1.</strong> Confirmar tus datos personales y entrega.</h3>
			</div>
			<div class="panel-body">
				<table class="table table-condensed table-striped">
				Datos personales. <i><small>(Datos formales de contacto...)</small></i>
					<tbody>
						<tr>
							<td><span style="float:right;">Nombre:</span></td>
							<td><input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="tu nombre" class="form-control"></td>							
							<td><span style="float:right;">1&deg;Apellido:</span></td>
							<td><input type="text" name="nombre" value="<?php echo $papellido;?>" placeholder="tu 1&deg; apellido" class="form-control"></td>							
							<td><span style="float:right;">2&deg;Apellido:</span></td>
							<td><input type="text" name="nombre" value="<?php echo $sapellido;?>" placeholder="tu 2&deg; apellido" class="form-control"></td>							
						</tr>
						<tr>
							<td><span style="float:right;">DNI:</span></td>
							<td><input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="tu DNI" class="form-control"></td>
							<td><span style="float:right;">M&oacute;vil:</span></td>
							<td><input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="tu n&deg; m&oacute;vil" class="form-control"></td>
							<td><span style="float:right;">F.Nacimiento:</span></td>
							<td><input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="ej: 10/04/1980" class="form-control"></td>
						</tr>
					</tbody>
				</table>
				<table class="table table-condensed table-striped">
				Datos de entrega. <i><small>(D&oacute;nde quieres que se entregue tu pedido...)</small></i>	
					<tbody>
						<tr>
							<td><span style="float:right;">Tipo:</span></td>
							<td>
								<select name="tipo_via" class="form-control">
									<option>Sel</option>
									<option value="Avenida">Avenida</option>
									<option value="Calle">Calle</option>
									<option value="Camino">Camino</option>
									<option value="Pasaje">Pasaje</option>
									<option value="Plaza">Plaza</option>
								</select>
							</td>
							<td>Nombre:</td>
							<td><input type="text" name="nombre" size="50" value="<?php echo $nombre;?>" placeholder="ej: Reyes Cat&oacute;licos" class="form-control"></td>							
							<td><span style="float:right;">N&deg;:</span></td>
							<td><input type="text" size="6" name="numero" class="form-control" placeholder="Ej: 10" value="<?php echo $numero;?>"></td>
							<td><span style="float:right;">Escalera:</span></td>
							<td><input type="text"size="6" name="nombre" value="<?php echo $papellido;?>" placeholder="Ej. 2" class="form-control"></td>
							<td><span style="float:right;">Puerta:</span></td>
							<td><input type="text"size="6" name="nombre" value="<?php echo $papellido;?>" placeholder="Ej. 2" class="form-control"></td>
							<td><span style="float:right;">C.Postal:</span></td>
							<td><input type="text" size="5" maxlength="5"name="nombre" value="<?php echo $papellido;?>" placeholder="" class="form-control"></td>							
						
						</tr>
						<tr>
							<td><span style="float:right;">Observaciones:</span></td>
							<td colspan="5"><textarea name="obaervaciones_direccion" class="form-control" rows="3" placeholder="Indica aqu&iacute; alguna referencia relevante que necesite o ayude al repartidor a encontrar la dirección..."><?php echo $observaciones_direccion;?></textarea></td>
							<td colspan="6"><div style="float:right; margin-top:40px"><button class="btn btn-lg btn-success">Confirmar mis datos - Continuar</button></div></td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="panel-footer">
				<i>En elforodeltenis.com tienes todo lo necesario para disfrutar del tenis...</i>
			</div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>

<?php // vamos a ocultar el acceso al carro....... ya estamos en el) ?>
<script type="text/javascript">
	$( document ).ready(function() {
	   $("#carro").hide();
	});
</script>