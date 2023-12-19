<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
</head>
<body>
    <h2>Resultado da Verificação</h2>
   <?php
    function verificarData($ano, $mes, $dia) {
        $dataAtual = getdate();
        $anoAtual = $dataAtual['year'];
       if ($ano >= 1900 && $ano <= $anoAtual) {
            if (checkdate($mes, $dia, $ano)) {
                return true;
            } else {
                echo "<p>Dia inválido para o mês e ano fornecidos.</p>";
            }
        } else {
            echo "<p>Ano fornecido não está no intervalo válido (1900 até o ano atual).</p>";
        }
       return false;
    }
   if (isset($_GET['ano'], $_GET['mes'], $_GET['dia'])) {
        $ano = intval($_GET['ano']);
        $mes = intval($_GET['mes']);
        $dia = intval($_GET['dia']);
       $dataValida = verificarData($ano, $mes, $dia);
       if ($dataValida) {
            echo "<p>A data fornecida é válida.</p>";
        } else {
            echo "<p>A data fornecida não é válida.</p>";
        }
    } else {
        echo "<p>Por favor, forneça uma data válida.</p>";
    }
    ?>
</body>
</html>
