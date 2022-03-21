<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

$params=array();
$messages=array();
$result=null;

getParams($params);
if (validate($params,$messages)) {
    process($params,$messages,$result);
}



#Funkcje

function getParams(&$params) {
    $params['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null ;
    $params['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null; 
    $params['op'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

function validate(&$params,&$messages) {
    if (!(isset($params['kwota'])&&isset($params['lata'])&&isset($params['op']))) {
        //$messages[]="Błąd: Brak jakiegoś parametru";
        return false;
    }

    if ($params['kwota']=="") { 
        $messages[]="Nie podano kwoty";
        return false;
    }
    if ($params['lata']=="") {
        $messages[]="Nie podano lat";
        return false;
    }
    if ($params['op']=="") {
        $messages[]="Nie podano oprocentowania";
        return false;
    }

    //jeśli nie ma błędów - sprawdzenie czy wartości liczbowe
    if (empty($messages)) {
        if (! is_numeric($params['kwota'])) {
            $messages[]="Kwota nie jest liczbą";
            return false;
        }
        if (! is_numeric($params['lata'])) {
            $messages[]="Ilość lat nie jest liczbą";
            return false;
        }
        if (! is_numeric($params['op'])) {
            $messages[]="Oprocentowanie nie jest liczbą";
            return false;
        }
    }
    return true;
}

//jeśli nie ma błędów - obliczenia
function process(&$params,&$messages,&$result) {
    global $role;
    if ($role=='admin') {
        $messages[]='Administrator nie powinien wykonywać obliczeń. Użyj konta gościa';
    } else {
        $params['kwota']=round(floatval($params['kwota']),2);
        $params['lata']=round(floatval($params['lata']),2);
        $params['op']=floatval($params['op']);
        //obliczenia
        $result=($params['kwota']+$params['kwota']*$params['op']/100)/($params['lata']*12);
        $result=round($result,2);
    }
}

//generowanie widoku - przygotowanie danych dla szbalonu
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
$smarty->assign('page_header','exmple');

$smarty->assign('params',$params);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);


$smarty->display(_ROOT_PATH.'/app/calc.tpl')
//include 'calc_view.php';
?>