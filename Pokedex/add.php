<?php 
	
	include 'Sistema.php';

$nome = get('Nome')?? '';
$poder = get('poder')?? '';
$tipo = get('tipo')?? '';
$cp = rand(1,5000);
$user = currentUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php if($nome == '' || $poder == '' || $tipo == ''): ?>
	<h3>Não e possivel cadastrar um pokemon com Nome, Poder ou Tipo vazios</h3>
	<a href="add_pokemons.php">Voltar</a>
<?php endif ?>

<?php

$dado = juntar([$nome,$poder,$tipo,$cp,$user."\n"]);
$handle = fopen(POKEMONFILE, 'a');
fwrite($handle, $dado);
redirecionar('Listar_Pokemons.php?menssagem= Pokemon Cadastrado'); 

?>
</body>
</html>