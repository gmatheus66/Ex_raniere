<?php 

session_start();

function post($name){
	return $_POST[$name];
}

function juntar($arr){
	return join(',', $arr);
}





?>
