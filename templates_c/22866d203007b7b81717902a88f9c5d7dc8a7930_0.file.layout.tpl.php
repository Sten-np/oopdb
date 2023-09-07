<?php
/* Smarty version 4.3.2, created on 2023-09-07 12:21:15
  from 'C:\Wamp.NET\sites\oopdb\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f9c03b0e1f32_52618901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22866d203007b7b81717902a88f9c5d7dc8a7930' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\layout.tpl',
      1 => 1694088854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f9c03b0e1f32_52618901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9579590864f9c03b0cb979_80181500', "title");
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
         <a href="index.php?action=homePage"><img class="navbar-brand" src="template/img/GameHub.png" ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php?action=productPage">Products</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116809686464f9c03b0d0406_82375538', "navmenu");
?>

                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16020627064f9c03b0d3c61_36977084', "form");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2436708764f9c03b0d78e8_35948897', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136387046464f9c03b0dad94_55990556', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61427021064f9c03b0de8f1_20437521', "contact");
?>



</div><br><br>


</body>
</html>
<?php }
/* {block "title"} */
class Block_9579590864f9c03b0cb979_80181500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9579590864f9c03b0cb979_80181500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "navmenu"} */
class Block_116809686464f9c03b0d0406_82375538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_116809686464f9c03b0d0406_82375538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li><a href="index.php?action=registerForm"><span class="glyphicon glyphicon-user"></span> register</a></li><?php
}
}
/* {/block "navmenu"} */
/* {block "form"} */
class Block_16020627064f9c03b0d3c61_36977084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_16020627064f9c03b0d3c61_36977084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "form"} */
/* {block "homePage"} */
class Block_2436708764f9c03b0d78e8_35948897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_2436708764f9c03b0d78e8_35948897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homePage"} */
/* {block "productPage"} */
class Block_136387046464f9c03b0dad94_55990556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_136387046464f9c03b0dad94_55990556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "contact"} */
class Block_61427021064f9c03b0de8f1_20437521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contact' => 
  array (
    0 => 'Block_61427021064f9c03b0de8f1_20437521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "contact"} */
}
