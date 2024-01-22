
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="site3.php" method="POST">
    <input type="text" name="nome" placeholder="Nome" required><p>
    <input type="text" name="idade" placeholder="Idade" required><p>
    Sexo <br>
    Feminino<input name="sexo" type="radio" value="feminino">Masculino<input name="sexo" type="radio" value="masculino"><p>
    <button type="submit">enviar</button>
    </form>
</body>
</html>

<?php
/*Um formulário que  com nome, sexo e idade de uma pessoa.
Se a pessoa for do sexo feminino e tiver menos que 25 anos,
imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir 
nome e a mensagem: NÃO ACEITA.*/
$nome = $_POST['nome'];

if ($_POST['sexo'] == "feminino") {
    if($_POST['idade']<25){
        echo "$nome aceita";
    }else{
        echo "reprovada";
    }
} else {
    echo "reprovada";
}
?>