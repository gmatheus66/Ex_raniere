<?php 
	include 'init.php';

	$item = get('item');
	$descricao = get('descricao');


	$dados = juntar([$item,$descricao]) . "\n";

	$handle = fopen('csv/itens.csv', 'a');
 	fwrite($handle, $dados);

	header('location: index.php');



 ?>