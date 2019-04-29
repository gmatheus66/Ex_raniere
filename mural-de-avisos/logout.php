<?php 

include_once 'init.php';
include_once 'login_functions.php';

if(is_logged()){
	logout();
	redirect('index.php');
}


?>