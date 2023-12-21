<!-- 5 - Crie duas funções que irão calcular o IMC de uma pessoa 
(os dados serão passados pelo front-end), uma função deverá 
calcular o IMC e a segunda deverá dizer qual grau a pessoa se 
encontra (magro, normal, obeso…), retorne o grau para o usuário. -->
<!DOCTYPE html>
</body>

</html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>

<body>
    <h2>Informe os dados para calcular o IMC</h2>
    <form action="Imc2.php" method="get">
        <label for="altura">Altura (centímetros):</label>
        <input type="text" name="altura" required>
        <label for="peso">Peso (quilogramas):</label>
        <input type="text" name="peso" required>
        <button type="submit">Calcular IMC</button>
    </form>
</body>

</html>