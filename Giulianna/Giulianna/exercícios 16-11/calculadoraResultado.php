<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operador = $_GET["operador"];

switch($operador) {
    case "soma":
        $result = $num1 + $num2;
    }
        switch($operador) {
    case "subtracao":
        $result = $num1 - $num2;
       }
       switch($operador) {
    case "multiplicacao":
        $result = $num1 * $num2;
     }
     switch($operador) {
    case "divisao":
        if($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            echo "Erro: Divisão por zero!";
        }
      }

        if(isset($result)) {
            echo " $result";
        }

?>

</body>

</html>