<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $cfg->root_path.'/lib/smarty/Smarty.class.php';

$form = array();
$messages = array();

getParamsLogin($form);

#Funkcje

//pobranie parametrów
function getParamsLogin(&$form){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

function validateLogin(&$form,&$messages){
	// czy parametry zostały przekazane
	if ( ! (isset($form['login']) && isset($form['pass']))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	// czy potrzebne wartości zostały przekazane
	if ( $form['login'] == "") {
		$messages [] = 'Nie podano loginu';
	}
	if ( $form['pass'] == "") {
		$messages [] = 'Nie podano hasła';
	}

	//gdy brak parametrów -> koniec
	if (count ( $messages ) > 0) return false;

	//sprawdzenie urzytkownika/hasła i nadanie roli
	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	// gdy żaden z użytkowników w "bazie"
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}

$smarty = new Smarty();
$smarty->assign('app_url',$cfg->app_url);
$smarty->assign('root_path',$cfg->root_path);

$smarty->assign('page_title','Logowanie');
$smarty->assign('page_desc','zaloguj się');
$smarty->assign('page_header','Logowanie');

$smarty->assign('form',$form);
$smarty->assign('messages',$messages);


if (!validateLogin($form,$messages)){ 
	$smarty->display($cfg->root_path.'/app/security/login.tpl');
} else { 
	header("Location: ".$cfg->app_url);
}

	
?>