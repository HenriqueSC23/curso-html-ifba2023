<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor=red>
<?php
include "header.php" ;
$usu=$_COOKIE["usuario"];

if($usu){
  echo "<h2>O usu�rio  $usu est� conectado !</h2>";
        }
else{
header("Location:login.php");
    }
?>
</BODY>
</HTML>
