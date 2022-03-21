<?php
/* Smarty version 4.1.0, created on 2022-03-21 16:37:55
  from 'D:\xampp\htdocs\lab1\templates\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62389bd31313c5_09537795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cfaf9485fcb16cf586cac4d1ccb5bc45aea0292' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lab1\\templates\\default.tpl',
      1 => 1647877071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62389bd31313c5_09537795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html lang="pl">

<head>
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Z powodu kryzysu nie ma napisu" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php" id="logo"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "AAAaaaa" ?? null : $tmp);?>
</a></h1>

            <div><em>Zalogowano jako:
                    <?php echo '<?php'; ?>
 print($role)<?php echo '?>'; ?>

                </em></div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Kalkulator</a></li>
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/about.php">Inna Strona</a></li>
                    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php">Wyloguj</a></li>
                </ul>
            </nav>

        </div>
        <div id="page-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154964844162389bd3130cc5_52343079', "content");
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
/* {block "content"} */
class Block_154964844162389bd3130cc5_52343079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154964844162389bd3130cc5_52343079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nie udało się załadować zawartości<?php
}
}
/* {/block "content"} */
}
