<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
// Abre ou cria o arquivo bloco1.txt
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen("bloco1.txt", "a");

// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "exemplo de escrita");
$escreve = fwrite($fp, "outro exemplo para funcionar");

// Fecha o arquivo
fclose($fp);
?>
</BODY>
</HTML>
