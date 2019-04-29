<?php 

include 'Sistema.php';

if (logado()) {
	logoff();
	redirecionar('index.php');
}
?>