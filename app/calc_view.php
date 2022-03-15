<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>



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


<?php 
include _ROOT_PATH.'/templates/bottom.php';
?>

