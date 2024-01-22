<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="post" action="login.php">
  <label for="username">Nome de usuário:</label>
  <input type="text" id="username" name="username">
  <br>
  <label for="password">Senha:</label>
  <input type="password" id="password" name="password">
  <br>
  <button type="submit">enviar</button>
</form>

</body>
</html>
<?php
session_start();

// Verifica se os campos de usuário e senha foram enviados pelo formulário
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o login é válido (exemplo fictício)
    if ($username === 'usuario' && $password === 'senha') {
        // Define a sessão como autenticada
        $_SESSION['autenticado'] = true;
        // Redireciona para a página principal
        header('Location: principal.php');
        exit;
    } else {
        echo 'Usuário ou senha inválidos';
    }
}
?>
