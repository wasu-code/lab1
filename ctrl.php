<?php
require_once 'init.php'; //załaduj konfig

//rezygnujemy ze struktury 'switch' w kontrolerze głównym i zastępujemy ją 
//tablicą ścieżek przechowywaną wewnątrz obiektu routera.
getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('logIn'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow',    'CalcCtrl'/*,  ['user','admin']*/); //++roole?
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('logIn',       'LogCtrl');
getRouter()->addRoute('logOut',      'LogCtrl', ['user','admin']);
//getRouter()->addRoute('logCheck',    'LogCtrl', ['user','admin']);//++x
getRouter()->addRoute('aboutShow',   'AboutCtrl', ['user','admin']);

getRouter()->addRoute('personList',     'PersonListCtrl');
getRouter()->addRoute('personNew',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personEdit',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personSave',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personDelete',	'PersonEditCtrl',	['admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';

?>