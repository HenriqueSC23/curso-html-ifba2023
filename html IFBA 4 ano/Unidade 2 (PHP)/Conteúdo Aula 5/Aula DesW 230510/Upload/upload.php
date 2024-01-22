<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.16" />
</head>

<body>

<form enctype="multipart/form-data" action="upload.php" method="post">
	<!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
	<label for="file">Arquivo a ser enviado:</label>
	<input id="file" name="arquivo" type="file" />
	<input type="submit" value="Enviar" />    <BR>

</form>

<?php

if (isset ($_FILES['arquivo']['name'])){
$diretorio=$_FILES['arquivo']['name'];

$uploaddir='Fotos/';

$arquivo = @$uploaddir.$_FILES['arquivo']['name'];

if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$arquivo)){
print "<BR>O arquivo ". $_FILES['arquivo']['name']." foi gravado com sucesso na pasta: $uploaddir.";
                                                            }
else
{
print "Erro. O arquivo não foi enviado";
}                                         }
if(isset($_FILES['arquivo']['name'])) $nome=$_FILES['arquivo']['name'];

?>


</body>
</html>
