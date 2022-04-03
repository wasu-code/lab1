<?php
/* Smarty version 4.1.0, created on 2022-04-03 19:01:53
  from 'D:\xampp\htdocs\lab1\app\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249d30176bc67_64360298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660a3bca100cb160021805772a0ab1c280b219b9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\views\\about.tpl',
      1 => 1649004096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249d30176bc67_64360298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5126365176249d301768629_95997927', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'default.tpl');
}
/* {block "content"} */
class Block_5126365176249d301768629_95997927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5126365176249d301768629_95997927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/app/security/log.php?action=logOut" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
<?php
}
}
/* {/block "content"} */
}
