<!DOCTYPE html>
<html>
<head>
  <title>Conexão com Banco de Dados</title>
</head>
<body>
  <h1>Conexão com Banco de Dados</h1>
  <form method="POST" action="formulario.php">
    <textarea name="text" rows="5" cols="50"></textarea>
    <br>
    <input type="submit" value="OK">
  </form><br>
  <h1>Conexão com Banco de Dados - Resultado</h1>
  <?php
       $conexao = mysqli_connect("127.0.0.1", "root", "");
       $li = "USE test";
       $query = mysqli_query($conexao, $li);  
       if(isset($_POST['text'])){
        $li = $_POST['text'];
        $query = mysqli_query($conexao, $li);
        while($linha = mysqli_fetch_assoc($query)){
          foreach($linha as $valor)
          echo $valor;
        }
       }
       
  ?>
</body>
</html>
