<?php 
  define('BASEURL','http://localhost/prograwebverano/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/miestilo.css" type="text/css" media="screen"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body role="document" background="http://img.fifa.com/images/fwc/2014/brand/bg.jpg?v=130493417218690792" style="background-color:#fff; babackground-repeat:no-repeat; background-position:center; width:100%">


    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FIFA.COM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Lista de equipos</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Calendario y resultados</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Tabla de grupos</a></li>
            
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Goleo <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Goleo Individual</a></li>
                <li class="divider"></li>
                <li><a href="">Goleo por Equipos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inserci&oacute;n de Datos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../pais/pais.php">Inserta Un Pa&iacute;s</a></li>
                <li class="divider"></li>
                <li><a href="../continente/continente.php">Inserte un contiente</a></li>
                <li class="divider"></li>
                <li><a href="../posicion/posicion.php">Inserte una Posici&oacute;n</a></li>
                <li class="divider"></li>
                <li><a href="../estadio/estadio.php">Inserte un Estadio</a></li>
                <li class="divider"></li>
                <li><a href="../integrante/integrante.php">Inserte un Integrante</a></li>
                <li class="divider"></li>
                <li><a href="../equipo/equipo.php">Inserte un Equipo</a></li>


              </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

