<HTML>
<HEAD>
 <TITLE>Sess�o 2</TITLE>
</HEAD>
<BODY>
<?php
session_start();
if($_SESSION['login']==session_id()) {
echo'<h2>Bem vindo a p�gina 2</h2><BR>';

echo "Nome da sess�o: ".session_name();
echo "<BR>ID da sess�o: ".session_id().'<BR>';
$_SESSION['visitante']=2;
$_SESSION['hist']=$_SESSION['hist'].',2';
                                      }
else {
header("Location:Sessao.php");
      }
?>
<a href='Sessao.php'>Clique aqui para a p�gina de in�cio</a><BR>
<a href='Sessao id.php'>Clique aqui para a p�gina 1</a> <BR>
<a href='Sessao id3.php'>Clique aqui para a p�gina 3</a>  <BR>
<a href='hist.php'> Clique aqui para ver o hist�rico.</a>
</BODY>
</HTML>
