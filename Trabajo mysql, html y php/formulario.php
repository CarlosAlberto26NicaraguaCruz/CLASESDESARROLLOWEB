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
                <li class="active"><a href="formulario.php">Formulario</a></li>
                <li><a href="tabla.php">Tabla</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
</nav>

<!-- ACA TERMINA EL MENU EL MENU-->




<form class="formulario" action="insertar.php" method="post">

<!--LABEL TEXTBOX -->
<h2>Ingrese aqui sus datos para se mostrados en Lista.::::;:)</h2>
<div>
    <label>Cedula</label><br/>
    <input type="text" id="cedula" name="ce"><br/>


	<label>Nombre</label><br/>
	<input type="text" id="nombre" name="nom"><br/>

	<label>Edad:</label><br/>
	<input type="text" id="Edad" name="edad"><br/>
	</div>
<!-- LABEL Genero Radio button, Button-->
	<div>
	Genero:<br/>

	<label class="radio-incline">
	<input checked value="Masculino" type="radio" name="genero">Hombre</label>

	<label class="radio-incline">
	<input  value="Femenino" type="radio" name="genero"></label>Mujer<br/>

	<input type="submit">

	</div>
</form>



<!-- ACA TERMINAN LO RADIOS Y EL BOTON-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<footer>
  Copyright © Carlos Alberto Nicaragua Cruz
</footer>
</body>
</html>