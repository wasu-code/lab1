<?php

$cfg->server_name = 'localhost:80';
$cfg->app_root = '/lab1';

$cfg->server_url = 'http://'.$cfg->server_name;

$cfg->root_path = dirname(__FILE__);
$cfg->app_url = $cfg->server_url.$cfg->app_root;

$cfg->action_root = $cfg->app_root.'/ctrl.php?action=';
$cfg->action_url = $cfg->server_url.$cfg->action_root;

# konfiguracja bazy danych (wymagane)
$cfg->db_type = 'mysql';
$cfg->db_server = 'localhost';
$cfg->db_name = 'simpledb';
$cfg->db_user = 'root';
$cfg->db_pass = '';
$cfg->db_charset = 'utf8';

# konfiguracja bazy danych (opcjonalna)
$cfg->db_port = '3306';
#$cfg->db_prefix = '';
$cfg->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

?>