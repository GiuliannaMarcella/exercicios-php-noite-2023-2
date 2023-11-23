<?php
echo "Deu certo!";
$prova1 = $_GET["num1"];
$prova2 = $_GET["num2"];

echo "Nota da primeira prova $prova1";
echo "Nota da segunda prova$prova2";

$media = (($prova1 + $prova2) / 2);
echo "A média é $media";

if ($media <= 5.9) {
    echo "Reprovado";
}

if ($media >= 6 && $media <= 9.9) {
    echo "Aprovado";
}

if ($media == 10) {
    echo "Aprovado com Distinção";
}




?>