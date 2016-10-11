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



<!-- ACA TERMINA EL MENU-->



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
                <li class="active"><a href="inicio.php">Inicio</a></li>
                <li ><a href="formulario.php">Formulario</a></li>
                <li ><a href="tabla.php">Tabla</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
</nav>

<!-- ACA TERMINA EL MENU-->
<!-- ACA COMIENZAN LOS PANELES-->
<body>
 
<div class="container">
  <h2>Este grupo de paneles muestra en detalle informaciòn de los registros</h2>

<div class="row">
      <?php
         $sql = "SELECT * FROM persona";
          $query = $mysqli->query($sql);
           while($row=$query->fetch_assoc()){
               ?>
    <div class="col-md-6">
        <div class="panel-group">

            <div class="panel panel-primary">
                  <div class="panel-heading">
                  Su identificaciòn en este sistema es:<?php echo $row['id'];?>
                  </div>
                  <div class="panel-body">Nombre es: <?php echo $row['cedula'];?>
                    
                  </div>
                  <div class="panel-body">El numero de identificaciòn Nacional es: <?php echo $row['nombre'];?>
                    
                  </div>
                  <div class="panel-body">La edad del individuo es: <?php echo $row['edad'];?>
                    
                  </div>
                  <div class="panel-body">El genero del individuo es: <?php echo $row['genero'];?>
                    
                  </div>
                  <div><button type="button" class="btn btn-info" onclick = "location='tabla.php'"/>Mas Opciones en Tabla</button>
                  </div>


            </div>
             
          </div>
         
       
      </div>
     <?php } ?>
</div>
  

</body>

<!-- ACA TERMINAN LOS PANELES-->



        
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