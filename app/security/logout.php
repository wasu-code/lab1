<?php
require_once dirname(__FILE__).'/../../config.php';

session_start(); //sprawdzenie który (jesli jakikolwiek) jest zalogowany
session_destroy(); //zakończ sesję dla tego użytkownika

// 2. przekieruj lub "forward" na stronę główną
//redirect
header("Location: "._APP_URL);
//"forward"
//include _ROOT_PATH.'/index.php';