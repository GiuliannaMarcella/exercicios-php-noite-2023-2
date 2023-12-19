<?php

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];
$valor3 = $_GET["num3"];

$numeros = array($valor1, $valor2, $valor3);

rsort($numeros);
foreach($numeros as $num) {
    echo "$num <br>";
}
?>