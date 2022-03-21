<?php
/* Smarty version 4.1.0, created on 2022-03-21 16:37:55
  from 'D:\xampp\htdocs\lab1\app\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62389bd3122f98_47681215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f76209e0d01edd17906b6aa306c9319084509621' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\about.tpl',
      1 => 1647876973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62389bd3122f98_47681215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24546316162389bd311d3a0_20646990', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/default.tpl");
}
/* {block "content"} */
class Block_24546316162389bd311d3a0_20646990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_24546316162389bd311d3a0_20646990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
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
