<?php
require_once 'core/Config.class.php';
$cfg = new core\Config();
include 'config.php'; //ustaw konfigurację

function &getCfg(){ global $cfg; return $cfg; }

//załaduj definicję klasy Messages i stwórz obiekt
require_once getCfg()->root_path.'/lib/Messages.class.php';
$msgs = new lib\Messages();

function &getMessages(){ global $msgs; return $msgs; }

//przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		//stwórz Smarty i przypisz konfigurację i messages
		include_once getCfg()->root_path.'/lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisz konfigurację i messages
		$smarty->assign('cfg',getCfg());
		$smarty->assign('msgs',getMessages());
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getCfg()->root_path.'/app/views',
			'two' => getCfg()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

$db = null; //przygotuj Medoo, twórz tylko raz - wtedy kiedy potrzeba
function &getDB() {
    global $cfg, $db;
    if (!isset($db)) {
        require_once 'lib/medoo/Medoo.php';
        $db = new \Medoo\Medoo([
            'database_type' => &$cfg->db_type,
            'server' => &$cfg->db_server,
            'database_name' => &$cfg->db_name,
            'username' => &$cfg->db_user,
            'password' => &$cfg->db_pass,
            'charset' => &$cfg->db_charset,
            'port' => &$cfg->db_port,
            'prefix' => &$cfg->db_prefix,
            'option' => &$cfg->db_option
        ]);
    }
    return $db;
}

require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once getCfg()->root_path.'/core/functions.php';

//$action = getFromRequest('action');
session_start(); //uruchom lub kontynuuj sesję
$cfg->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );
