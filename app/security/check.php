<?php
require_once dirname(__FILE__).'/../../config.php';

if (session_status() === PHP_SESSION_NONE ) {
	session_start();
}


//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	include $cfg->root_path.'/app/security/login.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}
?>