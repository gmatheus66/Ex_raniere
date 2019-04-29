<?php 

include_once 'init.php';
include_once 'login_functions.php';

$username = post('username');
$pw = post('pw');


if(login($username, $pw) ){
	redirect('index.php');
}

redirect('reg_login.php?msgl=true');

 ?>