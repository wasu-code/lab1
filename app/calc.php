<?php
require_once dirname(__FILE__).'/../config.php'; //załaduj konfig
require_once $cfg->root_path.'/app/CalcCtrl.class.php'; //załaduj kontroler

$ctrl = new CalcCtrl();
$ctrl->process();
?>