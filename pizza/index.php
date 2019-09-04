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
 	<script src="jquery-3.4.1.min.js"></script>
 </head>
 <body>
 	<?php if(logado()): ?>
 		<div class="user">
			<h4><?= $_SESSION['name'] ?></h4>
 			<a class="sair" href="logout.php">Sair</a>
		</div>
	<?php endif ?>

 	<h2>Adicione suas Pizzas</h2>
	<?php if(logado()): ?>		
 		<div class="cadastrar-pizza">
			<form id="cadas-pizza" action="cadastrar-pizza.php" method="POST">
				<input class="ipt" type="text" name="nome-pizza" placeholder="Nome da pizza">
				<input class="ipt" type="text" name="ingrediente1" placeholder="Ingrediente 1">
				<input class="ipt" type="text" name="ingrediente2" placeholder="Ingrediente 2">
				<input class="ipt" type="text" name="ingrediente3" placeholder="Ingrediente 3">
				<input class="ipt" type="text" name="ingrediente4" placeholder="Ingrediente 4">
				<input id="btn-adicionar" type="submit" name="cadastrar-pizza" value="Adicionar" >	
			</form>
		</div>
	<?php else: ?>
		<div class="msg-div">
			<p class="msg" ></p>
		</div>
		
		<div class="login">
			<form id="login" action="#" method="POST">
				<input class="ipt" type="text" name="name" placeholder="Nome" maxlength="50">
				<input class="ipt" type="password" name="pw" placeholder="Password" maxlength="9">
				<input id="btn-entrar" type="submit" name="Entrar" value="Entrar">
			</form>
		</div>
		<div class="cadastrar">
			<form action="cadastrar.php" method="POST">
				<input class="ipt" type="text" name="name" placeholder="Nome" maxlength="50">
				<input class="ipt" type="email" name="email" placeholder="Email" maxlength="30">
				<input class="ipt" type="password" name="pw" placeholder="Password" maxlength="9">
				<input class="ipt" type="password" name="pw2" placeholder="Password Confirm" maxlength="9">
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
 			<?php foreach (get_pizza() as $i => $value): ?>
 			<tr>	
 				<td><?= $value[1] ?></td>
 				<td><?= $value[2] ?></td>
 				<td><?= $value[3] ?></td>
 				<td><?= $value[4] ?></td>
 				<td><?= $value[5] ?></td>
 				<?php if($value[0] == $resul['USR_ID'] ): ?>
	 				<?php if(logado()): ?>
	 					<td><a href="remove.php?rm=<?=$i?>"> Excluir</a></td>
	 				<?php endif ?>
 				<?php endif ?>
 			</tr>
 			<?php endforeach ?>
		</tbody>
 	</table>


 </body>
 <script>
 	$(function(){

 		$('#btn-entrar').on('click',function(evt){
 			evt.preventDefault();

 			//console.log($('#login').serialize());

 			let login = $('#login').serialize();
 			//$('.msg').remove();

 			$.ajax({
 				type: 'POST',
 				url: 'login.php',
 				data: login,
 				dataType: 'html',

 				success: function(data){
 					$('.msg').fadeIn("slow",function(){
 						$('.msg').append(data).css('margin-left', '41%');

 					})
 					setTimeout(function(){
 						$('.msg').fadeOut("slow", function(){
 							$('msg').remove();
 							//$(data).val('');
 						})
 					}, 7000)
 					
 					console.log(data);

 				}



 			});

 		});






 	})

 </script>

 </html>