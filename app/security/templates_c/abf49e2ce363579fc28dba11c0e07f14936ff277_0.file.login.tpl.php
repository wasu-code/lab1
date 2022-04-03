<?php
/* Smarty version 4.1.0, created on 2022-04-03 19:05:47
  from 'D:\xampp\htdocs\lab1\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249d3eb87f466_00865227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abf49e2ce363579fc28dba11c0e07f14936ff277' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\views\\login.tpl',
      1 => 1649004117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249d3eb87f466_00865227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11300056249d3eb873149_70995829', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'default.tpl');
}
/* {block "content"} */
class Block_11300056249d3eb873149_70995829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11300056249d3eb873149_70995829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div style="width:90%; margin: 2em auto;">

<form action="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/app/security/log.php?action=logIn" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login"  />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	


<?php if (($_smarty_tpl->tpl_vars['messages']->value->isMessage())) {?>
	<h3> Wystąpiły błędy:</h4>
	<ol id="id_errors">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
			 <!--usunięcie nadmiarowych białych znaków--><li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
			 <!--usunięcie nadmiarowych białych znaków--><li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<?php echo '<script'; ?>
>document.getElementById("id_errors").scrollIntoView();<?php echo '</script'; ?>
>
<?php }?>


</div>

<?php
}
}
/* {/block "content"} */
}
