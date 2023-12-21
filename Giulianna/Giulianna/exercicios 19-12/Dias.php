<!-- 5 - Escreva uma programa que receba a data 
de nascimento,calcule quantos dias de vida você 
já está abrilhantando esse mundão. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias</title>
</head>

<body>
    calcule quantos dias de vida você já está abrilhantando esse mundão
    <h4>Data que você nasceu</h4><input type="date" id="data">

    <button onclick="enviarInformacoes()"> Calcular</button>
</body>
<script>
    function enviarInformacoes() {
        let Data = document.getElementById("data").value
        window.open(`Dias2.php?data=${Data}`)
    }
</script>

</html>