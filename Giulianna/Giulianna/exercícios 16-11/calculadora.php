<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    <form action="calculadoraResultado.php" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required>

        <label for="operador">Operador:</label>

        <select name="operador" required>
            <option value="soma">Somar</option>
            <option value="subtracao">Subtrair</option>
            <option value="multiplicacao">Multiplicar</option>
            <option value="divisao">Dividir</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>