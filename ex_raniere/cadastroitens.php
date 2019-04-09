<?php 
	include 'init.php';

	$item = get('item');
	$descricao = get('descricao');
	$usuario = currentUser();

	$dados = juntar([$item,$descricao,$usuario]) . "\n";

	$handle = fopen('csv/itens.csv', 'a');
 	fwrite($handle, $dados);

	header('location: index.php');



 ?>