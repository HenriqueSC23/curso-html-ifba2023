<!DOCTYPE html>
<html>
<head>
	<title>Emissão de Nota Fiscal</title>
</head>
<body>

	<?php
	// Vetor de preços dos produtos
	$precos = array(10.50, 15.90, 25.00, 5.75, 12.30, 8.90, 17.50, 9.80, 6.00);

	// Verifica se o formulário foi enviado
	if(isset($_POST['enviar'])){

		// Inicializa a variável que armazenará o total da fatura
		$total = 0;

		// Exibe a tabela com a fatura
		echo '<table border="1">';
		echo '<tr><th>Produto</th><th>Quantidade</th><th>Preço</th><th>Total</th></tr>';

		// Loop para percorrer os produtos e quantidades
		for($i = 1; $i <= 9; $i++){

			// Armazena a quantidade digitada pelo usuário
			$quantidade = $_POST['produto'.$i];

			// Calcula o total para o produto atual
			$subtotal = $precos[$i-1] * $quantidade;

			// Adiciona o subtotal ao total da fatura
			$total += $subtotal;

			// Exibe os dados do produto atual na tabela
			echo '<tr>';
			echo '<td>Produto '.$i.'</td>';
			echo '<td>'.$quantidade.'</td>';
			echo '<td>R$ '.number_format($precos[$i-1], 2, ',', '.').'</td>';
			echo '<td>R$ '.number_format($subtotal, 2, ',', '.').'</td>';
			echo '</tr>';

		}

		// Exibe o total da fatura
		echo '<tr><td colspan="3" align="right">Total:</td><td>R$ '.number_format($total, 2, ',', '.').'</td></tr>';

		echo '</table>';

	} else {
		// Exibe o formulário para digitar as quantidades dos produtos
		echo '<form method="POST" action="">';
		for($i = 1; $i <= 9; $i++){
			echo 'Produto '.$i.': <input type="text" name="produto'.$i.'" value="0"><br>';
		}
		echo '<input type="submit" name="enviar" value="Enviar">';
		echo '</form>';
	}

	?>

</body>
</html>
