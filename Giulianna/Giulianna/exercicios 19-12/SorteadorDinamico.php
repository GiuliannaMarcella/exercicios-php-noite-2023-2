<?php
$NumeroMenor = $_GET["menor"];
$NumeroMaior = $_GET["maior"];
$Quantidade = $_GET["qtd"];

for ($i=0; $i < $Quantidade; $i++) { 
  echo "<br>".rand($NumeroMenor, $NumeroMaior);
}


?>