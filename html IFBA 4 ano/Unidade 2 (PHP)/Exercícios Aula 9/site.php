<?php
ob_start();
include('login.php');
ob_end_clean();
$usuario = $_GET['usuario'];
$li = "SELECT foto from contas WHERE nome = '".$usuario."'";
// echo $li;
$query = mysqli_query($conexao, $li);
if($query){
    $row = mysqli_fetch_assoc($query);
    foreach($row as $value){
    // echo $value;  
    // echo $row;
    }
}

    // echo "O nome enviado foi: " . $usuario;
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $nome = $_POST['usuario'];
//     echo "O nome enviado foi: " . $nome;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UM SITE</h1>
    <img src="Fotos/<?php echo $value; ?>" alt="">

</body>
</html>