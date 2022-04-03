<?php
/* Smarty version 4.1.0, created on 2022-04-03 18:53:27
  from 'D:\xampp\htdocs\lab1\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249d107e9c061_77263066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e438d199c113563a8cd7143a6a852f8a6b681c72' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\views\\calc.tpl',
      1 => 1649004073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249d107e9c061_77263066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18217831156249d107e8b722_25526611', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'default.tpl');
}
/* {block "content"} */
class Block_18217831156249d107e8b722_25526611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18217831156249d107e8b722_25526611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="id_calc">
<form action="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->action_root;?>
calcCompute" method="post">
	<label for="id_kwota" >Kwota: </label>
	<input  id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['params']->value->kwota;?>
" /><br />
	
	<label for="id_lata" >Na ile lat:</label>
	<input  id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['params']->value->lata;?>
" /><br/>
	
	<label for="id_oprocentowanie" >Oprocentowanie (w procentach)</label>
	<input  id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['params']->value->op;?>
"/><br/>
	
	<input type="submit" value="Oblicz" />
</form>	


<?php if (($_smarty_tpl->tpl_vars['messages']->value->isError())) {?>
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
	</ol>
	<?php echo '<script'; ?>
>document.getElementById("id_errors").scrollIntoView();<?php echo '</script'; ?>
>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['messages']->value->isInfo())) {?>
	<h3> Informacje:</h4>
	<ol id="id_infos">
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
>document.getElementById("id_infos").scrollIntoView();<?php echo '</script'; ?>
>
<?php }?>


<?php if (((isset($_smarty_tpl->tpl_vars['result']->value->result)))) {?>
	<div id="id_results">
		Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

		<?php echo '<script'; ?>
>document.getElementById("id_results").scrollIntoView();<?php echo '</script'; ?>
>
	</div>
<?php }?>

</div>

<?php
}
}
/* {/block "content"} */
}
