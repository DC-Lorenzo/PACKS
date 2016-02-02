<div class="row space-up">
  <div class="col-md-4">
                <a href="index.php?m=<?php echo $_GET['m'];?>">
            <img alt="el foro del tenis - packs" src="img/elforodeltenis.png" width="78%">
          </a>
  </div>
</div>
<div class="row space-up">
  <div class="col-md-12">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php?m=<?php echo $_GET['m'];?>">Inicio</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nuevo <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="raquetas.php?m=<?php echo $_GET['m'];?>">Raquetas</a></li>
                <li><a href="#">Zapatillas</a></li>
                <li><a href="#">Cordajes</a></li>
                <li><a href="#">Textil</a></li>
                <li><a href="#">Mochilas</a></li>
                <li><a href="#">Accesorios</a></li>
              </ul>
            </li>
            <li><a href="segunda-mano.php?m=<?php echo $_GET['m'];?>">Segunda Mano</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.elforodeltenis.com">Volver al foro</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Porqu&eacute; Comprar? <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Seguridad & Compromiso</a></li>
                <li><a href="#">Condiciones Generales</a></li>
                <li><a href="#">Ayuda al tenis</a></li>
                <li><a href="#">Qui&eacute;nes Somos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cont&aacute;ctanos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Colaboraciones con tiendas</a></li>
                <li><a href="#">Opciones patrocinio jugadores</a></li>
                <li><a href="#">Opciones patrocinio Club</a></li>
                <li><a href="#">Quiero vender aqu&iacute;</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>