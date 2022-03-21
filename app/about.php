<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


	


$aaa = new Smarty();
$aaa->display(_ROOT_PATH.'/app/about.tpl')
?>

