
<HTML>
<HEAD>
 <TITLE>Histórico</TITLE>
</HEAD>
<BODY>
<h1>Página do histórico de navegação.</h1>
<?php
session_start();
echo 'Páginas navegadas pelo usuário nesta sessão: ';
echo $_SESSION['hist'];


?>
</BODY>
</HTML>
