<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
    <form action="Prova.php" method="POST">
<?php
//respostas abaixo:
$respostas = array(
1=>"A",
2=>"C",
3=>"B",
4=>"A",
5=>"D",
6=>"B",
7=>"E",
8=>"A",
9=>"C",
10=>"D",
11=>"B");



?> <h1>Question�rio</h1>

 <h2>1 -Quest�o 1</h2>

a)<input type="radio" name="Q1" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q1" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q1" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q1" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q1" value="E"> Resposta E.  <BR>            <HR>

 <h2>2 -Quest�o 2</h2>

a<input type="radio" name="Q2" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q2" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q2" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q2" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q2" value="E"> Resposta E.  <BR>        <HR>

 <h2>3 -Quest�o 3</h2>

a<input type="radio" name="Q3" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q3" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q3" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q3" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q3" value="E"> Resposta E.  <BR>    <HR>

 <h2>4 -Quest�o 4</h2>

a<input type="radio" name="Q4" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q4" value="A"> Resposta B.   <BR>
c<input type="radio" name="Q4" value="A"> Resposta C.  <BR>
d<input type="radio" name="Q4" value="A"> Resposta D.  <BR>
e<input type="radio" name="Q4" value="A"> Resposta E.  <BR><HR>

 <h2>5 -Quest�o 5</h2>

a<input type="radio" name="Q5" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q5" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q5" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q5" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q5" value="E"> Resposta E.  <BR><HR>

<h2>6 Quest�o 6</h2>

a<input type="radio" name="Q6" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q6" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q6" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q6" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q6" value="E"> Resposta E.  <BR>                <HR>

 <h2>7 -Quest�o 7</h2>

a<input type="radio" name="Q7" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q7" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q7" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q7" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q7" value="E"> Resposta E.  <BR>                    <HR>

 <h2>8 -Quest�o 8</h2>

a<input type="radio" name="Q8" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q8" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q8" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q8" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q8" value="E"> Resposta E.  <BR>             <HR>

 <h2>9 -Quest�o 9</h2>

a<input type="radio" name="Q9" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q9" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q9" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q9" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q9" value="E"> Resposta E.  <BR>                 <HR>

 <h2>10 -Quest�o 10</h2>

a<input type="radio" name="Q10" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q10" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q10" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q10" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q10" value="E"> Resposta E.  <BR>                    <HR>

 <h2>11 -Quest�o 11</h2>,
 
a<input type="radio" name="Q11" value="A"> Resposta A.   <BR>
b<input type="radio" name="Q11" value="B"> Resposta B.   <BR>
c<input type="radio" name="Q11" value="C"> Resposta C.  <BR>
d<input type="radio" name="Q11" value="D"> Resposta D.  <BR>
e<input type="radio" name="Q11" value="E"> Resposta E.  <BR>                        <HR>

<button type="submit">Enviar</button><br>
<button type="reset">Limpar</button> 
</form>

<?php
$certo=0;
$errado=0;
 for($i=1;$i<12;$i++){
     if($_POST["Q".$i] == $respostas[$i]){
         $certo++;
     }else{
         $errado++; 
     }
 }

 echo "Você acertou $certo questões e errou $errado questões.";
?>
</BODY>
</HTML>
