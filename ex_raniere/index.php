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
            'descricao' => $itensdata[1]
            
        ];

    }
    $itens = array_map('explodir', $itensfile);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabela Doação</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<?php if (get('messagem') !== false): ?>
        <div class="messagem">
            <?= get('messagem') ?>
        </div>
    <?php endif ?>

		<table>
			<tr>
				<th>Item</th>
				<th>Descricao</th>
			</tr>

				<?php foreach ($itens as $id => $item): ?>
					<tr>
					     <td><?= $item['item'] ?></td>
              			 <td><?= $item['descricao'] ?></td>
          			</tr>
				<?php endforeach ?>

		</table>

			<a href="register.php">cadastro</a>
			<a href="login.php">Login</a>
			<a href="sair.php">Sair</a>

		<?php if(logado()): ?>
		<div class="cadastroitens">
			<form action="cadastroitens.php">
				<input type="text" name="item" placeholder="item">
				<br>
				<input type="text" name="descricao" placeholder="descricao">	
				<br>				
				<input type="submit" name="cadastrar">

			</form>
		</div>
		<?php endif ?>
</body>
</html>