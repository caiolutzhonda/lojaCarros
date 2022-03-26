<?php 
require 'Carro.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar Carro</title>
</head>
<body>
	<form action="cadastrar.php" method="POST">
		<label>Marca:</label>
		<input type="text" name="marca" >
		<br>
		<label>Modelo</label>
		<input type="text" name="modelo" >
		<br>
		<label>Cor:</label>
		<input type="text" name="cor" >
		<br>
		<label>Ano de fabricação:</label>
		<input type="text" name="ano" >
		<br>
		<label>Placa:</label>
		<input type="text" name="placa">
		<br>
		<label>Imagem</label>
		<input type="text" name="imagem">
		<br>
		<button type="submit">Cadastrar</button>
	</form>
	<form action="limpar.php">
		<button type="submit">Limpar</button>
	</form>
	<hr>
	<h1>Carros:</h1>
	<?php 
		$vetor = $_SESSION['carro'] ?? [];
		if(count($vetor) > 0)
		{
			foreach ($vetor as $valor) {

				$valor->register();
			}
		}else {
			echo "Nenhum carro cadastrado";
		}

	 ?>
</body>
</html>