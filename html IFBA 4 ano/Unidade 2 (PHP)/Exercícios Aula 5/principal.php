<?php
session_start();

// Verifica se a sessão está autenticada
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Página principal</title>
</head>
<body>
<a href="login.php" name="link">sair</a>
  <h1>Bem-vindo à página principal</h1>
  <p>Escolha uma das opções abaixo:</p>
  <ul>
    <li><a href="pagina1.php" style="background-color: #ff0000;">Página 1</a></li>
    <li><a href="pagina2.php" style="background-color: #00ff00;">Página 2</a></li>
    <li><a href="pagina3.php" style="background-color: #0000ff;">Página 3</a></li>
    <li><a href="pagina4.php" style="background-color: #ffff00;">Página 4</a></li>
  </ul>
 </body>
 </html>
