<html>
<head>
<title></title>
</head>
<body>
<h2>Upload Simples</h2><br>
<form name="upload" action="upload2.php" method="post" enctype="multipart/form-data">
<input type="file" name="arquivo" size="60">
<br>
<input type="submit" name="enviar" value="Upload!">
</form>


[ P�GINA PHP - upload.php ]

<?php
$destino = 'C:\Program Files (x86)\EasyPHP-5.3.3.1\tmp';

//if(!$_FILES){
//	echo 'Nenhum arquivo enviado!';
//}else{
	$file_name = $_FILES['arquivo']['name'];  echo "Nome:".$file_name;
	$file_type = $_FILES['arquivo']['type'];  echo "<BR>Tipo:".$file_type;
	$file_size = $_FILES['arquivo']['size'];  echo "<BR>Tamanho:".$file_size;
	$file_tmp_name = $_FILES['arquivo']['tmp_name'];          echo "<BR>Caminho:".$file_tmp_name;
	$error = $_FILES['arquivo']['error'];     echo "<br>Erro:".$error;
//}

switch ($error){
	case 0:
		break;
	case 1:
		echo 'O tamanho do arquivo é maior que o definido nas configurações do PHP!';
		break;
	case 2:
		echo 'O tamanho do arquivo é maior do que o permitido!';
		break;
	case 3:
		echo 'O upload não foi concluído!';
		break;
	case 4:
		echo 'O upload não foi feito!';
		break;
}

if($error == 0){
	if(!is_uploaded_file($file_tmp_name)){
		echo 'Erro ao processar arquivo!';
	}else{
		if(!move_uploaded_file($file_tmp_name,$file_name)){
			echo 'Não foi possível salvar o arquivo!';
		}else{
			echo 'Processo conclu�do com sucesso!<br>';
			echo "Nome do arquivo: $file_name<br>";
			echo "Tipo de arquivo: $file_type<br>";
			echo "Tamanho em byte: $file_size<br>";
		}
	}
}
?>
</BODY>
</HTML>
