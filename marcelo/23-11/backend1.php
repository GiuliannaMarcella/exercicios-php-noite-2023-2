<?php


$i = $_GET["num1"];
$calc = 1;

while ($i > 1) {
    $calc *= $i;
    $i--;

}

echo $calc;


?>