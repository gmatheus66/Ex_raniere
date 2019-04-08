<?php 

session_start();

function post($name){
	return $_POST[$name];
}

function juntar($array){
	return join(',', $array);
}

function login($nome, $email) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $nome;
    $_SESSION['email'] = $email;
}

function logado(){
	return $_SESSION['logado'] ?? false;
}


function redirecionar($caminho){
	header('location: '. $caminho);
	exit();

}



?>
