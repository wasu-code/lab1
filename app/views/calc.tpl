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


{if ($messages->isError())}
	<h3> Wystąpiły błędy:</h4>
	<ol id="id_errors">
		{foreach $messages->getErrors() as $err }
			{strip} <!--usunięcie nadmiarowych białych znaków-->
				<li>{$err}</li>
			{/strip}
		{/foreach}
	</ol>
	<script>document.getElementById("id_errors").scrollIntoView();</script>
{/if}

{if ($messages->isInfo())}
	<h3> Informacje:</h4>
	<ol id="id_infos">
		{foreach $messages->getInfos() as $inf }
			{strip} <!--usunięcie nadmiarowych białych znaków-->
				<li>{$inf}</li>
			{/strip}
		{/foreach}
	</ol>
	<script>document.getElementById("id_infos").scrollIntoView();</script>
{/if}


{if (isset($result->result))}
	<div id="id_results">
		Rata miesięczna: {$result->result}
		<script>document.getElementById("id_results").scrollIntoView();</script>
	</div>
{/if}

</div>

{/block}


