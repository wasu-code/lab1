<?php
require_once 'Config.class.php';

$cfg = new Config();

$cfg->server_name = 'localhost:80';
$cfg->app_root = '/lab1';

$cfg->server_url = 'http://'.$cfg->server_name;

$cfg->root_path = dirname(__FILE__);
$cfg->app_url = $cfg->server_url.$cfg->app_root;

$cfg->action_root = $cfg->app_root.'/app/ctrl.php?action=';
$cfg->action_url = $cfg->server_url.$cfg->action_root;
?>