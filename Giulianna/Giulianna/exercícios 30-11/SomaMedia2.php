<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
   <?php
   function calcularSomaMedia($num1, $num2, $num3) {
       if ($num1 !== '' && $num2 !== '' && $num3 !== '') {
           $soma = $num1 + $num2 + $num3;
           $media = $soma / 3;
           echo "<p>Soma: $soma</p>";
            echo "<p>Média: $media</p>";
        } else {
            echo "<p>Por favor, forneça todos os números.</p>";
        }
    }
   if (isset($_GET['num1'], $_GET['num2'], $_GET['num3'])) {
       $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
       calcularSomaMedia($num1, $num2, $num3);
    } else {
        echo "<p>Por favor, forneça todos os números.</p>";
    }
    ?>
/body>
</html>
