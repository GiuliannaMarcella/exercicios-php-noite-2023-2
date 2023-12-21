<!-- 2 - Escreva um script que pergunta ao usuário 
se ele deseja converter uma temperatura de grau Celsius 
para Farenheit ou vice-versa. Se ele digitar/escolher 1,
é de Celsius para Farenheit, se digitar/escolher 2 é de
Farenheit para Celsius, outro valor mostre uma mensagem de erro. 
Para cada conversão, chame a função correta. -->
!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <h2>Escolha a variação da temperatura</h2>
   <form action="Temperatura2.php" method="get">
        <label for="opcao">Escolha a opção:</label>
        <select name="opcao" id="opcao">
            <option value="1">Celsius para Fahrenheit</option>
            <option value="2">Fahrenheit para Celsius</option>
        </select>
       <label for="temperatura">Digite a temperatura:</label>
        <input type="text" name="temperatura" required>
       <button type="submit">Converter</button>
    </form>
/body>
</html>
