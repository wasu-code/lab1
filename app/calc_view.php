<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator Kredytowy</title>
	<link rel="stylesheet" href="<?php print(_APP_URL)?>/app/calc.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
</head>
<body>

<h1>Kalkulator Kredytowy</h1>
<div>Zalogowano jako: <?php print($role)?></div>

<div>
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div id="id_calc">
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<label for="id_kwota" >Kwota: </label>
	<input  id="id_kwota" type="text" name="kwota" value="<?php if(isset($kwota))print($kwota); ?>" /><br />
	
	<label for="id_lata" >Na ile lat:</label>
	<input  id="id_lata" type="text" name="lata" value="<?php if(isset($lata))print($lata); ?>" /><br/>
	
	<label for="id_oprocentowanie" >Oprocentowanie (w procentach)</label>
	<input  id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php if(isset($oprocentowanie))print($oprocentowanie); ?>"/><br/>
	
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol id="id_errors">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div id="id_results">
<?php echo 'Rata miesięczna: '.$result; ?>
</div>
<?php } ?>

</div>

<div id="disclaimer">Powyższy kalkulator może nie przedstawiać poprawnych wyników i został stworzony jedynie na potrzeby zajęć z języka PHP w celu ćwiczeń.</div>

</body>
</html>

