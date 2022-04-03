{extends file='default.tpl'}

{block name="content"}


<div style="width:90%; margin: 2em auto;">

<form action="{$cfg->app_url}/app/security/log.php?action=logIn" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login"  />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	


{if ($messages->isMessage())}
	<h3> Wystąpiły błędy:</h4>
	<ol id="id_errors">
		{foreach $messages->getErrors() as $err }
			{strip} <!--usunięcie nadmiarowych białych znaków-->
				<li>{$err}</li>
			{/strip}
		{/foreach}
		{foreach $messages->getInfos() as $inf }
			{strip} <!--usunięcie nadmiarowych białych znaków-->
				<li>{$inf}</li>
			{/strip}
		{/foreach}
	</ol>
	<script>document.getElementById("id_errors").scrollIntoView();</script>
{/if}


</div>

{/block}