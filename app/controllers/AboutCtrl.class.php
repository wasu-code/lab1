<?php namespace app\controllers;

Class AboutCtrl {

    public function action_aboutShow() {
        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title','O nas');
        getSmarty()->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
        getSmarty()->assign('page_header','O nas');
        getSmarty()->assign('current','about');
            
        getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->display('about.tpl');
    }
} 