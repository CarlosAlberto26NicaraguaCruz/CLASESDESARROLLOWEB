<?php
require('conexion.php');
	$id=$_POST['id'];
    $c=$_POST['ce'];
	$n=$_POST['nom'];
	$e=$_POST['edad'];
	$g=$_POST['genero'];

  $consulta="UPDATE persona SET cedula='$c',nombre='$n',edad='$e',genero='$g' WHERE id=$id";

  $resultado=$mysqli->query($consulta);
  header("Location: tabla.php");
  exit(); 

?>