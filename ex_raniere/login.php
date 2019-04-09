<?php 
	include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?></title>>
</head>
<body>
<h3>Login</h3>
	<form action="auth.php" method="POST">
		<input type="text" name="email" placeholder="email">
		<input type="password" name="senha" placeholder="senha">

		<input type="submit" name="Entrar">
	</form>
</body>
</html>