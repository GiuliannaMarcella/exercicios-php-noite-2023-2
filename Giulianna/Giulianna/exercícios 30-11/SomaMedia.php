<!-- 1 - Faça um programa, com uma função que necessite de três argumentos, 
e que forneça a soma desses três argumentos através de uma função. 
Seu script também deve fornecer a média dos três números, através de uma segunda 
função que chama a primeira. Obs. faça uma validação para não deixar o usuário 
enviar inputs vazios. Resolução -->
!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma e Média</title>
</head>
<body>
    <h2>Informe três números para calcular a soma e média</h2>
   <form action="SomaMedia2.php" method="get">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" required>
       <label for="num2">Número 2:</label>
        <input type="text" name="num2" required>
       <label for="num3">Número 3:</label>
        <input type="text" name="num3" required>
       <button type="submit">Calcular</button>
    </form>
/body>
</html>
