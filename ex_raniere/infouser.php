<?php 
	include 'init.php';

	$usuario = get('usuario');
	

	$dadosfile = [];
	$dados = [];

    $dadosfile = file('csv/dados.csv');


 $users = file('csv/dados.csv');
foreach($users as $user) {
    $userData = explode(',', $user);
    if (trim($userData[0]) == $usuario) {
       $dados[0] = $userData[0];
       $dados[1] = $userData[1];
       $dados[2] = $userData[2];
       $dados[3] = $userData[3];
       $dados[4] = $userData[4];
       $dados[5] = $userData[5];

    }
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?= TITLE ?></title>
 	<link rel="stylesheet" href="css/infouser.css">
 </head>
 <body>
 	<table>
 		<tr>
 			<th>Nome</th>
 			<th>Sobrenome</th>
 			<th>Email</th>
 			<th>Telefone </th>
 			<th>Cidade</th>
 			<th>Bairro</th>
 		</tr>
		<tr>
			<td><?=$dados[0] ?></td>
			<td><?=$dados[1] ?></td>
			<td><?=$dados[2] ?></td>
			<td><?=$dados[3] ?></td>
			<td><?=$dados[4] ?></td>
			<td><?=$dados[5] ?></td>
		</tr>

	</table>
	<a href="index.php">Voltar</a>
 </body>
 </html>