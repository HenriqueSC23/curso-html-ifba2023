<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <form action="site1.php" method="POST">
        <input type="text" name="n1" placeholder="número 1"><p>
        <input type="text" name="n2" placeholder="número 2"><p>
        <button type="submit">enviar</button>
    </form>
<?php

   
    $x = $_POST['n1'] + $_POST['n2'];

    if($x>20){
        $x= $x + 8;
    } else if($x<=20){
        $x= $x - 5;
    }
    echo $x;
?>
</body>
</html>