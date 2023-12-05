<?php
$num1 = $_GET ["numero1"];
$num2 = $_GET ["numero2"];
$num3 = $_GET ["numero3"];

function resultadoFinal ($num1, $num2, $num3)
{
    $media = soma($num1, $num2, $num3) / 3;

    $result = [
        'media' => $media,
        'soma' => soma($num1, $num2, $num3)
    ];
    return $result;

}
function soma($num1, $num2, $num3){
    $soma = $num1 + $num2 + $num3;
    return $soma;

}

$resultado = resultadoFinal($num1, $num2, $num3)
echo <br> A soma é 
?>