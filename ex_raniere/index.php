<?php 
	
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
</head>
<body>
	

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

		<h3><a href="register.php">cadastro</a></h3>
		<h3><a href="login.php">Login</a></h3>
</body>
</html>