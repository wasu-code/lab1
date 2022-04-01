<?php
require_once dirname(__FILE__).'/../config.php'; //załaduj konfig

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
session_start();
switch ($action) {
    default: //calcView
        require_once $cfg->root_path.'/app/calc/CalcCtrl.class.php'; //załaduj kontroler
        $ctrl = new CalcCtrl();
        $ctrl->generateView(); //tylko widok bez danych i walidacji
    break;
    case 'calcCompute':
        require_once $cfg->root_path.'/app/calc/CalcCtrl.class.php'; //załaduj kontroler
        $ctrl = new CalcCtrl();
        $ctrl->process();
    break;
    case 'otherAction':
        //coś
    break;
}

?>