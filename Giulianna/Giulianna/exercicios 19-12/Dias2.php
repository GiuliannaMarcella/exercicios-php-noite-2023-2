<!-- echo "<br><br> Diferença entre datas";
echo '<br>';

$dataHoje = time();

$difDatas = ($milesegundos - $dataHoje);

echo $dias = $difDatas;

echo "<br>".$diasData = abs(floor($difDatas / (60 * 60 * 24)));

?> -->
<?php 
$data = $_GET['data'];
$dataNasc = strtotime($data);
$dataHoje = time();
$difData = $dataNasc - $dataHoje;
// echo $difData;
$resultado = ($difData / (60*60*24));
echo $resultado;



?>