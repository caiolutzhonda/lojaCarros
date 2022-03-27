<?php 
require 'Carro.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/cadastrarCarro.css">
	<title>Cadastrar Carro</title>
</head>
<body>
	<div class="wrapper-tudo">
		<div class="wrapper">
			<div class="wrapper-form">
				<div class="form">
					<form action="cadastrar.php" id="cadastramento_form" method="POST">
						<div class="titulo">
							<h1>Cadastrar Carro</h1>
						</div>
						<div class="primeiroinput">
							<label>Marca:</label>
							<br>
							<input type="text" name="marca" placeholder="Ex: Honda, BMW" required>

							<br>
							<label>Modelo:</label>
							<br>
							<input type="text" name="modelo" placeholder="Ex: Civic, Celta, Corsa" required>
							<br>

							<label>Cor:</label>
							<br>
							<input type="text" name="cor" placeholder="Ex: Azul, vermelho, branco" required>
						</div>
						<div class="segundoinput">
							<label>Ano de fabricação:</label>
							<br>
							<input type="text" name="ano" placeholder="Ex: 2005" required>
							<br>

							<label>Placa:</label>
							<br>
							<input type="text" name="placa" placeholder="Ex: AAA-3333, OYW4R26" required>
							<br>

							<label>Url da Imagem:</label>
							<br>
							<input type="url" name="imagem" placeholder="Ex: https://.../imagem.png">
							<br>
						</div>
						<div class="wrapper-botoes">
								<button class="botoes" type="submit">Cadastrar</button> 
					</form>
								<form action="limpar.php">
									<button class="botoes" type="submit">Limpar</button>
								</form>
						</div>
						<!-- <button type="submit">Cadastrar</button> -->
						<!-- não esquecer de adicionar o botão limpar depois <3 -->
					
					
				</div>
			</div>
			<!--  -->
			<div class="wrapper-resultado">
					<?php 
						$vetor = $_SESSION['carro'] ?? [];
						if(count($vetor) > 0)
						{
							foreach ($vetor as $valor) {
								$valor->register();
							}
						}else {
						}
					 ?>			
				</div>

			</div>
		</div>
	</div>


</body>
</html>