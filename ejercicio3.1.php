<?php
//Crear un programa que tenga 4 variables, una de tipo array, otra de tipo string, otra int y otra booleano.
//Imprimir un mensaje según el tipo de variable que sea

//los arrays en php pueden contener elementos de diferentes tipos
$miArray = array("Elemento 1", 5, false);

$miString = "Soy un string";

$miNumero = 48;

$miBooleana = true;

//is_array() devuelve verdadero si el parámetro es un array y falso en caso contrario
if(is_array($miArray)){
    echo "<h2>La variable miArray es un array</h2>";
}else{
    echo "<h2>La variable miArray no es un array</h2>";
}

//is_string() comprueba si una variable es un string
if(is_string($miString)){
    echo "<h2>La variable miString es un string</h2>";
}else{
    echo "<h2>La variable miString no es un string</h2>";
}

//is_integer() comprueba si la variable es un entero
if(is_integer($miNumero)){
    echo "<h2>La variable miNumero es un entero</h2>";
}else{
    echo "<h2>La variable miNumero no es un entero</h2>";
}

//is_bool() comprueba si la variable es un booleano
if(is_bool($miBooleana)){
    echo "<h2>La variable miBooleana es un booleano</h2>";
}else{
    echo "<h2>La variable miBooleana no es un booleano</h2>";
}

//getType() devuelve el tipo de dato en un string
echo 'La variable $miArray es un '. '<b>' . gettype($miArray) . '</b>';
echo "<br>";
echo 'La variable $miString es un ' . "<b>" . gettype($miString) . "</b>";
echo "<br>";
echo  'La variable $miNumero es un ' . "<b>" . gettype($miNumero) . "</b>";
echo "<br>";
echo 'La variable $miBooleana es un ' . "<b>" . gettype($miBooleana) . "</b>";
echo "<br>";
print("La variable $miArray es un <b>gettype($miArray)</b>");