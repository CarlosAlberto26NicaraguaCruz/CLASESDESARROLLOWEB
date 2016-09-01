<?php
$a=$_REQUEST['valor1'];
$b=$_REQUEST['valor2'];

if ($_REQUEST['operador']=="suma") {
	$r_suma=suma($a,$b);
	echo "La suma es:$r_suma";
}
else
	if($_REQUEST['operador']=="resta"){
		$r_resta=resta($a,$b);
		echo "La resta es:$r_resta";
	}
	else
		if($_REQUEST['operador']=="multiplicar")
		{
			$r_multiplicar=multiplicar($a,$b);
			echo "La multiplicacion es:$r_multiplicar";
		}
		else
			if ($_REQUEST['operador']=="Divicion") {
				$r_Divicion=Divicion($a,$b);
				echo "La Divicion es :$r_Divicion";
			}

function sumar($a,$b){
	$suma=$a+$b;
	return $suma;
}
function resta($a,$b){
	$resta=$a-$b;
	return $resta;
}
function multiplicar($a,$b){
	$multiplicar=$a*$b;
	return $multiplicar;
}
function Divicion($a,$b){
	$Divicion=$a/$b;
	return $Divicion;
}
?>