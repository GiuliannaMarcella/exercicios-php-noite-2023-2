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
        <input type="number" placeholder="numero 3" id="num3">
        <button onclick="ordenar()" type="submit">ordenar</button>
    </form>

    <script>
        function ordenar() {
            let num3 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let num3 = document.getElementById('num3').value;

            window.open(`resolucao2.php?num1=${nota1}&&num2=${nota2}`);
        }
    </script>

</body>

</html>

<!-- 3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente. -->