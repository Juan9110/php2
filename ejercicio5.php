<?php
/*Ejercicio 5:
Hacer un programa que muestre por pantalla las potencias de los números del 1 al 4. Utiliza la función pow() de PHP*/

$num = 1;
$num1 = 4;
$exponente = 2;

for($i = $num ; $i <= $num1; $i++){
    $resultado = pow($i, $exponente);
    echo"$i elevado a $exponente es = $resultado <br>";
   
    
}

