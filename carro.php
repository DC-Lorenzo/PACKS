
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
				<h3 class="panel-title"><strong>Tu carro de la compra. Resumen</strong></h3>
			</div>
			<div class="panel-body">
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th></th>
						<th>Categor&iacute;a</th>
						<th>Desc.</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>foto-thumb</td>
						<td>Raqueta</td>
						<td>Blade98s</td>
						<td>1</td>
						<td>198&euro;</td>
						<td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td><span style="float:right;">Sub-Total</span></td>
						<td>163,63&euro;</td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td><span style="float:right;">IVA</span></td>
						<td>34,37&euro;</td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td><span style="float:right;">Total</span></td>
						<td>198,00&euro;</td>
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