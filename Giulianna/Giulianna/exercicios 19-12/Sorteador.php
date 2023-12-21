<!-- 4 - Crie um sorteador dinâmico com três entrada na tela, sendo elas, 
a primeira e a segunda entrada o gap de números que irá gerar, e a 
terceira entrada a quantidade de números que serão sorteados, e 
apresente na tela todos os resultados. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sorteador</title>
</head>

<body>
    <h1>Sorteaar</h1>
    <form action="SorteadorDinamico.php" method="get">
        <input type="number" name="menor" required>
        <input type="number" name="maior" required>
        <input placeholder="quantidade" type="number" name="qtd" required>
        <button type="submit">Sortear</button>
</body>

</html>