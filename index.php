<?php 
include "header.php";
include "menu.php";
include "slider.php";
?>
<div class="row space-up">
  <div class="col-md-12 col-xs-12">
    <span class="glyphicon glyphicon-home"></span> Inicio
     <small> <div style="float:right;">Conectado como: <strong><?php echo $member_name;?></strong></div></small>
  </div>
</div>
<div class="row space-up">
  <div class="col-md-6 col-xs-6">
   <a href="raquetas.php?m=<?php echo $_GET['m'];?>"><img src="img/box-raquetas.jpg" alt="raquetas de tenis" class="img-thumbnail"></a>
  </div>
  <div class="col-md-6 col-xs-6">
   <img src="img/box-zapatillas.jpg" alt="zapatillas de tenis" class="img-thumbnail">
  </div> 
</div>
<div class="row space-up">
  <div class="col-md-6 col-xs-6">
   <img src="img/box-cordajes.jpg" alt="cordaje de tenis" class="img-thumbnail">
  </div>
   <div class="col-md-6 col-xs-6">
      <img src="img/box-ropa.jpg" alt="ropa de tenis" class="img-thumbnail">
  </div> 
</div>
<div class="row space-up">
  <div class="col-md-6 col-xs-6">
      <img src="img/box-mochilas.jpg" alt="cordaje de tenis" class="img-thumbnail">
  </div> 
  <div class="col-md-6 col-xs-6">
      <img src="img/box-accesorios.jpg" alt="accesorios de tenis" class="img-thumbnail">
  </div>
</div>
<h1>Estamos trabajando en esta secci&oacute;n</h1>
<a href="http://www.elforodeltenis.com">Volver al foro</a>

<?php include "footer.php";?>