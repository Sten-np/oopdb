<?php
/* Smarty version 4.3.4, created on 2023-10-03 08:24:55
  from 'C:\Wamp.NET\sites\Project9\template\admin-dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_651bcfd761ad14_10004013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a43392b889aee5fe746512c3b49c2dd277279a' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\admin-dashboard.tpl',
      1 => 1696249511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651bcfd761ad14_10004013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1909102366651bcfd75ee2c2_40166348', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236916959651bcfd75ef892_51601406', "navmenu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1465206672651bcfd75f0fb5_43156913', "adm-dash");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_1909102366651bcfd75ee2c2_40166348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1909102366651bcfd75ee2c2_40166348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    GameHub | Admin Dashboard
<?php
}
}
/* {/block "title"} */
/* {block "navmenu"} */
class Block_236916959651bcfd75ef892_51601406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_236916959651bcfd75ef892_51601406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "navmenu"} */
/* {block "admin-information"} */
class Block_444172893651bcfd75f7863_93873429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Beheerder:
        <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=admin-information"><?php echo $_SESSION['user']['username'];?>
</a></button></h3>
    <?php
}
}
/* {/block "admin-information"} */
/* {block "admins"} */
class Block_276243349651bcfd75fb393_62443624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admins"} */
/* {block "users"} */
class Block_1259746620651bcfd75fc3f2_01269371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "users"} */
/* {block "admin-products"} */
class Block_1712276453651bcfd75fd400_87327036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-products"} */
/* {block "addprod"} */
class Block_1524032939651bcfd75feef0_21808437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "addprod"} */
/* {block "admins"} */
class Block_1395460155651bcfd7600444_06499954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admins"} */
/* {block "users"} */
class Block_1033845494651bcfd7601451_60092567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "users"} */
/* {block "admin-products"} */
class Block_882366406651bcfd76024f0_89208951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-products"} */
/* {block "addprod"} */
class Block_955453225651bcfd76191c3_68056805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "addprod"} */
/* {block "adm-dash"} */
class Block_1465206672651bcfd75f0fb5_43156913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'adm-dash' => 
  array (
    0 => 'Block_1465206672651bcfd75f0fb5_43156913',
  ),
  'admin-information' => 
  array (
    0 => 'Block_444172893651bcfd75f7863_93873429',
  ),
  'admins' => 
  array (
    0 => 'Block_276243349651bcfd75fb393_62443624',
    1 => 'Block_1395460155651bcfd7600444_06499954',
  ),
  'users' => 
  array (
    0 => 'Block_1259746620651bcfd75fc3f2_01269371',
    1 => 'Block_1033845494651bcfd7601451_60092567',
  ),
  'admin-products' => 
  array (
    0 => 'Block_1712276453651bcfd75fd400_87327036',
    1 => 'Block_882366406651bcfd76024f0_89208951',
  ),
  'addprod' => 
  array (
    0 => 'Block_1524032939651bcfd75feef0_21808437',
    1 => 'Block_955453225651bcfd76191c3_68056805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

        <style>
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="template/css/dashboard.css" rel="stylesheet">
    </head>
    <body>



    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?action=admin-dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=admin-products">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=admin-users">
                                <span data-feather="users"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=admin-admins">
                                <span data-feather="bar-chart-2"></span>
                                Admins
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=logout">
                                <span data-feather="bar-chart-2"></span>
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

<?php if ((isset($_SESSION['user']))) {?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_444172893651bcfd75f7863_93873429', "admin-information", $this->tplIndex);
?>

    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276243349651bcfd75fb393_62443624', "admins", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1259746620651bcfd75fc3f2_01269371', "users", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1712276453651bcfd75fd400_87327036', "admin-products", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1524032939651bcfd75feef0_21808437', "addprod", $this->tplIndex);
?>

</main>
<?php } else { ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1395460155651bcfd7600444_06499954', "admins", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1033845494651bcfd7601451_60092567', "users", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_882366406651bcfd76024f0_89208951', "admin-products", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_955453225651bcfd76191c3_68056805', "addprod", $this->tplIndex);
?>

</main>
<?php }?>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    </body>
    </html>
<?php
}
}
/* {/block "adm-dash"} */
}
