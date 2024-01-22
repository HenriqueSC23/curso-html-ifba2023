<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês</title>
</head>
<body>
    <form action="site4.php" method="POST">
    <input type="text" name="mes" placeholder="Mês">
    <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php

$m =$_POST['mes'];
if($m<1 || $m>12){
    echo "este número não é um mês";
}else{
    $mes = ["vazio", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

    echo $mes[$m];
}


?>