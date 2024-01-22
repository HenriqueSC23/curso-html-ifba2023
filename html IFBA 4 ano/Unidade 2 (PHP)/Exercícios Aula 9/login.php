<?php
$conexao = mysqli_connect("127.0.0.1", "root", "");
$li = "USE Usuario";
$query = mysqli_query($conexao, $li);  
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if(isset($_POST['enviar'])){
$li = "SELECT * from contas WHERE nome = '$usuario' and senha = '$senha' ";
$query = mysqli_query($conexao, $li);
$quantidade = $query->num_rows;
    if($quantidade == 1){
        header ("Location: site.php?usuario=" . urlencode($usuario));
        echo "cu";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário"><br>
        <input type="text" name="senha" placeholder="Senha"><br>
        <button type="submit" name="enviar">Login</button>
    </form>
</body>
</html>