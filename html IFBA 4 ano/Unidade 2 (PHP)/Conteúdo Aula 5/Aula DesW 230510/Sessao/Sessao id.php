<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
session_start();

echo "<h2>Bem vindo a página 1</h2><BR>";

if(isset($_SESSION['login'])&&($_SESSION['login']==session_id())){
$_SESSION['visitante']=1;
$_SESSION['hist']=$_SESSION['hist'].', 1';
echo "ID da sessão: ".session_id().'<BR>';
echo "Nome da sessão: ".session_name().'<BR>';

echo "<a href='Sessao.php'>Clique aqui para a página de início</a><BR>
<a href='Sessao id2.php'>Clique aqui para a página 2</a> <BR>
<a href='Sessao id3.php'>Clique aqui para a página 3</a><BR>
<a href='hist.php'> Clique aqui para ver o histórico.</a>";
                             }
else{
echo
header("Location: Sessao.php");
    }
?>

</BODY>
</HTML>
