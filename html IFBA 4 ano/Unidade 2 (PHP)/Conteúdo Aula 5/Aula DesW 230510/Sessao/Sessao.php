<?php
session_start();
?>
<html><head><title>Agradecimentos</title></head>
<body>
<h2>Bem vindo ao centro de hospitalidade</h2>

<?php
if(!isset($_SESSION['visitante'])){ //Verifica se existe a posi��o 'visitante' no vetor SESSION.
echo "Voc� deve ter acabado de chegar. Bem vindo!<BR>";
$_SESSION['visitante']=0;
$_SESSION['login']=session_id();  //Identificador da sess�o atual.
$_SESSION['hist']='0';
                                    }
else{
$visita=$_SESSION['visitante']+1;
echo "De volta? Esta � a ".$visita." visita.<BR>";
$_SESSION['visitante']=$visita;
@$_SESSION['hist']=$_SESSION['hist'].'0';                                        }
$self_url=$_SERVER['PHP_SELF'];//armazena o caminho deste arquivo.
$session_id=session_id();

$href=$self_url;
echo "->vari�vel self_url.".$href;
echo "<BR>ID da sess�o: ".$session_id;
echo "<BR><a href=\"$href\">Visite-nos novamente. </a> <BR><BR>";
?>

<a href='Sessao id.php'>Clique aqui para a p�gina 1</a> <BR>
<a href='Sessao id2.php'>Clique aqui para a p�gina 2</a> <BR>
<a href='Sessao id3.php'>Clique aqui para a p�gina 3</a> <BR>
<a href='hist.php'> Clique aqui para ver o hist�rico.</a>
</body></html>
