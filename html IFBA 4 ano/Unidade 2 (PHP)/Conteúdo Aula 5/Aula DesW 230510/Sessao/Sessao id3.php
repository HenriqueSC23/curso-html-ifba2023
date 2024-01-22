<HTML>
<HEAD>
 <TITLE>Sessão 3</TITLE>
</HEAD>
<BODY>
<?php
session_start();
if($_SESSION['login']!=session_id()){
header("location:Sessao.php");
exit();
                             }
$_SESSION['visitante']=3;
echo '<h2>Aqui é a página três</h2><BR><BR><BR>';
echo "ID da sessão: ".session_id();
echo "<BR> Nome da sessão: ".session_name()."<BR><BR>";
$_SESSION['hist']=$_SESSION['hist'].', 3';
?>
<a href='Sessao.php'>Clique aqui para a página de início</a><BR>
<a href='Sessao id.php'>Clique aqui para a página 1</a> <BR>
<a href='Sessao id2.php'>Clique aqui para a página 2</a><BR>
<a href='hist.php'> Clique aqui para ver o histórico.</a>
</BODY>
</HTML>
