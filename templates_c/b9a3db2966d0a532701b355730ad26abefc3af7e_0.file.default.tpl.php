<?php
/* Smarty version 4.1.0, created on 2022-04-24 19:23:34
  from 'D:\xampp\htdocs\lab1\app\views\templates\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62658796713bb9_65917441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9a3db2966d0a532701b355730ad26abefc3af7e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\app\\views\\templates\\default.tpl',
      1 => 1650820985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62658796713bb9_65917441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html lang="pl">

<head>
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Z powodu kryzysu nie ma napisu" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/app/views/templates/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/css/main.css" />
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->app_url;?>
/index.php" id="logo"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "AAAaaaa" ?? null : $tmp);?>
</a></h1>

            <div><em>Zalogowano jako:
                    <?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>
                        gość
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>

                    <?php }?>
                </em></div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="<?php if (((isset($_smarty_tpl->tpl_vars['current']->value)) && $_smarty_tpl->tpl_vars['current']->value == 'calc')) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->action_url;?>
calcShow">Kalkulator</a></li>
                    <li class="<?php if (((isset($_smarty_tpl->tpl_vars['current']->value)) && $_smarty_tpl->tpl_vars['current']->value == 'about')) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->action_url;?>
aboutShow">O nas</a></li>
                    <li class="<?php if (((isset($_smarty_tpl->tpl_vars['current']->value)) && $_smarty_tpl->tpl_vars['current']->value == 'userlist')) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->action_url;?>
personList">Lista użytkowników</a></li>
                    <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value->action_url;?>
logOut">Wyloguj</a></li>
                </ul>
            </nav>

        </div>
        <div id="page-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_941392113626587967063c4_46665168', "top");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15944099496265879670af22_24299637', "content");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1416617536265879670e632_68315194', "bottom");
?>

        </div>
        <!-- Footer -->
        <div id="footer">
            <div id="disclaimer"> 🛈 Powyższy kalkulator może nie przedstawiać poprawnych wyników i został stworzony
                jedynie w celach edukacyjnych.
            </div>



            <!-- Copyright -->
            <div class="copyright">
                <ul class="menu">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block "top"} */
class Block_941392113626587967063c4_46665168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_941392113626587967063c4_46665168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top"} */
/* {block "content"} */
class Block_15944099496265879670af22_24299637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15944099496265879670af22_24299637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nie udało się załadować zawartości<?php
}
}
/* {/block "content"} */
/* {block "bottom"} */
class Block_1416617536265879670e632_68315194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1416617536265879670e632_68315194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nie udało się załadować zawartości<?php
}
}
/* {/block "bottom"} */
}
