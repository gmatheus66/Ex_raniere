<?php 

include_once 'init.php';
include_once 'messages_functions.php';


$UserId = currentUserId();
$categoryId = post('category');
$message = post('message');

add_message($UserId,$categoryId, $message);
redirect('index.php');

 ?>