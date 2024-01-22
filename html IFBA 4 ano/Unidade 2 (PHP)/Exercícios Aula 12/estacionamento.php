<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estacionamento</title>
</head>
<body>
<form action="estacionamento.php" method="post">
<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "test");
$li = "CREATE TABLE IF NOT EXISTS estacionamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(255),
    placa VARCHAR(20),
    data_entrada DATE,
    hora_entrada TIME,
    data_saida DATE,
    hora_saida TIME
)";
$query = mysqli_query($conexao, $li);      

$sql="Create table if not exists precos (Descrição varchar(50), Valor integer)";
$tabela=mysqli_query($conexao, $sql);
$sql="Insert into precos values('Diaria',15), ('Hora',2)";
$tabela=mysqli_query($conexao, $sql);


if(@$_POST['entrar'] == 0){
    echo '
    <h1>estacionamento</h1>
    <input type="text" name="modelo" placeholder="Modelo"><br>
    <input type="text" name="placa" placeholder="placa"><br>
    Data de entrada<br>
    <input type="date" name="dEntrada"><br>
    Hora entrada<br>
    <input type="time" name="hEntrada"><br>
    <input type="submit" name="entrar" value="entrar"><br>
    Data de saída<br>
    <input type="date" name="dSaida"><br>
    Hora saída<br>
    <input type="time" name="hSaida"><br>
    <input type="submit" name="entrar" value="sair"><br>
    <input type="submit" name="entrar" value="listar"><br>
    <input type="submit" name="entrar" value="buscar">';
} else if(@$_POST['entrar'] == 'entrar'){
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $dEntrada = $_POST['dEntrada'];
    $hEntrada = $_POST['hEntrada'];
    $dSaida = $_POST['dSaida'];
    $hSaida = $_POST['hSaida'];

    echo '
    <h1>estacionamento</h1>
    <input type="text" name="modelo" placeholder="Modelo"><br>
    <input type="text" name="placa" placeholder="placa"><br>
    Data de entrada<br>
    <input type="date" name="dEntrada"><br>
    Hora entrada<br>
    <input type="time" name="hEntrada"><br>
    <input type="submit" name="entrar" value="entrar"><br>
    Data de saída<br>
    <input type="date" name="dSaida"><br>
    Hora saída<br>
    <input type="time" name="hSaida"><br>
    <input type="submit" name="entrar" value="sair"><br>
    <input type="submit" name="entrar" value="listar"><br>
    <input type="submit" name="entrar" value="buscar">';

    $li = "INSERT INTO estacionamento(modelo,placa,data_entrada,hora_entrada,data_saida,hora_saida) 
    VALUES('$modelo','$placa','$dEntrada','$hEntrada',NULL,NULL)";
    $query = mysqli_query($conexao, $li); 
} else if(@$_POST['entrar'] == 'listar'){
    $lista = "SELECT * FROM estacionamento WHERE data_saida IS NULL";
    $listar = mysqli_query($conexao, $lista); 
    
    echo '
    <h1>estacionamento</h1>
    <input type="text" name="modelo" placeholder="Modelo"><br>
    <input type="text" name="placa" placeholder="placa"><br>
    Data de entrada<br>
    <input type="date" name="dEntrada"><br>
    Hora entrada<br>
    <input type="time" name="hEntrada"><br>
    <input type="submit" name="entrar" value="entrar"><br>
    Data de saída<br>
    <input type="date" name="dSaida"><br>
    Hora saída<br>
    <input type="time" name="hSaida"><br>
    <input type="submit" name="entrar" value="sair"><br>
    <input type="submit" name="entrar" value="listar"><br>
    <input type="submit" name="entrar" value="buscar">';

    echo "<h2>Carros Estacionados</h2>";
    
    while ($row = mysqli_fetch_assoc($listar)) {
        $modelo = $row['modelo'];
        $placa = $row['placa'];
        $data_entrada = $row['data_entrada'];
        $hora_entrada = $row['hora_entrada'];
        
        echo '<input type="radio" name="carro" value='.$placa.'> Modelo: '.$modelo.'<br>placa: '.$placa.'<br>Data de entrada: '.$data_entrada.'<br>Hora de entrada: '.$hora_entrada.'<br><br>';
    }
}else if(@$_POST['entrar'] == 'buscar'){
    $radio = $_POST['carro'];
    $li = "SELECT * FROM estacionamento WHERE placa = '$radio'";
    $query = mysqli_query($conexao, $li);
    while ($row = mysqli_fetch_assoc($query)) {
        $modelo = $row['modelo'];
        $placa = $row['placa'];
        $data_entrada = $row['data_entrada'];
        $hora_entrada = $row['hora_entrada'];
        
        echo '
        <h1>estacionamento</h1>
        <input type="text" name="modelo" placeholder="Modelo" value='.$modelo.'><br>
        <input type="text" name="placa" placeholder="placa" value='.$placa.'><br>
        Data de entrada<br>
        <input type="date" name="dEntrada" value='.$data_entrada.'><br>
        Hora entrada<br>
        <input type="time" name="hEntrada" value='.$hora_entrada.'><br>
        <input type="submit" name="entrar" value="entrar"><br>
        Data de saída<br>
        <input type="date" name="dSaida"><br>
        Hora saída<br>
        <input type="time" name="hSaida"><br>
        <input type="submit" name="entrar" value="sair"><br>
        <input type="submit" name="entrar" value="listar"><br>
        <input type="submit" name="entrar" value="buscar">';
    }
}else if(@$_POST['entrar'] == 'sair'){
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $dEntrada = $_POST['dEntrada'];
    $hEntrada = $_POST['hEntrada'];
    $dSaida = $_POST['dSaida'];
    $hSaida = $_POST['hSaida'];
    
    $query=mysqli_query($conexao,'Update Estacionamento set data_saida="'.$dSaida.'", hora_saida="'.$hSaida.'" where placa="'.$placa.'"')or die("Erro na consulta".mysql_error());
    
    if($query) echo("<h1>Saída de Veículo</h1>
    <h2>Ve�culo: $modelo <BR>Entrada: $dEntrada.<BR> Saida: $dSaida.<BR>");
    $intervalo=mysqli_query($conexao,'select datediff(data_saida,data_entrada)as intervalo from Estacionamento where Placa="'.$placa.'"')or die("Erro na consulta".mysql_error());
    $in=mysqli_fetch_assoc($intervalo); //acima o banco faz o c�lculo do intervalo de tempo.
    foreach($in as $val){
    if($val==0){ // $val=0 significa que ficou menos de um dia. Cobrar por hora.
    $query=mysqli_query($conexao,'select hora_entrada, hora_saida, timediff(hora_saida, hora_entrada) as intervalo from Estacionamento where Placa="'.$placa.'"');
    $total=mysqli_fetch_assoc($query);
    extract($total);
    echo 'Entrada:'.$hEntrada.' Sa�da:'.$hSaida.'Tempo de perman�ncia: '.$intervalo.' horas.';
    $query1=mysqli_query($conexao,'select Valor from precos where Descrição="Hora"');
    $Horas=mysqli_fetch_assoc($query1);
    foreach($Horas as $total){
    $total=(int)($total); $intervalo=(int)$intervalo;
    echo ' Total a pagar:'.(($intervalo)*$total);
                        }
    $sair = "DELETE FROM estacionamento WHERE placa = '$placa'";
    $query = mysqli_query($conexao, $sair);
}
    }
}



?>
</form>
</body>
</html>

