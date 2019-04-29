<?php 

include_once 'init.php';
include_once 'users_functions.php';

$username = post('username') ?? '';
$email = post('email') ?? '';
$nome = post('name') ?? '';
$senha1 = post('pw') ?? '';
$senha2 = post('pw2') ?? '';

if($senha1 != $senha2) {
	redirect('index.php?msgc=true');
}
if($senha2 == '' || $senha1 == ''){
	redirect('reg_login.php?msgc=true');
}

add_user($username, $email, $senha1, $nome);
redirect('index.php');


 ?>