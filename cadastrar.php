<?php 
require 'Carro.php';
session_start();

// $marca, $modelo, $cor, $ano, $placa, $imagem

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$placa = $_POST['placa'];

$vetor = $_SESSION['carro'] ?? [];

if(empty($_POST['imagem']) == false){
	$imagem = $_POST['imagem'];
	$newCarro = new Carro(strtoupper($marca), strtoupper($modelo), strtoupper($cor), $_POST['ano'], strtoupper($placa), $imagem);

}else
{
	$newCarro = new Carro(strtoupper($marca), strtoupper($modelo), strtoupper($cor), $_POST['ano'], strtoupper($placa));
}



$vetor[] = $newCarro;


$_SESSION['carro'] = $vetor;
header('location: cadastrarCarro.php');
die();

?>