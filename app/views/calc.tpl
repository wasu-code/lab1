{extends file='default.tpl'}

{block name="content"}

<div id="id_calc">
<form action="{$cfg->action_root}calcCompute" method="post">
	<label for="id_kwota" >Kwota: </label>
	<input  id="id_kwota" type="text" name="kwota" value="{$params->kwota}" /><br />
	
	<label for="id_lata" >Na ile lat:</label>
	<input  id="id_lata" type="text" name="lata" value="{$params->lata}" /><br/>
	
	<label for="id_oprocentowanie" >Oprocentowanie (w procentach)</label>
	<input  id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$params->op}"/><br/>
	
	<input type="submit" value="Oblicz" />
</form>	


{include file='messagebox.tpl'}


{if (isset($result->result))}
	<div id="id_results">
		Rata miesięczna: {$result->result}
		<script>document.getElementById("id_results").scrollIntoView();</script>
	</div>
{/if}

</div>

{/block}


