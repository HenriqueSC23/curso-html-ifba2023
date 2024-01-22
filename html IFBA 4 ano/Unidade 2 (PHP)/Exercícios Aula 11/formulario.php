<!DOCTYPE html>
<html>
<head>
  <title>Dicionário</title>
  <style>
    .thirteen h1 {

position: relative;
font-size: 18px;
font-weight: 700;
letter-spacing: 5px;
text-transform: uppercase;
width: 315px;
text-align: center;
margin: auto;
white-space: nowrap;
border: 2px solid #dbdbdb;
color: #dbdbdb;
padding: 5px 11px 3px 11px;
border-radius: 3px;

}

.thirteen h1:before, .thirteen h1:after {

  background-color:transparent;
  color: #dbdbdb;
  position: absolute;
  font-family: "untitled-font-1";
  content: '\e42c';
  height: 20px;
  width: 20px;
  bottom: 8px;
  line-height: 20px;
  font-size: 15px;

}

.thirteen h1:before {
 left:-30px;
}

.thirteen h1:after {
 right:-30px;
}

.box-formulario {

  width: 100%;
  align-items: center;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  background-color: #575f60;
  padding:60px 0;

}

.formulario {

  width: 700px;
  background: #575f60;
  padding: 60px 5%;
  text-align: center;

}


.formulario span {
position: relative;
display: flex;
margin: 45px 10px;

}

/*input Animado*/

.input-swing-down {

display: inline-block;
width: 100%;
height: 41px;
padding: 10px 0 10px 70px;
font-family: "Open Sans", sans;
font-weight: 400;
font-size: 1em;
color: #575F60;
background: #dbdbdb;
border: 0;
border-radius: 3px;
outline: 0;
transition: all .3s ease-in-out;

}

.input-swing-down::-webkit-input-placeholder {

color: #575f60;
font-weight: 300;

}

.input-swing-down + label {

display: inline-block;
position: absolute;
top: 0;
left: 0;
padding: 10px 22px;
text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
background: #8f9b9c;
border-top-left-radius: 3px;
border-bottom-left-radius: 3px;
transform-origin: 2px 2px;
transform: rotate(0);
animation: swing-back .4s 1 ease-in-out;

}

@keyframes swing {
0% {
  transform: rotate(0);
}
20% {
  transform: rotate(116deg);
}
40% {
  transform: rotate(60deg);
}
60% {
  transform: rotate(98deg);
}
80% {
  transform: rotate(76deg);
}
100% {
  transform: rotate(80deg);
}
}
@keyframes swing-back {
0% {
  transform: rotate(82deg);
}
100% {
  transform: rotate(0);
}
}

.input-swing-down:focus,
.input-swing-down:active {

color: #000000;
padding: 10px 0 10px 30px;  
background: #fff;
border-top-left-radius: 0;
border-bottom-left-radius: 0;

}

.input-swing-down:focus::-webkit-input-placeholder,
.input-swing-down:active::-webkit-input-placeholder {

color: #aaa;

}

.input-swing-down:focus + label,
.input-swing-down:active + label {

animation: swing 1.4s 1 ease-in-out;
transform: rotate(80deg);
color: #fff;

}


/*TextArea*/

.textarea-swing-down {

display: inline-block;
width: 100%;
height: 78px;
padding: 10px 0 10px 70px;
font-family: "Open Sans", sans;
font-weight: 400;
font-size: 1em;
resize: none;
color: #575F60;
background: #dbdbdb;
border: 0;
border-radius: 3px;
outline: 0;
transition: all .3s ease-in-out;

}

.textarea-swing-down::-webkit-input-placeholder {

color: #575f60;
font-weight: 300;

}

.textarea-swing-down + label {

display: inline-block;
position: absolute;
top: 0;
left: 0;
padding: 10px 22px;
height: 78px;
line-height: 60px;
text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
background: #8f9b9c;
border-top-left-radius: 3px;
border-bottom-left-radius: 3px;
transform-origin: 2px 2px;
transform: rotate(0);
animation: swing-back .4s 1 ease-in-out;

}

@keyframes swing {
0% {
  transform: rotate(0);
}
20% {
  transform: rotate(116deg);
}
40% {
  transform: rotate(60deg);
}
60% {
  transform: rotate(98deg);
}
80% {
  transform: rotate(76deg);
}
100% {
  transform: rotate(80deg);
}
}
@keyframes swing-back {
0% {
  transform: rotate(82deg);
}
100% {
  transform: rotate(0);
}
}

.textarea-swing-down:focus,
.textarea-swing-down:active {

color: #000000;
padding: 10px 0 10px 30px;  
background: #fff;
border-top-left-radius: 0;
border-bottom-left-radius: 0;

}

.textarea-swing-down:focus::-webkit-input-placeholder,
.textarea-swing-down:active::-webkit-input-placeholder {

color: #aaa;

}

.textarea-swing-down:focus + label,
.textarea-swing-down:active + label {

animation: swing 1.4s 1 ease-in-out;
transform: rotate(80deg);
color: #fff;

}

/*Botão*/
.box-btn { 

width: 100%;
padding: 0 10px;
float: left;

}


.btn-3d {

top: 0;
left: 0;
transition: all 0.15s linear 0s;
display: block;
margin: auto;
width: 200px;
border-radius: 3px;
border: none;
cursor: pointer;
background-color: #8F9B9C;
color: #090B0B;
letter-spacing: 2px;
box-shadow: -6px 6px 0 #393939;
text-decoration: none;

}

.btn-3d:hover {
top: 3px;
left: -3px;
box-shadow: -3px 3px 0 #393939;
}
.btn-3d:hover::after {
top: 1px;
left: -2px;
width: 4px;
height: 4px;
}
.btn-3d:hover::before {
bottom: -2px;
right: 1px;
width: 4px;
height: 4px;
}
.btn-3d::after {
transition: all 0.15s linear 0s;
content: "";
position: absolute;
top: 2px;
left: -4px;
width: 8px;
height: 8px;
background-color: #404040;
transform: rotate(45deg);
z-index: 1;
}
.btn-3d::before {
transition: all 0.15s linear 0s;
content: "";
position: absolute;
bottom: -4px;
right: 2px;
width: 8px;
height: 8px;
background-color: #404040;
transform: rotate(45deg);
z-index: 1;
}

.btn-3d {
position: relative;
}

button:active.btn-3d {

top: 6px;
left: -6px;
box-shadow: none;

}

button:active.btn-3d:before {
bottom: 1px;
right: 1px;
}
button:active.btn-3d:after {
top: 1px;
left: 1px;
}
button.btn-3d i { 

display: block;
background:#8F9B9C;
font-family: 'open_sansregular';
padding: 15px;
z-index: 2;
position: inherit;
font-style: normal; 

}
  </style>
</head>
<body>
<div class="box-formulario">
<div class="formulario">
<div class="thirteen">
  <h1>Cadastrar palavras</h1>
</div>
  <form method="POST" action="formulario.php">
  <span>
    <input type="text" name="palavra" class="input-swing-down" id="nome" placeholder="Palavra"><br>
  </span>
  <span>
    <textarea name="significado" class="textarea-swing-down" id="mensagem" rows="3" placeholder="Significado" ></textarea><br>
  </span>
    <div class="thirteen">
    <h1>Pesquisar palavras</h1>
    </div>
  <span>
    <input type="text" name="busca" class="input-swing-down" id="nome" placeholder="Busca">
  </span>
  <div class="box-btn">
    <button type="submit" class="btn-3d" name="botao"><i class="icon icon-forward-1">Cadastrar/Pesquisar</i></button>
</div>
<br><br><br><br>
<div class="box-btn">
    <button type="submit" class="btn-3d" name="atualizar"><i class="icon icon-forward-1">Atualizar</i></button>
</div>
<br><br><br><br>
<div class="box-btn">
    <button type="submit" class="btn-3d" name="excluir"><i class="icon icon-forward-1">Excluir</i></button>
</div>
  </form><br>
</div>
</div>
  <?php
       $conexao = mysqli_connect("127.0.0.1", "root", "");
       $li = "USE test";
       $query = mysqli_query($conexao, $li);  
       if(isset($_POST['botao'])){
        $palavra = $_POST['palavra'];
        $significado = $_POST['significado'];
        $busca = $_POST['busca'];  
        $li = "INSERT INTO dicionario(palavra, significado) VALUES('$palavra', '$significado')";
        $query = mysqli_query($conexao, $li);
        
        if(isset($_POST['busca'])){
          $palavra = $_POST['palavra'];
          $significado = $_POST['significado'];
          $li = "SELECT palavra FROM dicionario WHERE palavra LIKE '%$busca%'";
          $query = mysqli_query($conexao, $li);
          while($linha = mysqli_fetch_assoc($query)){
            foreach($linha as $valor);
            echo $valor, '<br>';
          }
        }
        
        }
        if(isset($_POST['excluir'])){
          $palavra = $_POST['palavra'];
          $li = "DELETE FROM dicionario WHERE palavra = '$palavra'";
          $query = mysqli_query($conexao, $li);
        };   
        if(isset($_POST['atualizar'])){
          $palavra = $_POST['palavra'];
          $significado = $_POST['significado'];
          $li = "UPDATE dicionario SET significado = '$significado' WHERE palavra = '$palavra'";
          $query = mysqli_query($conexao, $li);
        }; 
  ?>
</body>
</html>
