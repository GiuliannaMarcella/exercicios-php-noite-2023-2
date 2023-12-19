<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
</head>
<body>
    <h2>Resultado da Conversão</h2>
   <?php
   function celsiusParaFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }
   function fahrenheitParaCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }
   if (isset($_GET['opcao'], $_GET['temperatura'])) {
        $opcao = intval($_GET['opcao']);
        $temperatura = floatval($_GET['temperatura']);
       if ($opcao === 1) {
            $resultado = celsiusParaFahrenheit($temperatura);
            echo "<p>$temperatura °C é igual a $resultado °F</p>";
        } elseif ($opcao === 2) {
            $resultado = fahrenheitParaCelsius($temperatura);
            echo "<p>$temperatura °F é igual a $resultado °C</p>";
        } else {
            echo "<p>Opção inválida.</p>";
        }
    } else {
        echo "<p>Por favor, escolha uma opção e forneça a temperatura.</p>";
    }
    ?>
/body>
/html>