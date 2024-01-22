<?
session_unset();
?>
<HTML>
<HEAD>
 <TITLE>Please Log In</TITLE>
</HEAD>
<BODY>

<?php include "header.php" ;
 if(isset($_POST['submit']))
 echo '<h2> Usu�rio ou senha inv�lido! </h2>';
 ?>
 
<FORM METHOD='POST' ACTION='Cookie.php'>
<p> Digite seu nome de usu�rio:
<input type='text' name='user'>
<p>
Digite sua senha:
<input type='password' name='pass'>
<p>
<input type='submit' name='submit' value='OK'>
</p>
</FORM>
</BODY>
</HTML>
