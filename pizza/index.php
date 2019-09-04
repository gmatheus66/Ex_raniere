<?php 
	
include 'init.php';
include 'connect.php';

if (!empty($_SESSION['name'])) {
	$smt = $con -> prepare("SELECT USR_ID FROM USER WHERE USR_NAME = ?");
	$smt -> bindParam(1,$_SESSION['name']);
	$smt -> execute();
	$resul = $smt -> fetch();
}


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Pizza</title>
 	<link rel="stylesheet" href="css/index.css">
 </head>
 <body>
 	<h2>Adicione suas Pizzas</h2>
	<?php if(logado()): ?>
 		<a href="logout.php">Sair</a>
		<form action="cadastrar-pizza.php" method="POST">
			<input class="ipt" type="text" name="nome-pizza" placeholder="Nome da pizza">
			<input class="ipt" type="text" name="ingrediente1" placeholder="Ingrediente 1">
			<input class="ipt" type="text" name="ingrediente2" placeholder="Ingrediente 2">
			<input class="ipt" type="text" name="ingrediente3" placeholder="Ingrediente 3">
			<input class="ipt" type="text" name="ingrediente4" placeholder="Ingrediente 4">
			<input type="submit" name="cadastrar-pizza" value="Adicionar" >	
		</form>
	<?php else: ?>
		<div class="login">
			<form action="login.php" method="POST">
				<input class="ipt" type="text" name="name" placeholder="Nome">
				<input class="ipt" type="password" name="pw" placeholder="Password">
				<input type="submit" name="Entrar" value="Entrar">
			</form>
		</div>
		<div class="cadastrar">
			<form action="cadastrar.php" method="POST">
				<input class="ipt" type="text" name="name" placeholder="Nome">
				<input class="ipt" type="email" name="email" placeholder="Email">
				<input class="ipt" type="password" name="pw" placeholder="Password">
				<input class="ipt" type="password" name="pw2" placeholder="Password Confirm">
				<input type="submit" name="Cadastrar" value="Cadastrar">		
			</form>
		</div>
 	<?php endif ?>



 	<table>
 		<thead>
 			<tr>
 				<th>Nome Pizza</th>
 				<th>Ingredientes 1</th>
 				<th>Ingredientes 2</th>
 				<th>Ingredientes 3</th>
 				<th>Ingredientes 4</th>
 				<?php if(logado()): ?>
 					<th>Excluir</th>
 				<?php endif ?>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach (get_pizza() as $id => $value): ?>
 			<tr>	
 				<td><?= $value[1] ?></td>
 				<td><?= $value[2] ?></td>
 				<td><?= $value[3] ?></td>
 				<td><?= $value[4] ?></td>
 				<td><?= $value[5] ?></td>
 				<?php if($value[0] == $resul['USR_ID'] ): ?>
	 				<?php if(logado()): ?>
	 					<td><a href="remove.php?rm=<?=$id?>"> Excluir</a></td>
	 				<?php endif ?>
 				<?php endif ?>
 			</tr>
 			<?php endforeach ?>
		</tbody>
 	</table>


 </body>
 </html>