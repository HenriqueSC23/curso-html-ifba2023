
<HTML>
<HEAD>
 <TITLE>Hist�rico</TITLE>
</HEAD>
<BODY>
<h1>P�gina do hist�rico de navega��o.</h1>
<?php
session_start();
echo 'P�ginas navegadas pelo usu�rio nesta sess�o: ';
echo $_SESSION['hist'];


?>
</BODY>
</HTML>
