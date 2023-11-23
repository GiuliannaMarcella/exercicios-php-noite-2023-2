<?php
// echo "Deu certo!";

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];
$valor3 = $_GET["num3"];

// echo " $valor1";
// echo " $valor2";
// echo " $valor3";

$numeros = array($valor1, $valor2, $valor3);

sort($numeros, SORT_NATURAL);
foreach ($numeros as $num) {
    echo "$num <br>";
}





?>