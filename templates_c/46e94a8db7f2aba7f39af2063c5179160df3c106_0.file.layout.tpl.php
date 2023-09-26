<?php
/* Smarty version 4.3.4, created on 2023-09-26 10:20:12
  from 'C:\Wamp.NET\sites\Project9\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6512b05ca06571_52990293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e94a8db7f2aba7f39af2063c5179160df3c106' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\layout.tpl',
      1 => 1695718509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6512b05ca06571_52990293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4403444406512b05c9efb29_58734290', "title");
?>
</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        /*dropdown button*/
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            z-index: 1;
            transition: all 1s;
        }

        .dropdown-content:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: orange;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                </a>


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php?action=homePage" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="index.php?action=productPage" class="nav-link px-2 text-white">Products</a></li>
                    <li><a href="index.php?action=playstationPage" class="nav-link px-2 text-white">Playstation</a></li>
                    <li><a href="index.php?action=xboxPage" class="nav-link px-2 text-white">Xbox</a></li>
                    <li><a href="index.php?action=nintendoPage" class="nav-link px-2 text-white">Nintendo</a></li>
                    <li><a href="index.php?action=contact" class="nav-link px-2 text-white">FAQ</a></li>
                </ul>

                <form method="POST" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="index.php?action=search" autocomplete="off">
                    <input type="search" name="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>


                <div class="text-end">
                    <?php if ((isset($_SESSION['user']))) {?>
                    <div class="dropdown">
                        <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=userInformation"><?php echo $_SESSION['user']['username'];?>
</a></button>

                        <div class="dropdown-content">
                    <ul class="dropdown-menu d-block position-static mx-0 border-0 shadow w-220px" data-bs-theme="dark">
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="index.php?action=userInformation">
                                <svg class="bi" width="16" height="16"><use xlink:href="#files"/></svg>
                                Mijn gegevens
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#image-fill"/></svg>
                                Photos
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#film"/></svg>
                                Movies
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#music-note-beamed"/></svg>
                                Music
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#joystick"/></svg>
                                Games
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="index.php?action=logout">
                                <svg class="bi" width="16" height="16"><use xlink:href="#trash"/></svg>
                                Uitloggen
                            </a>
                        </li>
                    </ul>
                </div>
                        </div>
                    <?php } else { ?>
                        <button type="button" class="btn btn-outline-light me-2"><a style="text-decoration: none; color: inherit" href="index.php?action=loginForm">Login</a></button>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9951227436512b05c9f8eb1_84603418', "register");
?>

                    <?php }?>
                </div>
            </div>
        </div>
</header>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16120595816512b05c9fa688_32002506', "userInformation");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157344256512b05c9fb707_07740894', "registerForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20134541056512b05c9fc6e3_09621051', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3962183816512b05c9fd6a4_64814175', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2864852386512b05c9fe657_68646487', "filterPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10064050436512b05c9ff622_12706741', "loginForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1885561006512b05ca005b4_34649541', "admin-login");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5130673996512b05ca01550_03591174', "adm-dash");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5663617496512b05ca024f6_69496778', "userUpdateCredentials");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19549501056512b05ca034b1_02989595', "contact-page");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4373604186512b05ca04447_55553103', "userChangeSuccesFull");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4867085296512b05ca053d9_07229375', "notpermitted");
?>

</div>

    <div class="container">
        <footer class="py-5 " >
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php?action=admin-login" class="nav-link p-0 text-body-secondary">Admin login</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>


                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5 >Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button" style="background-color: orange; color: black; border: none">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </div>

    <!--<?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    </body>
</html>

<?php }
/* {block "title"} */
class Block_4403444406512b05c9efb29_58734290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4403444406512b05c9efb29_58734290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "register"} */
class Block_9951227436512b05c9f8eb1_84603418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_9951227436512b05c9f8eb1_84603418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=registerForm">Sign-up</a></button><?php
}
}
/* {/block "register"} */
/* {block "userInformation"} */
class Block_16120595816512b05c9fa688_32002506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userInformation' => 
  array (
    0 => 'Block_16120595816512b05c9fa688_32002506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userInformation"} */
/* {block "registerForm"} */
class Block_19157344256512b05c9fb707_07740894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'registerForm' => 
  array (
    0 => 'Block_19157344256512b05c9fb707_07740894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerForm"} */
/* {block "homePage"} */
class Block_20134541056512b05c9fc6e3_09621051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_20134541056512b05c9fc6e3_09621051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homePage"} */
/* {block "productPage"} */
class Block_3962183816512b05c9fd6a4_64814175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_3962183816512b05c9fd6a4_64814175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "filterPage"} */
class Block_2864852386512b05c9fe657_68646487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filterPage' => 
  array (
    0 => 'Block_2864852386512b05c9fe657_68646487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "filterPage"} */
/* {block "loginForm"} */
class Block_10064050436512b05c9ff622_12706741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'loginForm' => 
  array (
    0 => 'Block_10064050436512b05c9ff622_12706741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "loginForm"} */
/* {block "admin-login"} */
class Block_1885561006512b05ca005b4_34649541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin-login' => 
  array (
    0 => 'Block_1885561006512b05ca005b4_34649541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-login"} */
/* {block "adm-dash"} */
class Block_5130673996512b05ca01550_03591174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'adm-dash' => 
  array (
    0 => 'Block_5130673996512b05ca01550_03591174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "adm-dash"} */
/* {block "userUpdateCredentials"} */
class Block_5663617496512b05ca024f6_69496778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userUpdateCredentials' => 
  array (
    0 => 'Block_5663617496512b05ca024f6_69496778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userUpdateCredentials"} */
/* {block "contact-page"} */
class Block_19549501056512b05ca034b1_02989595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contact-page' => 
  array (
    0 => 'Block_19549501056512b05ca034b1_02989595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "contact-page"} */
/* {block "userChangeSuccesFull"} */
class Block_4373604186512b05ca04447_55553103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userChangeSuccesFull' => 
  array (
    0 => 'Block_4373604186512b05ca04447_55553103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userChangeSuccesFull"} */
/* {block "notpermitted"} */
class Block_4867085296512b05ca053d9_07229375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notpermitted' => 
  array (
    0 => 'Block_4867085296512b05ca053d9_07229375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "notpermitted"} */
}
