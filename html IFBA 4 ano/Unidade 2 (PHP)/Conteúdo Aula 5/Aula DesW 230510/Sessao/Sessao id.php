<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
session_start();

echo "<h2>Bem vindo a p�gina 1</h2><BR>";

if(isset($_SESSION['login'])&&($_SESSION['login']==session_id())){
$_SESSION['visitante']=1;
$_SESSION['hist']=$_SESSION['hist'].', 1';
echo "ID da sess�o: ".session_id().'<BR>';
echo "Nome da sess�o: ".session_name().'<BR>';

echo "<a href='Sessao.php'>Clique aqui para a p�gina de in�cio</a><BR>
<a href='Sessao id2.php'>Clique aqui para a p�gina 2</a> <BR>
<a href='Sessao id3.php'>Clique aqui para a p�gina 3</a><BR>
<a href='hist.php'> Clique aqui para ver o hist�rico.</a>";
                             }
else{
echo
header("Location: Sessao.php");
    }
?>

</BODY>
</HTML>
