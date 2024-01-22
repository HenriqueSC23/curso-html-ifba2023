<html>
<head>
<title>Teste PHP</title>
</head>
<body>
<?php
include "header.php" ;
if(isset($_POST['user'])){
$usuario=$_POST['user'];
$senha=$_POST['pass'];
                         }
if (($usuario=='fabio')&&($senha=='a')){
setcookie('usuario',$usuario,time()+600);

echo "Bem vindo $usuario <BR>";
echo "<a href='principal.php'>Principal</a>";
                                        }
else{
header("Location:login.php");
    }
//session_id('fabio');
?>
</body>
</html>
