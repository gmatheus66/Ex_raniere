<?php 
	
	$itensfile = [];
    if (file_exists('csv/itens.csv')) {
        $intensfile = file('csv/itens.csv');
    }


    function explodir($el) {
        $intensdata = explode(',', $el);
        return [
            'usuarioEmail' => $itensdata[0],
            'nome' => $itensdata[1],
            'autor' => $itensdata[2]
        ];
    }
    $livros = array_map('explodir', $itensfile);




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

				<?php foreach ($variable as $id => $item): ?>
					<tr>
					     <td><?= $livro['nome'] ?></td>
              			 <td><?= $livro['autor'] ?></td>
          			</tr>
				<?php endforeach ?>

		</table>
</body>
</html>