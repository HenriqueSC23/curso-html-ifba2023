<HTML>
<HEAD>
 <TITLE>Sess�o 3</TITLE>
</HEAD>
<BODY>
<?php
session_start();
if($_SESSION['login']!=session_id()){
header("location:Sessao.php");
exit();
                             }
$_SESSION['visitante']=3;
echo '<h2>Aqui � a p�gina tr�s</h2><BR><BR><BR>';
echo "ID da sess�o: ".session_id();
echo "<BR> Nome da sess�o: ".session_name()."<BR><BR>";
$_SESSION['hist']=$_SESSION['hist'].', 3';
?>
<a href='Sessao.php'>Clique aqui para a p�gina de in�cio</a><BR>
<a href='Sessao id.php'>Clique aqui para a p�gina 1</a> <BR>
<a href='Sessao id2.php'>Clique aqui para a p�gina 2</a><BR>
<a href='hist.php'> Clique aqui para ver o hist�rico.</a>
</BODY>
</HTML>
