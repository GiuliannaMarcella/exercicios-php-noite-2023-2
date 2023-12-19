<?php
// Array com os valores para acessar depois.
$cardapio = array(
    100 => array('produto' => 'Cachorro Quente', 'preco' => 12.70),
    101 => array('produto' => 'Bauru Simples', 'preco' => 4.00),
    102 => array('produto' => 'Bauru com Ovo', 'preco' => 4.60),
    103 => array('produto' => 'Hambúrguer', 'preco' => 15.00),
    104 => array('produto' => 'Cheeseburger', 'preco' => 13.50),
    05 => array('produto' => 'Refrigerante', 'preco' => 4.50)
);

// Pegar o valor da url
if (isset($_GET['codigo'])) {
    $codigo = intval($_GET['codigo']);

    switch ($codigo) {
        case 100:
        case 101:
        case 102:
        case 103:
        case 104:
        case 05:

            $produto = $cardapio[$codigo]['produto'];
            $preco = $cardapio[$codigo]['preco'];
            echo "<p>Produto: $produto</p>";
            echo "<p>Preço: R$ $preco</p>";
            break;
        default:

            echo "<p>Produto não encontrado.</p>";
            break;
    }
}
?>