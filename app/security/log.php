<?php
require_once dirname(__FILE__).'/../../init.php';

//$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'logCheck'; 
//action ustawione w init.php

session_start();

switch ($action) {
    default: //logCheck
        require_once $cfg->root_path.'/app/security/LogCtrl.class.php';
		$log = new LogCtrl();
		$log->check();
    break;
	case 'logCheck':
        require_once $cfg->root_path.'/app/security/LogCtrl.class.php';
		$log = new LogCtrl();
		$log->check();
	break;
    case 'logIn':
        require_once $cfg->root_path.'/app/security/LogCtrl.class.php';
		$log = new LogCtrl();
		$log->logIn();
    break;
    case 'logOut':
        require_once $cfg->root_path.'/app/security/LogCtrl.class.php';
		$log = new LogCtrl();
		$log->logOut();
    break;
}


?>