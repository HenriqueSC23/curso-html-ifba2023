<HTML>
<HEAD>
 <TITLE>Sessão 2</TITLE>
</HEAD>
<BODY>
<?php
session_start();
if($_SESSION['login']==session_id()) {
echo'<h2>Bem vindo a página 2</h2><BR>';

echo "Nome da sessão: ".session_name();
echo "<BR>ID da sessão: ".session_id().'<BR>';
$_SESSION['visitante']=2;
$_SESSION['hist']=$_SESSION['hist'].',2';
                                      }
else {
header("Location:Sessao.php");
      }
?>
<a href='Sessao.php'>Clique aqui para a página de início</a><BR>
<a href='Sessao id.php'>Clique aqui para a página 1</a> <BR>
<a href='Sessao id3.php'>Clique aqui para a página 3</a>  <BR>
<a href='hist.php'> Clique aqui para ver o histórico.</a>
</BODY>
</HTML>
