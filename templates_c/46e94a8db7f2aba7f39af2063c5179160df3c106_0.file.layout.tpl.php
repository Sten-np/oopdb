<?php
/* Smarty version 4.3.2, created on 2023-09-11 10:20:35
  from 'C:\Wamp.NET\sites\Project9\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fee9f372abc3_73900495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e94a8db7f2aba7f39af2063c5179160df3c106' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\layout.tpl',
      1 => 1694177633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fee9f372abc3_73900495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178454786764fee9f3724ec0_13095909', "title");
?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
            position: fixed;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <li><a href="index.php"><img class="navbar-brand" src="template/img/GameHub.png"></a></li>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php?action=productPage">Products</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?action=loginForm"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94053993564fee9f3727021_91969351', "navmenu");
?>

                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157875603764fee9f3728164_63700275', "form");
?>

</div><br><br>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17590019164fee9f3729134_12700288', "productPage");
?>

</div>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27938226664fee9f372a0a3_48626694', "loginform");
?>

</div>


</body>
</html>
<?php }
/* {block "title"} */
class Block_178454786764fee9f3724ec0_13095909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_178454786764fee9f3724ec0_13095909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "navmenu"} */
class Block_94053993564fee9f3727021_91969351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_94053993564fee9f3727021_91969351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li><a href="index.php?action=registerForm"><span class="glyphicon glyphicon-user"></span> register</a></li><?php
}
}
/* {/block "navmenu"} */
/* {block "form"} */
class Block_157875603764fee9f3728164_63700275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_157875603764fee9f3728164_63700275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "form"} */
/* {block "productPage"} */
class Block_17590019164fee9f3729134_12700288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_17590019164fee9f3729134_12700288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "loginform"} */
class Block_27938226664fee9f372a0a3_48626694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'loginform' => 
  array (
    0 => 'Block_27938226664fee9f372a0a3_48626694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "loginform"} */
}
