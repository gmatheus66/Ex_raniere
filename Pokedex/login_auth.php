<?php 
	
	include 'Sistema.php';

$nickname = post('nickname');
$senha = post('senha');

$user = file('csv/dados.csv');
foreach($user as $users) {
    $userData = explode(',', $users);
 
	if(trim($userData[3]) == md5($senha) && trim($userData[2]) == $nickname ){
		login($nickname);
		break;
	}
}
?>

<?php if(logado()): ?>
		<?php redirecionar('index.php'); ?>
    <?php else: ?>
        <h3>Login ou senha incorreto.</h3> <a href="login.php">Clique para voltar</a>
<?php endif ?>





