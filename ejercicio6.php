<?php
/*Ejercicio 6:
Mostrar todos los números pares del 1 al 100*/	
$texto = "";
for($i = 0; $i <= 100 $i++){
    if($i = % 2 == 0){
    $texto.= "$i, ";
    }
}
$texto = substr($texto, 0, strlen($texto)-2);
echo $texto;