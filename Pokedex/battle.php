<?php 

include 'Sistema.php';

$pokemonsFile = [];
  if (file_exists('csv/pokemons.csv')) {
    $pokemonsFile = file('csv/pokemons.csv');
  }

function explodir($ar){
  $pokemonsData = explode(',',$ar);
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Battle</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style_battle.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="imagens/pokeball.jpg" alt="pokeball" width="30" height="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="Listar_Pokemons.php">Listar Pokemons</a>
      <a class="nav-item nav-link" href="add_pokemons.php">Adicionar Pokemons</a>
      <a class="nav-item nav-link" href="cadastro.php">Cadastro</a>
      <?php if(!logado()): ?>
      <a class="nav-item nav-link" href="login.php">Login</a>
      <?php endif ?>
      <a class="nav-item nav-link" href="Sobre.php">Sobre</a>
      <?php if(logado()): ?>
      <a class="nav-item nav-link" href="sair.php">Sair</a>
      <?php endif ?>
      
    </div>
  </div>
</nav>

  <h2>Aqui e onde o cacete come solto <strong>entre os pokemons</strong></h2>
<?php if(logado()): ?>
    
    <h4>Treinador <strong><?= currentUser()?></strong></h4>

    <form action="fight.php" method="POST">
      <div class="ladoa">
        <label class="input-group-text" for="inputGroupSelect01">Desafiante</label>
        <select class="custom-select " id="inputGroupSelect01" name="p2" >
          <option selected>Choose...</option>
          <?php foreach($pokemons as $i => $pokemon): ?>
            <?php if (trim($pokemon['treinador']) == currentUser() ): ?>  
              <option value="<?= $pokemon['nome'] ?>"><?= $pokemon['nome']?></option>
            <?php endif ?>
          <?php endforeach ?>
        </select>
      </div>
      <div class="ladob">
        <label class="input-group-text" for="inputGroupSelect02">Inimigo</label>
        <select class="custom-select " id="inputGroupSelect02" name="p1" >
          <option selected>Choose...</option>
          <?php foreach($pokemons as $i => $pokemon): ?>
              <?php if (trim($pokemon['treinador']) != currentUser() ): ?>  
                <option value="<?= $pokemon['nome'] ?>"><?= $pokemon['nome']?></option>
              <?php endif ?>
          <?php endforeach ?>
        </select>
      </div>

    <button type="submit" class="btn btn-primary btn-dark btn-secondary btn-lg">Fight</button>

    </form>
    


<?php endif ?>

</body>
</html>