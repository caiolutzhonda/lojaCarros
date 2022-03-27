<?php 
class Carro
{
	public $marca;
	public $modelo;
	public $cor;
	public $ano;
	public $placa;
	public $imagem;

	public function __construct($marca, $modelo, $cor, $ano, $placa, $imagem = "images/undraw_off_road_9oae.png")
	{
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->ano = $ano;
		$this->placa = $placa;
		$this->imagem = $imagem;
	}

	public function register(){
		echo "<div class=\"resultado\">
					<div class=\"images\">
						<img src=\"$this->imagem\">
					</div>
					<div class=\"wrapper-desc\">
						<div class=\"desc1\">
							<p><b>Marca:</b> $this->marca <br><b>Modelo:</b> $this->modelo<br><b>Cor:</b> $this->cor</p>
						</div>
						<div class=\"desc2\">
							<p><b>Ano:</b> $this->ano<br><p><b>Placa:</b> $this->placa</p>				
						</div>
					</div>				
				</div>";
	}
	public function getImage(){

	}
}
 ?>