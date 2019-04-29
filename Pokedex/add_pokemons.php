<?php 
include 'Sistema.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style_add.css">
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
<?php if(logado()): ?>
	<h3>Cadastre seu novo Pokemon treinador <u><?=currentUser()?></u></h3>
	<form action="add.php">
		<div class="input-group mb-3">
    		<input type="text" name="Nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome">
		</div>

		<div class="input-group mb-3">
    		<input type="text" name="poder" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Poder">
		</div>
		

		<div class="input-group mb-3">
  		<div class="input-group-prepend">
    	<label class="input-group-text" for="inputGroupSelect01">Tipo</label>
  		</div>
  			<select class="custom-select" id="inputGroupSelect01">
    			<option selected>Choose...</option>
    			<option value="planta">Planta</option>
				<option value="fogo">Fogo</option>
				<option value="agua">Agua</option>
				<option value="inseto">Inseto</option>
				<option value="normal">Normal</option>
				<option value="Veneno">Veneno</option>
				<option value="eletrico">Eletrico</option>
				<option value="terra">Terra</option>
				<option value="Lutador">Lutador</option>
				<option value="pedra">Pedra</option>
				<option value="gelo">Gelo</option>
				<option value="fantasma">Fantasma</option>
				<option value="psiquico">Psiquico</option>
  			</select>
		</div>
		
		
		
		<button type="submit" class="btn btn-primary btn-dark btn-secondary btn-lg">Adicionar</button>

	</form>
	<?php else: ?>
		<h2>Voce precisa esta logado para poder adicionar Pokemons</h2>
		<h2>Caso não possua click no botao Abaixo para se cadastrar</h2>
		<div class="btn1"><button type="button" class="btn btn-dark"><a class="link" href="cadastro.php">Click Me</a></button></div>
<?php endif ?>
	
</body>
</html>