{extends file='default.tpl'}

{block name="content"}
<div style="width:90%; margin: 2em auto;">
	<a href="{$cfg->action_url}showCalc" class="pure-button">Powrót do kalkulatora</a>
	<a href="{$cfg->action_url}logOut" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
{/block}