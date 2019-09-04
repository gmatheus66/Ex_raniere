<?php 

include 'init.php';

$id = $_GET['rm'];

if (!empty($id)) {
	
	$data = file("pizzas.csv");
	$data[$id] = "\n";

	file_put_contents("pizzas.csv", $data);
	redirect("index.php");
}


?>