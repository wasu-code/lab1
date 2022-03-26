<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $cfg->root_path.'/lib/smarty/Smarty.class.php';

include $cfg->root_path.'/app/security/check.php';

$about = new Smarty();

$about->assign('cfg',$cfg);
//$about->assign('app_url',$cfg->app_url);//++
//$about->assign('root_path',$cfg->root_path);//++

$about->assign('page_title','O nas');
$about->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
$about->assign('page_header','O nas');
	

$about->display($cfg->root_path.'/app/about/about.tpl')
?>

