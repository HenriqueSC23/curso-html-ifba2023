<html>
<head>
<title>IME-USP, Verão 2007, PHP e MySQL - Exercício 3</title>
</head>
<body text="#660099" link="#3399CC" alink="#FF6600" vlink="#66CC00">
<?php
if (sizeof($_POST) == 0) {
echo '<form name="cadastro" action=" Formulario com checagem.php" method="POST">
Nome<br><input type="text" name="nome" size="25" value=""><br><br>
E-mail<br><input type="text" name="email" size="25" value=""><br><br>
Profissão<br><input type="text" name="profissao" size="25" value=""><br><br>
Escolaridade<br><select name="escolaridade"><option value="">-- selecione a
sua escolaridade --</option><option value="Ensino Fundamental">Ensino
Fundamental</option><option value="Ensino Médio">Ensino Médio</option><option
value="Ensino Superior">Ensino Superior</option><option
value="Pós-graduação">Pós-graduação</option></select><br><br>
Sexo<br><input type="radio" name="sexo" value="masculino">Masculino<br><input
type="radio" name="sexo" value="feminino">Feminino<br><br>
Data de nascimento<br><input type="text" name="dia" size="5" maxlength="2"
value=""> / <input type="text" name="mes" size="5" maxlength="2" value=""> /
<input type="text" name="ano" size="10" value="" maxlength="2"><br><br>
<input type="submit" value="Enviar dados!">
</form>';
}
else {
# processamento do formulário
# validação
print '<h1>Validação</h1>';
$erros = 0;
if (strlen($_REQUEST['nome']) == 0) {
print 'Nome em branco!<br>';
$erros++;
}
if (strlen($_REQUEST['email']) == 0) {
print 'E-mail em branco!<br>';
$erros++;
}
if (strlen($_REQUEST['profissao']) == 0) {
print 'Profissão em branco!<br>';
$erros++;
}
if (strlen($_REQUEST['escolaridade']) == 0) {
print 'Escolaridade não informada!<br>';
$erros++;
}
if (strlen($_REQUEST['sexo']) == 0) {
print 'Sexo inexistente!<br>';
$erros++;
}
if (!@checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['ano'])) {
print 'Data inválida!';
$erros++;
}
if ($erros > 0)
print '<p>Foram encontrados '.$erros.' erro(s).</p>';
# dados informados
print '<h1>Dados informados</h1><u>Nome</u>:
'.$_REQUEST['nome'].'<br><u>E-mail</u>:
'.$_REQUEST['email'].'<br><u>Profissão</u>:
'.$_REQUEST['profissao'].'<br><u>Escolaridade</u>:
'.$_REQUEST['escolaridade'].'<br><u>Sexo</u>: '.$_REQUEST['sexo'].'<br><u>Data de
nascimento</u>: '.$_REQUEST['dia'].'/'.$_REQUEST['mes'].'/'.$_REQUEST['ano'].'<br>';
# datas
print '<h1>Datas</h1><p>O formulário foi processado em: '.date ('d.m.Y
H:i:s').'.</p>';
$timeatual = time();
$timeniver = mktime(0,0,0,$_REQUEST['mes'],$_REQUEST['dia'],date('Y'));
if ($timeniver < $timeatual)
$timeniver = mktime(0,0,0,$_REQUEST['mes'],$_REQUEST['dia'],date('Y')+1);
$timefalta = $timeniver - $timeatual; # tempo, em segundos, para o próximo aniversário
$diasfalta = $timefalta / (60*60*24);# tempo, em dias, para o próximo aniversário
print '<p>Faltam '.round($diasfalta,0).' para o seu aniversário!</p>';
}
?>
</body>
</html>
