<!-- 1 - Crie um script para inserir o seu nome completo, 
e um campo de opções para escolher letras maiúsculas ou minúsculas, 
em seguida crie uma função para deixar todo o seu nome em maiúsculo 
e uma para deixar todo o seu nome em minúsculo, e utilize a função 
e transforme seu nome de acordo com a escolha em tela realizada. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome</title>
</head>

<body>
    <form action="NomeAlterado.php" method="get">
        <label for="nome">Nome completo:</label>
        <input type="text" name="Nome" required>
        <select name="tipo" required>
            <option value="maiuscula">Maiúscula</option>
            <option value="minuscula">Minúscula</option>

        </select>
        <button type="submit">Alterar</button>
    </form>
</body>

</html>