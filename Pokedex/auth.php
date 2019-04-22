<?php 
 
	include 'Sistema.php';


$name = post('nome') ?? '';
$sobrenome = post('sobrenome')?? '';
$nickname = post('nickname')?? '';
$senha = post('senha')?? '';
$senhacorfim = post('confirSenha')?? '';

 ?>
<?php if( $senha != $senhacorfim): ?>
	<h2>As senhas nao podem ser diferentes</h2>
	<a href="#" onclick="history.go(-1)">Voltar</a>
<?php endif ?>

<?php if($senha == '' || $senhacorfim == ''): ?>
	<h2>As senhas nao podem ser vazias</h2>
	<a href="#" onclick="history.go(-1)">Voltar</a>
<?php endif ?>

<?php 
	$dados = juntar([$name,$sobrenome,$nickname,md5($senha). "\n"]);

	$handle = fopen('csv/dados.csv', 'a');
	fwrite($handle, $dados);

	header('location: index.php?mensagem=Usuario '.$nickname.' cadastrado');

 ?>