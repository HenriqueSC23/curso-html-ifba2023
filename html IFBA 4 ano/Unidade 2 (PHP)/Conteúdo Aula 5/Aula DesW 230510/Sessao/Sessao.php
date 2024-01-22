<?php
session_start();
?>
<html><head><title>Agradecimentos</title></head>
<body>
<h2>Bem vindo ao centro de hospitalidade</h2>

<?php
if(!isset($_SESSION['visitante'])){ //Verifica se existe a posição 'visitante' no vetor SESSION.
echo "Você deve ter acabado de chegar. Bem vindo!<BR>";
$_SESSION['visitante']=0;
$_SESSION['login']=session_id();  //Identificador da sessão atual.
$_SESSION['hist']='0';
                                    }
else{
$visita=$_SESSION['visitante']+1;
echo "De volta? Esta é a ".$visita." visita.<BR>";
$_SESSION['visitante']=$visita;
@$_SESSION['hist']=$_SESSION['hist'].'0';                                        }
$self_url=$_SERVER['PHP_SELF'];//armazena o caminho deste arquivo.
$session_id=session_id();

$href=$self_url;
echo "->variável self_url.".$href;
echo "<BR>ID da sessão: ".$session_id;
echo "<BR><a href=\"$href\">Visite-nos novamente. </a> <BR><BR>";
?>

<a href='Sessao id.php'>Clique aqui para a página 1</a> <BR>
<a href='Sessao id2.php'>Clique aqui para a página 2</a> <BR>
<a href='Sessao id3.php'>Clique aqui para a página 3</a> <BR>
<a href='hist.php'> Clique aqui para ver o histórico.</a>
</body></html>
