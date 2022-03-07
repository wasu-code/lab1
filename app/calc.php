<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST['kwota'];
$lata = $_REQUEST['lata']; 
$oprocentowanie = $_REQUEST['oprocentowanie'];

if (!(isset($kwota)&&isset($lata)&&isset($oprocentowanie))) {
    $messages[]="Błąd: Brak jakiegoś parametru";
}

if ($kwota=="") {
    $messages[]="Nie podano kwoty";
}
if ($lata=="") {
    $messages[]="Nie podano lat";
}
if ($oprocentowanie=="") {
    $messages[]="Nie podano oprocentowania";
}

//jeśli nie ma błędów - sprawdzenie czy wartości liczbowe
if (empty($messages)) {
    if (! is_numeric($kwota)) {
        $messages[]="Kwota nie jest liczbą";
    }
    if (! is_numeric($lata)) {
        $messages[]="Ilość lat nie jest liczbą";
    }
    if (! is_numeric($oprocentowanie)) {
        $messages[]="Oprocentowanie nie jest liczbą";
    }
}

//jeśli nie ma błędów - obliczenia
if (empty($messages)) {
    $kwota=round(floatval($kwota),2);
    $lata=round(floatval($lata),2);
    $oprocentowanie=floatval($oprocentowanie);
    //obliczenia
    $result=($kwota+$kwota*$oprocentowanie/100)/($lata*12);
    $result=round($result,2);
}




include 'calc_view.php';