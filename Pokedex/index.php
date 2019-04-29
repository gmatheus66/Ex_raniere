<?php 
include 'Sistema.php';

$mensagem = get('mensagem');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pokedex</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

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
      <a class="nav-item nav-link" href="battle.php">Fight</a>
      <a class="nav-item nav-link" href="Sobre.php">Sobre</a>
      <?php if(logado()): ?>
      <a class="nav-item nav-link" href="sair.php">Sair</a>
      <?php endif ?>
      
    </div>
  </div>
</nav>

<?php if($mensagem != NULL): ?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><?= $mensagem ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php endif ?>
<div class="corpo">
	
		<img id="pokedex" src="imagens/Pokedex_Kanto.png" alt="imagem pokedex">
	<ul class="slider">
		<li>
			<img id="img1" src="imagens/pokemons3.jpg" alt="imagem pokemon 1">
		</li>
		<li>			
			<img id="img2" src="imagens/pokemons2.jpg" alt="imagem pokemon 2">
		</li>
	</ul>
	<h2>Sua Pokedex</h2>
	<h3>Adicione e remova pokemons </h3>
	
</div>

<script src="script.js"></script>

</body>
</html> 