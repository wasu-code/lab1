<?php
/* Smarty version 4.1.0, created on 2022-03-22 00:28:50
  from 'D:\xampp\htdocs\lab1\app\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62390a32f19d05_42066363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f76209e0d01edd17906b6aa306c9319084509621' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\about.tpl',
      1 => 1647877553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62390a32f19d05_42066363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123070797562390a32f17736_09229341', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/default.tpl");
}
/* {block "content"} */
class Block_123070797562390a32f17736_09229341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_123070797562390a32f17736_09229341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
<?php
}
}
/* {/block "content"} */
}
