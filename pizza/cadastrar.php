<?php 

include "connect.php";
include "init.php";

$name = $_POST['name']?? "";
$email = $_POST['email']?? "";
$pw = $_POST['pw']?? "";
$pw2 = $_POST['pw2']?? "";


if($pw != $pw2){
	echo 'As senhas nao podem ser diferentes';

}

if($name == "" || $email == ""){
	echo 'Campos Vazios';

}
else{
	try {
		
		$smt = $con -> prepare("INSERT INTO USER(USR_NAME,USR_EMAIL,USR_PASSWORD) VALUES (?,?,?)");
		$smt -> bindParam(1,$name);
		$smt -> bindParam(2,$email);
		$smt -> bindParam(3, $pw);
		$smt -> execute();
		
		echo 'Usuario Cadastrado';

	var_dump("nao, nao, entrou foi aqui");
	} catch (Exception $e) {
		$e -> getMessage();
	}
}




?>