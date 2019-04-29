<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
	
<?php 


	$linha = $_GET['id'];
	$f = file('csv/pokemons.csv');
	unset($f[$linha]);
	//var_dump($f);

	$b = "";
	foreach($f as $al) {
		$b = $b . $al;
	}
	$handle = fopen('csv/pokemons.csv', 'w');
	fwrite($handle, $b);
	redirecionar('index.php');
	
 ?>


</body>

</html>
