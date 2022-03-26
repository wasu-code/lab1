{extends file=$cfg->root_path|cat:'/templates/default.tpl'}

{block name="content"}


<div style="width:90%; margin: 2em auto;">

<form action="{$cfg->app_url}/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="{$form['login']}" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	


{if (isset($messages)) }
	{if (count ( $messages ) > 0) }
		<ol id="id_errors">
		{foreach from=$messages item=$msg  }
			<li>{$msg}</li>
		{/foreach}
		</ol>
	{/if}
{/if}


</div>

{/block}