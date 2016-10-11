<?php
    include("conexion.php");

    $c=$_POST['ce'];
	$n=$_POST['nom'];
	$e=$_POST['edad'];
	$g=$_POST['genero'];
	
	$consulta = "INSERT INTO persona(cedula, nombre, edad, genero)values('$n','$c','$e','$g')";
	$resultado = $mysqli->query($consulta);
	header("location:tabla.php");
?>