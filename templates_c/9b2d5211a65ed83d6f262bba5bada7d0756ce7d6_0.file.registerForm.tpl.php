<?php
/* Smarty version 4.3.2, created on 2023-09-08 10:27:15
  from 'C:\Wamp.NET\sites\oopdb\template\registerForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64faf70332cb02_40028077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b2d5211a65ed83d6f262bba5bada7d0756ce7d6' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\registerForm.tpl',
      1 => 1694168178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64faf70332cb02_40028077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159247235664faf703324808_32978423', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196424370664faf703328761_73329599', "navmenu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40409868564faf70332afb3_50117819', "form");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_159247235664faf703324808_32978423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_159247235664faf703324808_32978423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    GameHub | Register
<?php
}
}
/* {/block "title"} */
/* {block "navmenu"} */
class Block_196424370664faf703328761_73329599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_196424370664faf703328761_73329599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "navmenu"} */
/* {block "form"} */
class Block_40409868564faf70332afb3_50117819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_40409868564faf70332afb3_50117819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "form"} */
}
