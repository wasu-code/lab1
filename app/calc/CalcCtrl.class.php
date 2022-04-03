<?php
////
//require_once $cfg->root_path.'/lib/smarty/Smarty.class.php';
//require_once $cfg->root_path.'/lib/Messages.class.php';
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';
////

class CalcCtrl {
    //private $msgs; już załadowane
    private $form;
    private $res;

    public function __construct() {
        //$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->res = new CalcResult();
    }

    public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->op = getFromRequest('oprocentowanie');
	}

    function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->lata)&&isset($this->form->op))) {
            //$this->msgs->addError('Nie dostarczono wymaganych parametrów.');//np. gdy bezpośrednie wywołanie kontrolera
            return false;
        }

        //sprawdzenie czy podano parametry
        if ($this->form->kwota=="") { 
            getMessages()->addError("Nie podano kwoty.");
            //return false;
        }
        if ($this->form->lata=="") {
            getMessages()->addError("Nie podano lat.");
            //return false;
        }
        if ($this->form->op=="") {
            getMessages()->addError("Nie podano oprocentowania.");
            //return false;
        }
    
        if (!getMessages()->isError()) {//jeśli nie wystąppiły błedy
            //sprawdzenie czy liczby całkowite
            if (! is_numeric($this->form->kwota)) {
                getMessages()->addError("Kwota nie jest liczbą");
                return false;
            }
            if (! is_numeric($this->form->lata)) {
                getMessages()->addError("Ilość lat nie jest liczbą");
                return false;
            }
            if (! is_numeric($this->form->op)) {
                getMessages()->addError("Oprocentowanie nie jest liczbą");
                return false;
            }
        }
        return !getMessages()->isError();
    }

    //jeśli nie ma błędów - obliczenia
    function process() {
        //global $role;
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';//++
        $this->getParams();

        if ($this->validate()) {
            if ($role=='admin') {
                getMessages()->addInfo('Administrator nie powinien wykonywać obliczeń. Użyj konta gościa.');
                getMessages()->addInfo('Nie wykonano obliczeń.');
            } else {
                //zmiana parametrów na wartości liczbowe
                $this->form->kwota=round(floatval($this->form->kwota),2);
                $this->form->lata=round(floatval($this->form->lata),2);
                $this->form->op=floatval($this->form->op);
                //obliczenia
                $this->res->result=($this->form->kwota + $this->form->kwota * $this->form->op / 100)/($this->form->lata * 12);
                $this->res->result=round($this->res->result,2);
                getMessages()->addInfo('Wykonano obliczenia.');
            }
        }
        $this->generateView();
    }

    //generowanie widoku - przygotowanie danych dla szbalonu
    public function generateView() {
        //global $cfg;

        //$smarty = new Smarty();

        //$smarty->assign('cfg',$cfg);

        getSmarty()->assign('page_title','Kalkulator Kredytowy');
        getSmarty()->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
        getSmarty()->assign('page_header','Kalkulator');

        getSmarty()->assign('params',$this->form);
        getSmarty()->assign('result',$this->res);
        getSmarty()->assign('messages',getMessages());

        getSmarty()->assign('current',"calc");
        getSmarty()->display('calc.tpl');
    }



}



?>