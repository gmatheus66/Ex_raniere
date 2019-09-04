<?php 

	$user = "root";
	$password = "matheus0186";

	global $con;

	try{
		$con = new PDO('mysql:host=localhost:3306;dbname=pizzaria;charset=utf8', 'root', 'matheus0186');
	}
	catch(PDOException $e){
		$e -> getMessage();
	}


?>