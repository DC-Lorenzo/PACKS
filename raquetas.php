<?php 
include "header.php";
include "menu.php";
include "slider-raquetas.php";
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
		<div style="float:right;">Conectado como: <strong><?php echo $member_name;?></strong></div></small>
	</div>
</div>
<div class="row space-up">
	<div class="col-md-6"><img src="img/box-raquetas.jpg"  class="img-thumbnail"></div>
	<div class="col-md-6">
		<h1>Raquetas performance y recreacionales</h1>
		<p>Las raquetas est&aacute;n disponibles en L1, L2 y L3. Los usuarios registrados de elforodeltenis.com tienen precios especiales y/o packs de oferta.</p>
	</div>
</div>
<div class="row space-up">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/productos-nuevos/blade98s.png" alt="Raquetas de Tenis">
      <div class="caption">
        <h3>Blade 98S</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <table class="table table-bordered table-striped table-condensed">
        	<tbody>
        		<tr>
        			<td>Precio General</td>
        			<td>198€</td>
        		</tr>
        		<tr>
        			<td>Precio forero</td>
        			<td>190€</td>
        		</tr>
        	</tbody>
        </table>
        <p>
        	<a href="raqueta-tenis.php?m=<?php echo $_GET['m'];?>" class="btn btn-success" role="button">ver+</a>
        	<span style="float:right;"><a href="#" class="btn btn-primary" role="button">Añadir al carro</a></span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/productos-nuevos/blade98s.png" alt="Raquetas de Tenis">
      <div class="caption">
        <h3>Blade 98S</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p>
        	 
        	<a href="raqueta-tenis.php?m=<?php echo $_GET['m'];?>" class="btn btn-default" role="button">ver+</a>
        	<a href="#" class="btn btn-success" role="button">198&euro;</a>
        	<a href="#" class="btn btn-primary" role="button">Comprar</a>
        	
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/productos-nuevos/blade98s.png" alt="Raquetas de Tenis">
      <div class="caption">
        <h3>Blade 98S</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p>
        	<a href="raqueta-tenis.php?m=<?php echo $_GET['m'];?>" class="btn btn-default" role="button">ver+</a>
        	<a href="#" class="btn btn-success" role="button">198&euro;</a>
        	<a href="#" class="btn btn-primary" role="button">Comprar</a>
        	
        </p>
      </div>
    </div>
  </div> 
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/productos-nuevos/blade98s.png" alt="Raquetas de Tenis">
      <div class="caption">
        <h3>Blade 98S</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p>
        	<a href="raqueta-tenis.php?m=<?php echo $_GET['m'];?>" class="btn btn-default" role="button">ver+</a>
        	<a href="#" class="btn btn-success" role="button">198&euro;</a>
        	<a href="#" class="btn btn-primary" role="button">Comprar</a>
        </p>
      </div>
    </div>
  </div>     
</div>
<?php
include "footer.php";
?>