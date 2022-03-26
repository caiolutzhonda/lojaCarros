<?php 
class Carro
{
	public $marca;
	public $modelo;
	public $cor;
	public $ano;
	public $placa;
	public $imagem;

	public function __construct($marca, $modelo, $cor, $ano, $placa, $imagem)
	{
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->ano = $ano;
		$this->placa = $placa;
		$this->imagem = $imagem;
	}

	public function register(){
		echo "
		<table border=\"1\">
			<tr>
				<th>Imagem</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Cor</th>
				<th>Ano</th>
				<th>Placa</th>
			</tr>
			<tr>
				<td><img src=\"$this->imagem\" alt=\"imagem-uploadeda\" width=\"400\"></td>
				<td>{$this->marca}</td>
				<td>{$this->modelo}</td>
				<td>{$this->cor}</td>
				<td>{$this->ano}</td>
				<td>{$this->placa}</td>
			</tr>
		</table>";
	}
	public function getImage(){
		echo "<img src=\"$this->imagem\" alt=\"imagem-uploadeda\">";
	}


}
	



 ?>