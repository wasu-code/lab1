<?php
////
require_once $cfg->root_path.'/lib/smarty/Smarty.class.php';
require_once $cfg->root_path.'/lib/Messages.class.php';
require_once $cfg->root_path.'/app/calc/CalcForm.class.php';
require_once $cfg->root_path.'/app/calc/CalcResult.class.php';
////

class CalcCtrl {
    private $msgs;
    private $form;
    private $res;

    public function __construct() {
        $this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->res = new CalcResult();
    }

    public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->op = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}

    function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->lata)&&isset($this->form->op))) {
            //$this->msgs->addError('Nie dostarczono wymaganych parametrów.');//np. gdy bezpośrednie wywołanie kontrolera
            return false;
        }

        //sprawdzenie czy podano parametry
        if ($this->form->kwota=="") { 
            $this->msgs->addError("Nie podano kwoty.");
            //return false;
        }
        if ($this->form->lata=="") {
            $this->msgs->addError("Nie podano lat.");
            //return false;
        }
        if ($this->form->op=="") {
            $this->msgs->addError("Nie podano oprocentowania.");
            //return false;
        }
    
        if (!$this->msgs->isError()) {//jeśli nie wystąppiły błedy
            //sprawdzenie czy liczby całkowite
            if (! is_numeric($this->form->kwota)) {
                $this->msgs->addError("Kwota nie jest liczbą");
                return false;
            }
            if (! is_numeric($this->form->lata)) {
                $this->msgs->addError("Ilość lat nie jest liczbą");
                return false;
            }
            if (! is_numeric($this->form->op)) {
                $this->msgs->addError("Oprocentowanie nie jest liczbą");
                return false;
            }
        }
        return !$this->msgs->isError();
    }

    //jeśli nie ma błędów - obliczenia
    function process() {
        global $role;
        $this->getParams();

        if ($this->validate()) {
            if ($role=='admin') {
                $this->msgs->addInfo('Administrator nie powinien wykonywać obliczeń. Użyj konta gościa.');
            } else {
                //zmiana parametrów na wartości liczbowe
                $this->form->kwota=round(floatval($this->form->kwota),2);
                $this->form->lata=round(floatval($this->form->lata),2);
                $this->form->op=floatval($this->form->op);
                //obliczenia
                $this->res->result=($this->form->kwota + $this->form->kwota * $this->form->op / 100)/($this->form->lata * 12);
                $this->res->result=round($this->res->result,2);
            }
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }

    //generowanie widoku - przygotowanie danych dla szbalonu
    public function generateView() {
        global $cfg;

        $smarty = new Smarty();

        $smarty->assign('cfg',$cfg);
        $smarty->assign('app_url',$cfg->app_url); //++
        $smarty->assign('root_path',$cfg->root_path); //++

        $smarty->assign('page_title','Kalkulator Kredytowy');
        $smarty->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
        $smarty->assign('page_header','Kalkulator');

        $smarty->assign('params',$this->form);
        $smarty->assign('result',$this->res);
        $smarty->assign('messages',$this->msgs);

        $smarty->assign('current1',"current"); //rozwiązanie tymczasowe
        $smarty->assign('current2',"");
        $smarty->assign('current3',"");
        $smarty->display($cfg->root_path.'/app/calc/calc.tpl');
    }



}



?>