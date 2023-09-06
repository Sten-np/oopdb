<?php
/* Smarty version 4.3.2, created on 2023-09-06 09:27:39
  from 'C:\Wamp.NET\sites\oopdb\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f829eb61ba38_81230266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22866d203007b7b81717902a88f9c5d7dc8a7930' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\layout.tpl',
      1 => 1693917981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f829eb61ba38_81230266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199432625164f829eb615b85_01615693', "title");
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
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91022645964f829eb618e35_23005601', "navmenu");
?>

                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82409593064f829eb61a939_34977838', "form");
?>

</div><br><br>


</body>
</html>
<?php }
/* {block "title"} */
class Block_199432625164f829eb615b85_01615693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_199432625164f829eb615b85_01615693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "navmenu"} */
class Block_91022645964f829eb618e35_23005601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_91022645964f829eb618e35_23005601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li><a href=""><span class="glyphicon glyphicon-user"></span> register</a></li><?php
}
}
/* {/block "navmenu"} */
/* {block "form"} */
class Block_82409593064f829eb61a939_34977838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_82409593064f829eb61a939_34977838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "form"} */
}
