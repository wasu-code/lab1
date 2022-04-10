<?php
/* Smarty version 4.1.0, created on 2022-04-10 14:47:55
  from 'D:\xampp\htdocs\lab1\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6252d1fb416718_37980183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e438d199c113563a8cd7143a6a852f8a6b681c72' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\views\\calc.tpl',
      1 => 1649587027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messagebox.tpl' => 1,
  ),
),false)) {
function content_6252d1fb416718_37980183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4457406476252d1fb406244_86424003', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'default.tpl');
}
/* {block "content"} */
class Block_4457406476252d1fb406244_86424003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4457406476252d1fb406244_86424003',
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


<?php $_smarty_tpl->_subTemplateRender('file:messagebox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
