<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>
   <?php
    function calcularIMC($altura, $peso) {
        if ($altura > 0.00 && $peso > 0) {
            return $peso / ($altura * $altura);
        } else {
            return false;
        }
    }
   function classificarIMC($imc) {
        if ($imc === false) {
            echo "<p>Erro: Altura e peso devem ser valores positivos.</p>";
        } else {
            if ($imc < 18.5) {
                echo "<p>Seu IMC é $imc. Você está abaixo do peso.</p>";
            } elseif ($imc < 24.9) {
                echo "<p>Seu IMC é $imc. Você está com peso normal.</p>";
            } elseif ($imc < 29.9) {
                echo "<p>Seu IMC é $imc. Você está com sobrepeso.</p>";
            } elseif ($imc < 34.9) {
                echo "<p>Seu IMC é $imc. Você está com obesidade grau I.</p>";
            } elseif ($imc < 39.9) {
                echo "<p>Seu IMC é $imc. Você está com obesidade grau II.</p>";
            } else {
                echo "<p>Seu IMC é $imc. Você está com obesidade grau III.</p>";
            }
        }
    }
   if (isset($_GET['altura'], $_GET['peso'])) {
        $altura = floatval($_GET['altura']);
        $peso = floatval($_GET['peso']);
       $imc = calcularIMC($altura, $peso);
       classificarIMC($imc);
    } else {
        echo "<p>Por favor, forneça altura e peso.</p>";
    }
    ?>
</body>
</html>
