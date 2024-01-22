<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Cadastro de Usuários</h1>
    <form action="site1.php" method="post">
        <input type="text" placeholder="Nome" name="nome"><br>
        <input type="text" placeholder="Logradouro" name="log"><br>
        <input type="text" placeholder="Bairro" name="bairro"><br>
        <input type="text" placeholder="Cidade" name="cidade"><br>
        <input type="text" placeholder="Complementos" name="comp"><br>
        <input type="text" placeholder="CEP" name="cep"><br>
        <input type="text" placeholder="Identidade" name="identidade"><br>
        <input type="text" placeholder="CPF" name="cpf"><br>
        <label for="">Data de Nascimento</label><br>
        <input type="date" name="data"><br>
        Primeiro Grau<input type="radio" name="escolaridade" value="Primeiro Grau"><br>
        Segundo Grau<input type="radio" name="escolaridade" value="Segundo Grau"><br>
        Terceiro Grau<input type="radio" name="escolaridade" value="Terceiro Grau"><br>
        Pós Graduação<input type="radio" name="escolaridade" value="Pós Graduação"><br>
        Mestrado<input type="radio" name="escolaridade" value="Mestrado"><br>
        Doutorado<input type="radio" name="escolaridade" value="Doutorado"><br>
        <input type="tel" placeholder="Telefone" name="tel"><br>
        <input type="email" placeholder="Email" name="email"><br>
        Observações <br>
        <textarea name="obs" id="1" cols="30" rows="10"></textarea> <br>
        <button type="submit" name="enviar">Cadastre-se</button>
        <button type="reset">Limpar</button>
        
    </form>
    <?php
        $campo = 0;

        if(isset($_POST)){
            if(empty($_POST['nome'])){
                echo "O campo NOME não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['log'])){
                echo "O campo LOGRADOURO não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['bairro'])){
                echo "O campo BAIRRO não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['cidade'])){
                echo "O campo CIDADE não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['comp'])){
                echo "O campo COMPLEMENTOS não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['cep'])){
                echo "O campo CEP não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['identidade'])){
                echo "O campo IDENTIDADE não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['cpf'])){
                echo "O campo CPF não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['data'])){
                echo "O campo DATA não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['escolaridade'])){
                echo "O campo ESCOLARIDADE não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['tel'])){
                echo "O campo TELEFONE não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['email'])){
                echo "O campo EMAIL não foi preenchido <br>";
                $campo = false;
            }
            if(empty($_POST['obs'])){
                echo "O campo OBSERVAÇÕES não foi preenchido <br>";
                $campo = false;
            }
            if($campo==true){
                print_r($_POST);
            }
        }
    ?>
        
</body>
</html>