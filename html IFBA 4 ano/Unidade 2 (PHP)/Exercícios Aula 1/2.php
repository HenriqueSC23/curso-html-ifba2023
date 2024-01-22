<html>
<head>
<title>Teste PHP</title>
</head>
<body>

<?php
for ($i = 1; $i <= 200; $i++) {
    echo $i . " ";
    if (($i+1) % 20 == 1) {
        echo "<br/>";
    }
}
?>
</body>
</html>