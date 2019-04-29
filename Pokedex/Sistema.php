<?php 
session_start();

define('POKEMONFILE','csv/pokemons.csv');


function get($name){
	return $_GET[$name];
}

function post($name){
	return $_POST[$name];
}


function juntar($arr){
	return join(',', $arr);
}

function login($nickname){
	$_SESSION['logado'] = true;
	$_SESSION['nickname'] = $nickname;
}
function logado(){
	return isset($_SESSION['logado']) ;
}

function redirecionar($caminho = '/') {
    header('location: ' . $caminho);
    exit();
}

function currentUser() {
	if(logado()){
		return $_SESSION['nickname'];
	}
    return false;
}

function logoff(){
	return session_destroy();
}
 ?>
