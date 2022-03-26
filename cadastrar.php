<?php 
require 'Carro.php';
session_start();

// $marca, $modelo, $cor, $ano, $placa, $imagem

$vetor = $_SESSION['carro'] ?? [];
$newCarro = new Carro($_POST['marca'], $_POST['modelo'], $_POST['cor'], $_POST['ano'], $_POST['placa'], $_POST['imagem']);

$vetor[] = $newCarro;


$_SESSION['carro'] = $vetor;
header('location: cadastrarCarro.php');
die();

?>