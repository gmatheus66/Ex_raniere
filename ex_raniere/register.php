<?php 

	$input = [
		'nome' => 'text',
		'sobrenome' => 'text',
		'email' => 'text',
		'telefone' => 'number',
		'cidade' => 'text',
		'bairro' => 'text',
		'senha' => 'password',
		'senha2' => 'password'
	];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?></title
</head>
<body>
	<h3>Cadastro</h3>
	<form action="regis.php" method="POST">
		<?php foreach ($input as $name => $type): ?>
			<input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>">
		<?php endforeach ?>

		<input type="submit" name="Enviar">


	</form>
	
</body>
</html>