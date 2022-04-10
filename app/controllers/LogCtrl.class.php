<?php namespace app\controllers;

////
use lib\Messages;
use app\security\dataholders\User;
use app\security\dataholders\LoginForm;
////

class LogCtrl {
    //private $role;
    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    /*public function action_logCheck() {
        
        //global $cfg;
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
        //jeśli brak parametru (niezalogowanie) to idź na stronę logowania
        if ( empty($this->role) ){
          //include $this->cfg->root_path.'/app/security/login.php';
          //header("Location: ".$cfg->app_root.'/app/security/log.php?action=logIn');  
          $this->logIn();
          //zatrzymaj dalsze przetwarzanie skryptów
          exit();
        }
    }*/

    function action_logOut() {
        //global $cfg;
        session_destroy(); //zakończ sesję dla tego użytkownika
        getMessages()->addInfo('Poprawnie wylogowano z systemu');
        // 2. przekieruj lub "forward" na stronę główną
        //redirect
        $this->generateView();
    }

    function action_logIn() {
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
        if ( ! (isset($this->form->login) && isset($this->form->pass))) {
            //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }
    
        // czy potrzebne wartości zostały przekazane
        if ( $this->form->login == "") {
            getMessages()->addError('Nie podano loginu');
        }
        if ( $this->form->pass == "") {
            getMessages()->addError('Nie podano hasła');
        }
    
        //gdy brak parametrów -> koniec
        if (!getMessages()->isEmpty()) return false;
    
        //sprawdzenie urzytkownika/hasła i nadanie roli
        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            $user = new User($this->form->login, 'admin');

            $_SESSION['user'] = serialize($user);
            addRole($user->role);
            //return true;
        } else if ($this->form->login == "user" && $this->form->pass == "user") {
            $user = new User($this->form->login, 'user');
            $_SESSION['user'] = serialize($user);
            addRole($user->role);
            //return true; 
        } else {
            getMessages()->addError('Niepoprawny login lub hasło');
        }
        
        // gdy żaden z użytkowników w "bazie"
        //getMessages()->addError('Niepoprawny login lub hasło');
        //return false; 
        return ! getMessages()->isError();
    }

    function getParamsLogin(){
        $this->form->login = getFromRequest('login');
        $this->form->pass = getFromRequest('pass');
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