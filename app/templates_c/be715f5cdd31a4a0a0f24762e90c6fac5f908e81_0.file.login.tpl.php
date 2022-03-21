<?php
/* Smarty version 4.1.0, created on 2022-03-22 00:28:58
  from 'D:\xampp\htdocs\lab1\app\security\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62390a3a5f7c80_26420001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be715f5cdd31a4a0a0f24762e90c6fac5f908e81' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\security\\login.tpl',
      1 => 1647902974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62390a3a5f7c80_26420001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201712791262390a3a5edc34_10456958', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/default.tpl");
}
/* {block "content"} */
class Block_201712791262390a3a5edc34_10456958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_201712791262390a3a5edc34_10456958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div style="width:90%; margin: 2em auto;">

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	


<?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?>
	<?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?>
		<ol id="id_errors">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>


</div>

<?php
}
}
/* {/block "content"} */
}
