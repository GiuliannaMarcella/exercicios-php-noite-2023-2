<!-- 3 - Crie uma função que receba dois valores inteiros 
como argumentos e retorne se os números são divisíveis, 
se forem divisíveis verifique se cada número digitado é par 
ou ímpar e mostre na tela também. -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Divisibilidade</title>
</head>
<body>
    <h2>Informe dois números para verificar divisibilidade</h2>
   <form action="Divisivel2.php" method="get">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" required>
       <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" required>
       <button type="submit">Mostrar Divisibilidade</button>
    </form>
</body>
</html>
