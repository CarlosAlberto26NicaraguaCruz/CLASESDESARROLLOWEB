<?php 
  require('conexion.php');

 ?>

<!DOCTYPE html>
<html lang="en">
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
                <li ><a href="formulario.php">Formulario</a></li>
                <li class="active"><a href="tabla.php">Tabla</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
</nav>

<!-- ACA TERMINA EL MENU EL MENU-->


<!-- ACA TERMINAN LO RADIOS Y EL BOTON-->

<!-- Esta parte de aca para abajo va la tabla-->


<div class="container">
  <h2>Tabla de Informes</h2>
  <p>Esta tabla muestra los elementos almacenados en mi Base de Datos</p>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Genero</th>
        <th>Editar</th>
        <th>Eliminar</th>
        

      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM persona";

        $query = $mysqli->query($sql);
        while($row=$query->fetch_assoc()){
       ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['cedula'];?></td>
            <td><?php echo $row['edad'];?></td>
            <td><?php echo $row['genero'];?></td>
            <td><form method='post' action=''>
      <input type='hidden' name='id_cliente' value='".$id["id"]."'>
     <a href="formularioeditar.php?id=<?php echo $row['id'];?>" class="btn btn-warning" >Editar</a>
      </form></td>
            <td><form method='post' action=''>
      <input type='hidden' name='id_cliente' value='".$id["id"]."'>
     <a href="eliminar.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Eliminar</a>
      </form></td>
        </tr>

<!-- ACA TERMINA LA TABLA-->

        <?php } ?>
    </tbody>
  </table>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<footer>
  Copyright © Carlos Alberto Nicaragua Cruz
</footer>
</body>
</html>

