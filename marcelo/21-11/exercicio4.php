<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" placeholder="numero 1" id="num1">
        <input type="number" placeholder="numero 2" id="num2">
        <button onclick="calcular()" type="submit">ordenar</button>
    </form>

    <script>
        function calcular() {
            let numero1 = document.getElementById('num1').value;
            let numero2 = document.getElementById('num2').value;

            window.open(`resolucao3.php?num1=${numero1}&&num2=${numero2}`);
        }                                               
    </script>

</body>

</html>

<!-- 4 - Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar. -->