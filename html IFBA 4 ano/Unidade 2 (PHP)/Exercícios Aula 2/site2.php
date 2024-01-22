<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisível</title>
</head>
<body>
    <form action="site2.php" method="POST">
    <input type="text" name="n1" placeholder="número 1"><p>
        <button type="submit">enviar</button>
    </form>
<?php

    $x = $_POST['n1'];

    if($x%7==0 && $x%2==0 && $x%10==0){
        echo "divisível por 10, 7 e 2";
    }else if($x%7==0 && $x%2==0){
        echo "divisível por 7 e 2";
    }else if($x%7==0 && $x%10==0){
        echo "divisível por 7 e 10";
    }else if($x%10==0){
        echo "divisível por 10, e 2";
    }else if($x%7==0){
        echo "divisível por 7";
    }else if($x%2==0){
        echo "divisível por 2";
    }else{
        echo "não é divisível por nenhum";
    }
    
?>
</body>
</html>