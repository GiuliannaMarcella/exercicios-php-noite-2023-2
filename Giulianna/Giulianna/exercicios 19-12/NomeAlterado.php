<?php 
$Nome = $_GET["Nome"];
$tipo = $_GET["tipo"];
// echo "$Nome";

if ($tipo == "maiuscula") {
    echo"<br>".strtoupper($Nome);
}
else {
    $tipo == "minuscula";
    echo"<br>".strtolower($Nome);
}




?>