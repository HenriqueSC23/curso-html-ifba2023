<!DOCTYPE html>
<html>
<head>
	<title>Recibo da Biblioteca Digital do IFBA Porto Seguro</title>
</head>
<body>
	<h1>Recibo da Biblioteca Digital do IFBA Porto Seguro</h1>
	<?php
	// Verifica se o formulário foi enviado
	if(isset($_POST['enviar'])){
		// Obtém os dados do formulário
		$nome = $_POST['nome'];
		$livro = $_POST['livro'];
		$tipo_usuario = $_POST['tipo_usuario'];

		// Calcula a data de devolução
		if($tipo_usuario == "aluno"){
			$prazo_devolucao = date('d/m/Y', strtotime('+3 days'));
		} else {
			$prazo_devolucao = date('d/m/Y', strtotime('+10 days'));
		}

		// Exibe o recibo
		echo "<p>Usuário: $nome</p>";
		echo "<p>Livro: $livro</p>";
		echo "<p>Data do empréstimo: " . date('d/m/Y') . "</p>";
		echo "<p>Data de devolução: $prazo_devolucao</p>";
		echo "<p>Tipo de usuário: $tipo_usuario</p>";
	} else {
		// Exibe o formulário
		echo "<form method='post'>";
		echo "<label for='nome'>Nome do usuário:</label>";
		echo "<input type='text' name='nome' id='nome' required><br><br>";
		echo "<label for='livro'>Nome do livro:</label>";
		echo "<input type='text' name='livro' id='livro' required><br><br>";
		echo "<label for='tipo_usuario'>Tipo de usuário:</label>";
		echo "<select name='tipo_usuario' id='tipo_usuario' required>";
		echo "<option value='aluno'>Aluno</option>";
		echo "<option value='professor'>Professor</option>";
		echo "</select><br><br>";
		echo "<input type='submit' name='enviar' value='Enviar'>";
		echo "</form>";
	}
	?>
</body>
</html>
