<?php 
	include 'init.php';

	$itensfile = [];
    if (file_exists('csv/itens.csv')) {
        $itensfile = file('csv/itens.csv');
    }


    function explodir($el) {
        $itensdata = explode(',', $el);
        return [
            'item' => $itensdata[0],
            'descricao' => $itensdata[1],
            'usuario' => $itensdata[2]
            
        ];

    }
    $itens = array_map('explodir', $itensfile);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?></title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<?php if (get('menssagem') !== false): ?>
        <div class="menssagem">
            <?= get('menssagem') ?>
        </div>
    <?php endif ?>

		<table>
			<tr>
				<th>Item</th>
				<th>Descricao</th>
				<?php if(logado()): ?>
					<th>Usuario</th>
				<?php endif ?>
			</tr>

				<?php foreach ($itens as $id => $item): ?>
					<tr>
					     <td><?= $item['item'] ?></td>
              			 <td><?= $item['descricao'] ?></td>
              			 <?php if(logado()): ?>
              			 	<td><a href="infouser.php?usuario=<?=$item['usuario']?>"><?= $item['usuario'] ?></a></td>
              			 <?php endif ?>
          			</tr>
				<?php endforeach ?>

		</table>
		<div class="link">
			<a href="register.php">Cadastro</a>
			<a href="login.php">Login</a>
			<a href="sair.php">Sair</a>
		</div>

		<?php if(logado()): ?>
		<div class="cadastroitens">
			<form action="cadastroitens.php">
				<input type="text" name="item" placeholder="Item">
			
				<input type="text" name="descricao" placeholder="Descricao">	
							
				<input id="button" type="submit" name="Cadastrar">

			</form>
		</div>
		<?php endif ?>
</body>
</html>