<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Pokemons</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style_listar.css">

</head>
<body>
	<?php 

	include 'Sistema.php';

	$pokemonsFile = [];
    if (file_exists('csv/pokemons.csv')) {
        $pokemonsFile = file('csv/pokemons.csv');
    }

    function explodir($el) {
        $pokemonsData = explode(',', $el);
        return [
            'nome' => $pokemonsData[0],
            'poder' => $pokemonsData[1],
            'tipo' => $pokemonsData[2],
            'cp' => $pokemonsData[3],
            'treinador' => $pokemonsData[4]
        ];
    }
    $pokemons = array_map('explodir', $pokemonsFile);

	?>
	 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="imagens/pokeball.jpg" alt="pokeball" width="30" height="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="add_pokemons.php">Adicionar Pokemons</a>
      <a class="nav-item nav-link" href="cadastro.php">Cadastro</a>
      <?php if(!logado()): ?>
      <a class="nav-item nav-link" href="login.php">Login</a>
      <?php endif ?>
      <a class="nav-item nav-link" href="battle.php">Fight</a>
      <a class="nav-item nav-link" href="Sobre.php">Sobre</a>
      <?php if(logado()): ?>
      <a class="nav-item nav-link" href="sair.php">Sair</a>
      <?php endif ?>
      
    </div>
  </div>
</nav>

<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th>Nome</th>
			<th>Poder</th>
			<th>Tipo</th>
			<th>CP</th>
			<?php if (logado()): ?>
				<th>Treinador</th>
				<th>Remover</th>
			<?php endif ?>
						
		</tr>
	</thead>
		<?php foreach ($pokemons as $i => $pokemon): ?>
			<tr>			
				<td><?= $pokemon['nome']?></td>
				<td><?= $pokemon['poder']?></td>
				<td><?= $pokemon['tipo']?></td>
				<td><?= $pokemon['cp']?></td>
				<?php if(logado()): ?>
					<td><?=$pokemon['treinador']?></td>
				<td>
					<?php if(trim($pokemon['treinador']) == currentUser() ): ?>
						<a href="Remover_Pokemons.php?id=<?= $i ?>"> Remover</a>
					<?php endif ?>	
				</td>
				<?php endif ?>
			</tr>
		<?php endforeach ?>
	</table>





</body>
</html>