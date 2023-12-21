<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Data</title>
</head>
<body>
    <h2>Informe uma data para verificar se é válida</h2>
   <form action="Data2.php" method="get">
        <label for="ano">Ano:</label>
        <input type="text" name="ano" required>
       <label for="mes">Mês:</label>
        <input type="text" name="mes" required>
       <label for="dia">Dia:</label>
        <input type="text" name="dia" required>
       <button type="submit">Verificar Data</button>
    </form>
</body>
</html>
