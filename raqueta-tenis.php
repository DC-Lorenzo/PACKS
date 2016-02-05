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
		    <form method="get" class="form-inline">	
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
		          <td>
					<select name="talla" class="form-control">
		        		<option selected="selected">Selecciona Grip</option>
		        		<option value="L1">L1</option>
		        		<option value="L2">L2</option>
		        		<option value="L3">L3</option>
		      		</select>					
		          	<i><small>(L1, L2, L3)</small></i>
		          </td>
		        </tr>
		        <tr>
		        	<td>Funda:</td>
		        	<td>NO</td>
		        </tr>
		        <tr>
		        	<td>Cordaje:</td>
		        	<td>SI, Est&aacute;ndar F&aacute;brica</td>
		        </tr>
		        	<td>Cantidad:</td>
		        	<td>
		        		<select name="cantidad" class="form-control">
		        			<option value="1">1</option>
		        			<option value="2">2</option>
		        			<option value="3">3</option>
		        			<option value="4">4</option>
		        		</select>
		        	</td>
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
		        <?php if ($user_log=="SI"){ ?>
		        <tr>
		        	<td>Camiseta Regalo:</td>
		        	<td>
		        		<select name="talla" class="form-control">
					        <option selected="selected">Selecciona Talla</option>
					        <option value="S">S</option>
					        <option value="M">M</option>
					        <option value="L">L</option>
					        <option value="XL">XL</option>
					    </select>
		        	</td>
		        </tr>
		      <?php } ?>
		      </tbody>
		    </table>
		    </form>
		    <div class="row">
		      <div class="col-md-4 col-xs-6">
		    
		        <button class="btn btn-warning" data-toggle="modal" data-target="#send2friend">Recomendar a un amigo</button>
		      
		      </div>
		      <div class="col-md-8 col-xs-6">  
		      <?php if ($user_log=="SI"){ ?>
		        <a href="carro.php?m=<?php $_GET['m'];?>&ca=raqueta&item=<?php echo $id_raqueta;?>" class="btn btn-success" style="float:right;">Añadir a la compra</a>
		      <?php } 
		      	if ($user_log=="NO"){ ?>
		        <a href="http://www.elforodeltenis.com/register" class="btn btn-primary" style="float:right;">Reg&iacute;strate para poder comprar...</a>
		      <?php } ?>
		      </div>
		    </div>
		    </div>
		  </div>
	</div>
</div>

<?php
include "footer.php"
?>

<!-- Modal -->
<div class="modal fade" id="send2friend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img src="img/elforodeltenis.png">
      </div>
      <div class="modal-body">
        <strong><?php echo $member_name;?></strong>, indícanos la dirección de correo electrónico de tu amigo, y le enviaremos un email para que pueda ver y/o comprar esta raqueta.
        <input type="text" name="email_friend" class="form-control space-up" placeholder="indica el email de tu amigo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar Email</button>
      </div>
    </div>
  </div>
</div>