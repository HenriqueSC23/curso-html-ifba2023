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
  <input type="submit" value="Entrar">
</form>

</body>
</html>
<?php
// verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // verificar se o nome de usuário e a senha são válidos
  if ($_POST['username'] === 'usuario' && $_POST['password'] === 'senha') {
    // definir um cookie para indicar que o usuário está logado
    setcookie('logado', 'true', time() + 3600);
    // redirecionar para a página principal
    header('Location: principal.php');
    exit;
  } else {
    // exibir uma mensagem de erro caso o nome de usuário ou senha estejam incorretos
    $erro = 'Nome de usuário ou senha incorretos.';
  }
}
?>
