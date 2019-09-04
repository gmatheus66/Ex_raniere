<?php 

include 'init.php';
include 'connect.php';


try {
	$smt = $con -> prepare("SELECT USR_ID FROM USER WHERE USR_NAME = ?");
	$smt -> bindParam(1, $_SESSION['name']);
	$smt -> execute();
	$id = $smt -> fetch();

} catch (Exception $e) {
	$e -> getMessage();
}

if (!empty($id)) {
	
	$namepizza = $_POST['nome-pizza'];
	$ingrediente1 = $_POST['ingrediente1'];
	$ingrediente2 = $_POST['ingrediente2'];
	$ingrediente3 = $_POST['ingrediente3'];
	$ingrediente4 = $_POST['ingrediente4'];
	$array = [$id['USR_ID'],$namepizza, $ingrediente1, $ingrediente2, $ingrediente3, $ingrediente4];

	$dados = implode(',', $array)."\n";

	$handle = fopen('pizzas.csv', 'a');
	fwrite($handle, $dados);
	fclose($handle);
}

redirect("index.php");

?>