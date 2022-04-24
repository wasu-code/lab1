{extends file="default.tpl"}

{block name="top"}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$cfg->action_url}personList" method="post">
	
	<fieldset>
		<legend>Opcje wyszukiwania</legend>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$cfg->action_root}personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["name"]}</td>
		<td>{$p["surname"]}</td>
		<td>{$p["birthdate"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$cfg->action_url}personEdit&id={$p['idperson']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$cfg->action_url}personDelete&id={$p['idperson']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{include file='messagebox.tpl'}

{/block}
