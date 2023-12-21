<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo Fatorial</title>
</head>
<body>
    <h2>Resultado do Cálculo Fatorial</h2>

    <?php
    // Função para calcular o fatorial de um número
    function calcularFatorial($numero) {
        $fatorial = 1;

        // Calcula o fatorial usando decremento
        while ($numero > 1) {
            $fatorial *= $numero;
            $numero--;
        }

        return $fatorial;
    }

    // Verifica se o número foi enviado via GET
    if (isset($_GET['numero'])) {
        // Obtém o número da query string
        $numero = intval($_GET['numero']);

        // Verifica se o número é válido
        if ($numero >= 0) {
            // Calcula o fatorial
            $resultado = calcularFatorial($numero);

            // Exibe o resultado
            echo "<p>O fatorial de $numero é: $resultado</p>";
        } else {
            echo "<p>Por favor, digite um número não negativo.</p>";
        }
    }
    ?>
</body>
</html>
