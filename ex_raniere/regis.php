<?php 

include'init.php';

	$nome = post('nome');
	$sobrenome = post('sobrenome');
	$email = post('email');
	$senha = post('senha');
	$senha2 = post('senha2');
	$telefone = post('telefone');
	$cidade = post('cidade');
	$bairro = post('bairro');

 ?>

 <?php if($senha != $senha2): ?>
			<h1>Senhas não conferem; tente novamente</h1>
    	<a href="register.php">Voltar</a>
    	<?php exit(); ?>
 <?php endif ?>

 <?php 
 				$dados = juntar([$nome,$sobrenome,$email,$telefone, $cidade , $bairro ,md5($senha)]) . "\n";

 				$handle = fopen('csv/dados.csv', 'a');
 				fwrite($handle, $dados);

 				header('location: index.php?menssagem=Usuário ' . $email . ' cadastrado');
  ?>