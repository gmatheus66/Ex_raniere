<?php 

include 'init.php';

$id = $_GET['id'];

if(!is_logged()){
	redirect('index.php');
}
//var_dump($id);
del_message($id);
redirect('index.php');



 ?>