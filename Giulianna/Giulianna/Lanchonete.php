<!-- 5 - O cardápio da lanchonete é dado pela tabela abaixo,
insira na tela o código do produto, e retorno o produto e seu valor -->
<!-- Código Produto Preço Unitário (R$)
100 Cachorro quente R$ 12,70
101 Bauru Simples R$ 4,00
102 Bauru com ovo R$ 4,60
103 Hambúrguer R$ 15,00
104 Cheeseburger R$ 13,50
05 Refrigerante R$ 4,50 -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <h2>Pesquisa de produtos</h2>
    <form action="LanchoneteResultado.php" method="get">
        <label for="codigo">Código do Produto:</label>
        <input type="text" name="codigo" required>
        <button type="submit">Consultar</button>
    </form>
</body>
</html>
