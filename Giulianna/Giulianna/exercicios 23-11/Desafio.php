<!-- DESAFIO: Desenvolva um script com front e back end, onde o usuário escolhe um número (do 1 ao 10) 
e na tela apareça a tabuada calculada escolhida. Detalhe: o campo de escolha deve ser do tipo “select” 
e as opções dos números devem ser dinâmicas através de um “for” dentro do select. Ou seja nesse exercício,
deve-se misturar o PHP com o HTML, tomem cuidado e lembrem-se das aberturas das Tags necessárias. -->


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Dinâmica</title>
</head>

<body>
    <h2>Escolha um número e veja sua tabuada</h2>

    <form action="Desafio2.php" method="get">
        <label for="numero">Escolha um número:</label>
        <select name="numero" id="numero">

            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <button type="submit">Calcular Tabuada</button>
    </form>

</body>

</html>