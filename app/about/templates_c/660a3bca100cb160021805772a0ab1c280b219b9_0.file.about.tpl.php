<?php
/* Smarty version 4.1.0, created on 2022-04-10 14:49:42
  from 'D:\xampp\htdocs\lab1\app\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6252d2666a92b6_77016179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660a3bca100cb160021805772a0ab1c280b219b9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\views\\about.tpl',
      1 => 1649594974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6252d2666a92b6_77016179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14507283816252d2666a3564_05940186', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'default.tpl');
}
/* {block "content"} */
class Block_14507283816252d2666a3564_05940186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14507283816252d2666a3564_05940186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->action_utl;?>
logOut" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
<?php
}
}
/* {/block "content"} */
}
