<?php 
	include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?></title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
<h3>Login</h3>
<div class="link">
	<form action="auth.php" method="POST">
		<input type="text" name="email" placeholder="email">
		<input type="password" name="senha" placeholder="senha">

		<input id="button" type="submit" name="Entrar">
	</form>
</div>
</body>
</html>