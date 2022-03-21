<?php
/* Smarty version 4.1.0, created on 2022-03-21 16:23:31
  from 'D:\xampp\htdocs\lab1\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62389873d35559_49097215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34aaa25beb0f2d4b2c547dea0c3d6e47a6ba2ed2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\calc.tpl',
      1 => 1647876049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62389873d35559_49097215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14671040562389873d24e71_05751566', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/default.tpl");
}
/* {block "content"} */
class Block_14671040562389873d24e71_05751566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14671040562389873d24e71_05751566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="id_calc">
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<label for="id_kwota" >Kwota: </label>
	<input  id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['kwota'];?>
" /><br />
	
	<label for="id_lata" >Na ile lat:</label>
	<input  id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['lata'];?>
" /><br/>
	
	<label for="id_oprocentowanie" >Oprocentowanie (w procentach)</label>
	<input  id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['op'];?>
"/><br/>
	
	<input type="submit" value="Oblicz" />
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
			 <!--usunięcie białych snaków nadwmiarowych--><li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
		<?php echo '<script'; ?>
>document.getElementById("id_errors").scrollIntoView();<?php echo '</script'; ?>
>
	<?php }
}?>


<?php if (((isset($_smarty_tpl->tpl_vars['result']->value)))) {?>
<div id="id_results">
Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

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
