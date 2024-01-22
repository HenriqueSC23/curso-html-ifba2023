<html>
<head>
<title>Teste PHP</title>
</head>
<body>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Tabuada do " . $i . ":<br/>";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo $i . " x " . $j . " = " . $resultado . "<br/>";
    }
    echo "<br/>";
}
?>
</body>
</html>