<?php 
include('conexion.php');
    $i=$_GET['id'];
	
	$consulta= "DELETE FROM persona WHERE id='$i'";
	$resultado = $mysqli->query($consulta);
	header("location:tabla.php");
	exit();
 ?>