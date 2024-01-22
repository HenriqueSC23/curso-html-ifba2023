<?php
$conexao = mysqli_connect("127.0.0.1", "root", "");
$li = "USE test";
$query = mysqli_query($conexao, $li); 

if (@$_POST['botao'] == "") {
    echo '<form method="POST" action="dicionario.php">
    <input type="text" name="palavra" placeholder="Palavra"><br>
    <input type="text" name="significado" placeholder="Significado"><br>
    <input type="submit" name="botao" value="cadastrar"><br>
    <input type="submit" name="botao" value="pesquisar"><br>
    <input type="submit" name="botao" value="excluir"><br>
    <input type="submit" name="botao" value="alterar">
    </form>';
} else if ($_POST['botao'] == "cadastrar") {
    $palavra = $_POST['palavra'];
    $significado = $_POST['significado']; 
    $li = "INSERT INTO dicionario(palavra, significado) VALUES('$palavra', '$significado')";
    $query = mysqli_query($conexao, $li);
    
    echo '<form method="POST" action="dicionario.php">
    <input type="text" name="palavra" placeholder="Palavra"><br>
    <input type="text" name="significado" placeholder="Significado"><br>
    <input type="submit" name="botao" value="cadastrar"><br>
    <input type="submit" name="botao" value="pesquisar"><br>
    <input type="submit" name="botao" value="excluir"><br>
    <input type="submit" name="botao" value="alterar">
    </form>';
} else if ($_POST['botao'] == "pesquisar") {
    $palavra = $_POST['palavra'];
    $li = "SELECT palavra, significado FROM dicionario WHERE palavra = '$palavra'";
    $query = mysqli_query($conexao, $li);
    
    while ($linha = mysqli_fetch_assoc($query)) {
        $palavraEncontrada = $linha['palavra'];
        $significadoEncontrado = $linha['significado'];
    }

    echo '<form method="POST" action="dicionario.php">
    <input type="text" name="palavra" placeholder="Palavra" value="'.@$palavraEncontrada.'"><br>
    <input type="text" name="significado" placeholder="Significado" value="'.@$significadoEncontrado.'"><br>
    <input type="submit" name="botao" value="cadastrar"><br>
    <input type="submit" name="botao" value="pesquisar"><br>
    <input type="submit" name="botao" value="excluir"><br>
    <input type="submit" name="botao" value="alterar">
    </form>';

    echo "Palavra: ".@$palavraEncontrada."<br>";
    echo "Significado: ".@$significadoEncontrado. "<br>";
} else if ($_POST['botao'] == "excluir") {
    $palavra = $_POST['palavra'];
    $li = "DELETE FROM dicionario WHERE palavra = '$palavra'";
    $query = mysqli_query($conexao, $li);

    echo '<form method="POST" action="dicionario.php">
    <input type="text" name="palavra" placeholder="Palavra" value="'.@$palavraEncontrada.'"><br>
    <input type="text" name="significado" placeholder="Significado" value="'.@$significadoEncontrado.'"><br>
    <input type="submit" name="botao" value="cadastrar"><br>
    <input type="submit" name="botao" value="pesquisar"><br>
    <input type="submit" name="botao" value="excluir"><br>
    <input type="submit" name="botao" value="alterar">
    </form>';
} else if ($_POST['botao'] == "alterar") {
    $palavra = $_POST['palavra'];
    $significado = $_POST['significado']; 
    $li = "UPDATE dicionario SET significado = '$significado' where palavra = '$palavra'";
    $query = mysqli_query($conexao, $li);

    echo '<form method="POST" action="dicionario.php">
    <input type="text" name="palavra" placeholder="Palavra" value="'.@$palavraEncontrada.'"><br>
    <input type="text" name="significado" placeholder="Significado" value="'.@$significadoEncontrado.'"><br>
    <input type="submit" name="botao" value="cadastrar"><br>
    <input type="submit" name="botao" value="pesquisar"><br>
    <input type="submit" name="botao" value="excluir"><br>
    <input type="submit" name="botao" value="alterar">
    </form>';
}
?>
