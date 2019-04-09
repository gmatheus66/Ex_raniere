<?php 
include 'init.php';


$email = post('email');
$senha = post('senha');


$users = file('csv/dados.csv');
foreach($users as $user) {
    $userData = explode(',', $user);
    if (trim($userData[2]) == $email && trim($userData[3]) == md5($senha)) {
        login($userData[0], $userData[2]);
        break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?></title>
</head>
<body>
	<?php if(logado()): ?>
			<?php redirecionar('index.php') ?>
	<?php else: ?>
        Login ou senha incorreto. <a href="index.php">Clique para voltar</a>
	<?php endif ?>
</body>
</html>