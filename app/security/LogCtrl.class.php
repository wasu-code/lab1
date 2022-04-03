<?php

////
require_once $cfg->root_path.'/lib/smarty/Smarty.class.php';
require_once $cfg->root_path.'/lib/Messages.class.php';
////

class LogCtrl {
    private $role;
    //private $msgs;
    private $form;

    public function __construct() {
        //$this->msgs = new Messages();
		//$this->form = new CalcForm();
    }

    function check() {
        
        global $cfg;
        $this->role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
        //jeśli brak parametru (niezalogowanie) to idź na stronę logowania
        if ( empty($this->role) ){
          //include $this->cfg->root_path.'/app/security/login.php';
          //header("Location: ".$cfg->app_root.'/app/security/log.php?action=logIn');  
          $this->logIn();
          //zatrzymaj dalsze przetwarzanie skryptów
          exit();
        }
    }

    function logOut() {
        global $cfg;
        session_destroy(); //zakończ sesję dla tego użytkownika

        // 2. przekieruj lub "forward" na stronę główną
        //redirect
        header("Location: ".$cfg->app_url);
    }

    function logIn() {
        global $cfg;
        $this->getParamsLogin();

        if (!$this->validateLogin()){ 
            $this->generateView();
        } else { 
            header("Location: ".$cfg->app_url);
        }
    }

    function validateLogin(){
        // czy parametry zostały przekazane
        if ( ! (isset($this->form['login']) && isset($this->form['pass']))) {
            //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }
    
        // czy potrzebne wartości zostały przekazane
        if ( $this->form['login'] == "") {
            getMessages()->addError('Nie podano loginu');
        }
        if ( $this->form['pass'] == "") {
            getMessages()->addError('Nie podano hasła');
        }
    
        //gdy brak parametrów -> koniec
        if (!getMessages()->isEmpty()) return false;
    
        //sprawdzenie urzytkownika/hasła i nadanie roli
        if ($this->form['login'] == "admin" && $this->form['pass'] == "admin") {
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->form['login'] == "user" && $this->form['pass'] == "user") {
            $_SESSION['role'] = 'user';
            return true;
        }
        
        // gdy żaden z użytkowników w "bazie"
        getMessages()->addError('Niepoprawny login lub hasło');
        return false; 
    }

    function getParamsLogin(){
        $this->form['login'] = getFromRequest('login');
        $this->form['pass'] = getFromRequest('pass');
    }

    function generateView() {

        getSmarty()->assign('page_title','Logowanie');
        getSmarty()->assign('page_desc','zaloguj się');
        getSmarty()->assign('page_header','Logowanie');

        getSmarty()->assign('messages',getMessages());

        getSmarty()->display('login.tpl');
    }

}
?>