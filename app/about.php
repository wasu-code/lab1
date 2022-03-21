<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

include _ROOT_PATH.'/app/security/check.php';

$about = new Smarty();


$about->assign('app_url',_APP_URL);
$about->assign('root_path',_ROOT_PATH);

$about->assign('page_title','O nas');
$about->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
$about->assign('page_header','O nas');
	

$about->display(_ROOT_PATH.'/app/about.tpl')
?>

