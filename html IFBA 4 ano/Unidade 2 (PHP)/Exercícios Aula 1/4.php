<html>
<head>
<title>Teste PHP</title>
</head>
<body>

<?php
echo "Enunciado do problema:<br/>";
echo "A árvore A tem 2,5m de diâmetro enquanto a árvore B tem 1,10m de diâmetro.<br/>";
echo "A árvore A cresce 1,5cm por ano e a árvore B cresce 3cm por ano.<br/>";
echo "Quantos anos serão necessários para que a árvore B tenha o mesmo diâmetro da árvore A?<br/><br/>";

echo "Solução:<br/>";
$diametroA = 2.5; // em metros
$diametroB = 1.1; // em metros
$crescimentoA = 1.5; // em centímetros por ano
$crescimentoB = 3; // em centímetros por ano
$anos = 0;

while ($diametroB < $diametroA) {
    $diametroA += ($crescimentoA / 100); // converte centímetros para metros
    $diametroB += ($crescimentoB / 100); // converte centímetros para metros
    $anos++;
}

echo "Serão necessários " . $anos . " anos para que a árvore B tenha o mesmo diâmetro da árvore A.";
?>

</body>
</html>