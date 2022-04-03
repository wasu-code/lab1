<?php
require_once dirname(__FILE__).'/core/Config.class.php';
$cfg = new core\Config();
include dirname(__FILE__).'/config.php'; //ustaw konfigurację

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

require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}


require_once getCfg()->root_path.'/core/functions.php';

$action = getFromRequest('action');
