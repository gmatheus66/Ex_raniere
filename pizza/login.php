<?php 
	
include 'connect.php';
include 'init.php';


$name = $_POST['name']?? "";
$pw = $_POST['pw']?? "";

if($name == "" || $pw == ""){
	echo 'Nome ou Senha Estao Vazios';
	exit();
}

$smt = $con -> prepare("SELECT USR_NAME,USR_EMAIL FROM USER WHERE USR_NAME = ? AND USR_PASSWORD = ?");
$smt -> bindParam(1,$name);
$smt -> bindParam(2, $pw);
$smt -> execute();
$resul = $smt -> fetch();

if (!empty($resul)) {

	login($resul["USR_NAME"], $resul["USR_EMAIL"]);

	echo 'Login Efetuado com Sucesso';
}
else{
	echo 'Login Errado Tente Novamente';
}


?>