<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" placeholder="Numero" id="numero">

        <button onclick="calcular()" type="submit">Calcular</button>
    </form>

    <script>
        function calcular() {
            let num1 = document.getElementById('numero').value;

            window.open(`backend1.php?num1=${num1}`);
        }
    </script>


</body>

</html>