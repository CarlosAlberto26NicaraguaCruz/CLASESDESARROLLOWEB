<?php
/*do{
echo "";
print $i;	
}while($i<10);validacion falsa o verdadera*/

/*Encontrar el multiplo de los numeros 2y3 en el rango de 10

1(2 o 3)
2
3...10(2 o 3)
cuales esten fuera de los numeros multiplos
*/

$i=1;$num2y3=0;$num3=0;$num2=0;
while ($i <= 10) {
	if (($i % 2==0) AND ($i % 3==0))
	{
		echo "$i es multiplo de 2 y de 3.<br>";
	  $num2y3+=1;
	}elseif ($i%2==0)
	{
		echo "$i es multiplo de 2.<br>";

	}elseif ($i%3==0) 
	{
		echo "$i es multiplo de 3.<br>";
		$num3+=1;

    }else
    {
    	echo "$i no es multiplo de 2 ni de 3.<br>";
		$num3+=1;
    }
    $i+=1;
}

    echo "______________________________________<br>";
    echo "$num2y3 son multiplos de 2 y 3.<br>";
    echo "num3 son multiplos de 3.<br>";
    echo "num2 son multiplos de 2.<br>";
    echo "Los restantes ".(10-$num2y3-$num2-$num3)."numeros no son multiplos de 2 ni de 3";

/*$i=0;
while ($i <= 10) {
	print $i++;
	//$1=$1+1
}*/
?>