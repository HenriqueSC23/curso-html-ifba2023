<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    echo "O nome enviado foi: " . $nome;
  }
?>