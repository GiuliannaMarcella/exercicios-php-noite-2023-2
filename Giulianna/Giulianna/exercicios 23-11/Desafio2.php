<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <h2>Tabuada</h2>

    <?php
    // Verifica se o número foi enviado via GET
    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']);

        // verificar se o número é válido
        if ($numero >= 1 && $numero <= 10) {
            // Calcular e mostrar a tabuada
            echo "<h3>Tabuada do $numero</h3>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, escolha um número válido.</p>";
        }
    }
    ?>

</body>

</html>