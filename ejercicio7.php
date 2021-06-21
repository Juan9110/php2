<?php
/*Ejercicio 7:
Leer dos números que llegan por parámetro GET y mostrar la suma, resta, multiplicación y división de <ambos></ambos>
echo var_dump($_GET);

echo "<br>";
echo "h2>Recibe dos paraetros por url numero1 y numero2</h2>";
echo "<p>"muestra la <suma></suma>*/
if(isset( $_GET['numero1'])&&isset( $_GET['numero2'])){


    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<p>Valores recibidos: $numero1 y $numero2</p>";
    $resultado = $numero2 + $numero2;
    echo "<p>La suma es : $resultado</p>";
    $resultado = $numero1 - $numero2;
    echo "<p>La resta es : $resultado</p>";
    $resultado = $numero1 * $numero2;
    echo "<p>La multiplicasion es : $resultado<p>";

        if($numero2 != 0){
            $resultado = $numero1 / $numero2;
            echo "<p>La division es: $resultado</p>";
        }else{
            echo "<p>No se puede resalizar la divicion por 0 </p>";
        }
}else{
    echo "Introduce numeros validos";
}




