<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
</head>
<body>
    <h2>Resultado da Verificação</h2>
   <?php
    function verificarDivisibilidade($num1, $num2) {
        if ($num2 != 0) {
            $resultado = $num1 % $num2 === 0 ? "divisíveis" : "não divisíveis";
           echo "<p>$num1 e $num2 são $resultado</p>";
           echo "<p>$num1 é " . ($num1 % 2 === 0 ? "par" : "ímpar") . "</p>";
            echo "<p>$num2 é " . ($num2 % 2 === 0 ? "par" : "ímpar") . "</p>";
        } else {
            echo "<p>Erro: Divisão por zero.</p>";
        }
    }
   if (isset($_GET['numero1'], $_GET['numero2'])) {
        $numero1 = intval($_GET['numero1']);
        $numero2 = intval($_GET['numero2']);
       verificarDivisibilidade($numero1, $numero2);
    } else {
        echo "<p>Por favor, forneça dois números.</p>";
    }
    ?>
</body>
</html>
