<?php
//estructura estandar
echo "Estructura estandar<br>";
for ($i=1; $i <=10 ; $i++) { 
	echo "$i";
}
echo "<br>";
//estructura por condición
//declaración de variables
echo "2.Estructura por condición<br>";
for ($i=1; ; $i++) { 
	if ($i>10) {
		break;
	}
	echo "$i";
}
echo "<br>";
//Estructura multiple
//Declaracion de la Variable contador fuera
//Contador esta dentro de la estructura
//la condicion esta fuera de la estructura
echo "Estructura multiple<br>";
$i=1;

for (;;) {
if ($i>10)
{
 	break;
} 
	echo "$i";
	$i++;
}
echo "<br>";
//Todo en uno
echo "Todo en uno<br>";
for ($i=1; $i <10;print  $i.$i++) { 
	# code...
}
?>