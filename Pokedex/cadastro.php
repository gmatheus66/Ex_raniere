<?php 

include 'Sistema.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style_cadastro.css">

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
	
	<h3>Cadastro do novo treinador de Pokemons</h3>

	<form action="auth.php" method="POST">
<div class="input-group mb-3">
    <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome">
</div>
<div class="input-group mb-3">
    <input type="text" name="nickname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Sobrenome" >
</div>
<div class="input-group mb-3">
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nickname" >
</div>
<div class="input-group mb-3">

    <input type="password" name="senha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"placeholder="Senha">
</div>
<div class="input-group mb-3">

    <input type="password"  name="confirSenha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Confirmar Senha">
</div>

		<button type="submit" class="btn btn-primary btn-dark btn-secondary btn-lg">Enviar</button>

	</form>

 
</body>
</html>