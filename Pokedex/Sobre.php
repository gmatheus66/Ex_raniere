<?php 
include 'Sistema.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sobre</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style_sobre.css">
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
      <?php if(logado()): ?>
      <a class="nav-item nav-link" href="sair.php">Sair</a>
      <?php endif ?>
      
    </div>
  </div>
</nav>
	<h4>Site Feito com conhecimentos adquiridos na aula de WEB 1 </h4>
	<h5>PROF: RANIERE</h5>
	<ul>
		<li>Desenvolvedor: <h4>Matheus Gonçalves Silva</h4></li>
	</ul>
</body>
</html>