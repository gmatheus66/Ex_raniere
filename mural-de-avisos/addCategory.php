<?php 

include 'init.php';

$category = post('category')?? '';

add_category($category);

redirect('index.php');
 ?>