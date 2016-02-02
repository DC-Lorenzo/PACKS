<?php 
include "header.php";
include "menu.php";

?>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<a href="index.php?m=<?php echo $_GET['m'];?>">
			<span class="glyphicon glyphicon-home"></span>
				<small> 
					Inicio >
		</a> 
					Nuevo > 
		<a href="raquetas.php?m=<?php echo $_GET['m'];?>">Raquetas ></a> 
		Blade98s <div style="float:right;">Conectado como: <strong><?php echo $member_name;?></strong></div></small>
	</div>
</div>
<div class="row space-up">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<img src="img/box-blade.png"  class="img-thumbnail">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row space-up">
					<div class="col-md-6 col-xs-6"><img src="img/productos-nuevos/blade1.png" alt="raqueta de tenis" class="img-thumbnail"></div>
					<div class="col-md-6 col-xs-6"><img src="img/productos-nuevos/blade2.png" alt="raqueta de tenis" class="img-thumbnail"></div>
				</div>
				<div class="row space-up">	
					<div class="col-md-6 col-xs-6"><img src="img/productos-nuevos/blade3.png" alt="raqueta de tenis" class="img-thumbnail"></div>
					<div class="col-md-6 col-xs-6"><img src="img/productos-nuevos/blade4.png" alt="raqueta de tenis" class="img-thumbnail"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
		    <div class="panel-heading">
		      <h3 class="panel-title">
		      	<strong>Blade98s</strong> 
		      	<div style="float:right;">
		      		<span style="color:red;">
		      			Precio general: 198€
		      		</span>
		      		/
		      		<span style="color:green;">
		      			<strong>Precio foreros: 190€</strong>
		      		</span>
		      	</div>
		      </h3>
		    </div>
		    <div class="panel-body">
		        <p><small>La raqueta Wilson Blade 98S aporta control al jugador ofensivo. Gracias a una tecnología de perforación del marco paralela a las cuerdas, la zona óptima de impacto es mayor. Además, la composición de grafito y basalto (como las Pro Staff) proporciona mejores sensaciones y por lo tanto un mejor control de cada golpe. Éste es el modelo elegido por la mayoría de los jugadores de la última generación.</small> </p>
		    	<?php if ($user_log=="NO"){ ?>
		    	<div class="alert alert-danger"><strong>Para obtener el mejor precio de compra, identifícate en el foro.</strong></div>
		    	<?php } ?>
		    <table class="table table-condensed table-bordered table-striped">
		      <tbody>
		      	<tr>
		      	  <td>Estilo Juego:</td>
		      	  <td>Este modelo de raqueta ha sido concebido para tenistas con estilo de juego moderno, es decir agresivo y potente</td>
		      	</tr>
		        <tr>
		          <td>Peso s/cordaje:</td>
		          <td>295gr.</td>
		        </tr>
		        <tr>
		          <td>Peso c/cordaje:</td>
		          <td>315gr.(aprox)</td>
		        </tr>
		        <tr>
		          <td>Patr&oacute;n:</td>
		          <td>16 Verticales 19 Horizontales</td>
		        </tr>
		        <tr>
		          <td>Balance:</td>
		          <td>36cms (cuello)</td>
		        </tr>
		        <tr>
		          <td>Grips:</td>
		          <td>L1, L2, L3</td>
		        </tr>
		        <tr>
		        	<td>Funda:</td>
		        	<td>NO</td>
		        </tr>
		        <tr>
		        	<td>Cordaje:</td>
		        	<td>SI, Est&aacute;ndar F&aacute;brica</td>
		        </tr>
		        <tr>
		        	<td>Tu Precio:</td>
		        	<?php 
		        	if ($user_log=="SI") {$color="green";}
		        	if ($user_log=="NO") {$color="red";}
		        	?>
		        	<td>
		        		<span style="color:<?php echo $color;?>"><strong>190€</strong>
		        		 <?php
		        		 if ($user_log=="NO") {echo "precio general. <small><a href=\"http://www.elfordeltenis.com/register\">[regístrate]</a> o <a href=\"http://www.elfordeltenis.com/login\">[identifícate ]</a> y obtendrás precio forero!</small>";}
		        		 if ($user_log=="SI") {echo "+ regalo (gratis) camiseta oficial de elforodeltenis.com";}?>
		        		 </span>
		        	</td>
		        </tr>
		      </tbody>
		    </table>
		    <div class="row">
		      <div class="col-md-4 col-xs-6">
		      <select name="talla" class="form-control">
		        <option selected="selected">Seleccione Grip</option>
		        <option value="L1">L1</option>
		        <option value="L2">L2</option>
		        <option value="L3">L3</option>
		      </select>
		      </div>
		      <div class="col-md-4 col-xs-6">
		      <?php if ($user_log=="SI"){ ?>
		      <select name="talla" class="form-control">
		        <option selected="selected">Seleccione Talla</option>
		        <option value="S">S</option>
		        <option value="M">M</option>
		        <option value="L">L</option>
		        <option value="XL">XL</option>
		      </select>
		      <?php } ?>
		      </div>
		      <div class="col-md-4 col-xs-6">
		        &nbsp;
		        <button class="btn btn-primary">Añadir a la compra</button>
		      </div>
		    </div>
		    </div>
		  </div>
	</div>
</div>

<?php
include "footer.php"
?>
