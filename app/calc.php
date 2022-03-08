<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

$kwota=null;
$lata=null;
$oprocentowanie=null;
$messages=array();
$result=null;

getParams($kwota,$lata,$oprocentowanie);
if (validate($kwota,$lata,$oprocentowanie,$messages)) {
    process($kwota,$lata,$oprocentowanie,$messages,$result);
}



#Funkcje

function getParams(&$kwota,&$lata,&$oprocentowanie) {
    $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null ;
    $lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null; 
    $oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

function validate(&$kwota,&$lata,&$oprocentowanie,&$messages) {
    if (!(isset($kwota)&&isset($lata)&&isset($oprocentowanie))) {
        //$messages[]="Błąd: Brak jakiegoś parametru";
        return false;
    }

    if ($kwota=="") { 
        $messages[]="Nie podano kwoty";
        return false;
    }
    if ($lata=="") {
        $messages[]="Nie podano lat";
        return false;
    }
    if ($oprocentowanie=="") {
        $messages[]="Nie podano oprocentowania";
        return false;
    }

    //jeśli nie ma błędów - sprawdzenie czy wartości liczbowe
    if (empty($messages)) {
        if (! is_numeric($kwota)) {
            $messages[]="Kwota nie jest liczbą";
            return false;
        }
        if (! is_numeric($lata)) {
            $messages[]="Ilość lat nie jest liczbą";
            return false;
        }
        if (! is_numeric($oprocentowanie)) {
            $messages[]="Oprocentowanie nie jest liczbą";
            return false;
        }
    }
    return true;
}

//jeśli nie ma błędów - obliczenia
function process(&$kwota,&$lata,&$oprocentowanie,&$messages,&$result) {
    global $role;
    if ($role=='admin') {
        $messages[]='Administrator nie powinien wykonywać obliczeń. Użyj konta gościa';
    } else {
        $kwota=round(floatval($kwota),2);
        $lata=round(floatval($lata),2);
        $oprocentowanie=floatval($oprocentowanie);
        //obliczenia
        $result=($kwota+$kwota*$oprocentowanie/100)/($lata*12);
        $result=round($result,2);
    }
}



include 'calc_view.php';