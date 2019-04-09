<?php 
include 'init.php';


$email = post('email');
$senha = post('senha');


$users = file('csv/dados.csv');
foreach($users as $user) {
    $userData = explode(',', $user);
    //var_dump($userData);
    if (trim($userData[2]) == $email && trim($userData[6]) == md5($senha)) {
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
	<link rel="stylesheet" href="css/auth.css">
</head>
<body>
	<?php if(logado()): ?>
			<?php redirecionar('index.php') ?>
	<?php else: ?>
        <h3>Login ou senha incorreto.</h3> <div class="link"><a href="index.php">Clique para voltar</a></div>
	<?php endif ?>
</body>
</html>