<?php 
  require('conexion.php');
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="miestilo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Insertar Datos</title>
</head>
<body>

<!-- ACA COMIENZA EL MENU-->


<nav role="navigation" class="navbar  navbar-inverse ">
        <div class="navbar-header navbar-inverse">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-inverse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Logotipo</a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="formulario.php">Formulario</a></li>
                <li><a href="tabla.php">Tabla</a></li>
                <li class="active"><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
</nav>

<!-- ACA TERMINA EL MENU EL MENU-->

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img_fjords.jpg">
      <img src="images/yo.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Carlos Alberto Nicaragua Cruz</div>
    <div class="desc">Telefono 8442-3596 Claro Acepto Recargas</div>
    <div class="desc">Todo lo puedo en Cristo que me fortalece Filipenses 4:12</div>
  </div>
</div>


<!-- ACA TERMINAN LO RADIOS Y EL BOTON-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<footer>
  Copyright © Carlos Alberto Nicaragua Cruz
</footer>
</body>
</html>