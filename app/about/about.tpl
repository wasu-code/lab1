{extends file=$cfg->root_path|cat:'/templates/default.tpl'}

{block name="content"}
<div style="width:90%; margin: 2em auto;">
	<a href="{$cfg->app_url}/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="{$cfg->app_url}/app/security/log.php?action=logOut" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
{/block}