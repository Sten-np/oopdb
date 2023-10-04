<?php
/* Smarty version 4.3.2, created on 2023-10-04 10:42:54
  from 'C:\Wamp.NET\sites\oopdb\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d258e824e41_23919995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22866d203007b7b81717902a88f9c5d7dc8a7930' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\layout.tpl',
      1 => 1696335806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d258e824e41_23919995 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_977965437651d258e7e8374_97352793', "title");
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
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1295791741651d258e7eed88_64687749', "navmenu");
?>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1874572076651d258e801330_49147591', "userInformation");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804024143651d258e803014_26658958', "registerForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_701277272651d258e8048b8_48828475', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1905597322651d258e8072d0_46331228', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1444686545651d258e809775_81068345', "filterPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177703436651d258e80b9b4_65908171', "loginForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_216143208651d258e80dbb5_09518679', "admin-login");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_404660970651d258e80fdb0_39915491', "adm-dash");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_849009332651d258e811fa4_96599525', "userUpdateCredentials");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_364927394651d258e8142c8_83166026', "contact-page");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_778977090651d258e816450_81080864', "userChangeSuccesFull");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4244789651d258e81a7b9_29319398', "registerSuccesFull");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143007885651d258e81ce44_59450588', "notpermitted");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1307665697651d258e81ec08_44926979', "cartPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197836638651d258e820a28_11863511', "orderpage");
?>

</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1455600220651d258e822923_43898467', "footer");
?>


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
class Block_977965437651d258e7e8374_97352793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_977965437651d258e7e8374_97352793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "register"} */
class Block_113233939651d258e7fdc61_65161106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=registerForm">Sign-up</a></button><?php
}
}
/* {/block "register"} */
/* {block "navmenu"} */
class Block_1295791741651d258e7eed88_64687749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_1295791741651d258e7eed88_64687749',
  ),
  'register' => 
  array (
    0 => 'Block_113233939651d258e7fdc61_65161106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="index.php?action=cartPage">
                                <svg class="bi" width="16" height="16"><use xlink:href="#image-fill"/></svg>
                                Winkelwagen
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113233939651d258e7fdc61_65161106', "register", $this->tplIndex);
?>

                    <?php }?>
                </div>
            </div>
        </div>
</header>
<?php
}
}
/* {/block "navmenu"} */
/* {block "userInformation"} */
class Block_1874572076651d258e801330_49147591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userInformation' => 
  array (
    0 => 'Block_1874572076651d258e801330_49147591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userInformation"} */
/* {block "registerForm"} */
class Block_804024143651d258e803014_26658958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'registerForm' => 
  array (
    0 => 'Block_804024143651d258e803014_26658958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerForm"} */
/* {block "homePage"} */
class Block_701277272651d258e8048b8_48828475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_701277272651d258e8048b8_48828475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homePage"} */
/* {block "productPage"} */
class Block_1905597322651d258e8072d0_46331228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_1905597322651d258e8072d0_46331228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "filterPage"} */
class Block_1444686545651d258e809775_81068345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filterPage' => 
  array (
    0 => 'Block_1444686545651d258e809775_81068345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "filterPage"} */
/* {block "loginForm"} */
class Block_1177703436651d258e80b9b4_65908171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'loginForm' => 
  array (
    0 => 'Block_1177703436651d258e80b9b4_65908171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "loginForm"} */
/* {block "admin-login"} */
class Block_216143208651d258e80dbb5_09518679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin-login' => 
  array (
    0 => 'Block_216143208651d258e80dbb5_09518679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-login"} */
/* {block "adm-dash"} */
class Block_404660970651d258e80fdb0_39915491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'adm-dash' => 
  array (
    0 => 'Block_404660970651d258e80fdb0_39915491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "adm-dash"} */
/* {block "userUpdateCredentials"} */
class Block_849009332651d258e811fa4_96599525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userUpdateCredentials' => 
  array (
    0 => 'Block_849009332651d258e811fa4_96599525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userUpdateCredentials"} */
/* {block "contact-page"} */
class Block_364927394651d258e8142c8_83166026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contact-page' => 
  array (
    0 => 'Block_364927394651d258e8142c8_83166026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "contact-page"} */
/* {block "userChangeSuccesFull"} */
class Block_778977090651d258e816450_81080864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userChangeSuccesFull' => 
  array (
    0 => 'Block_778977090651d258e816450_81080864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userChangeSuccesFull"} */
/* {block "registerSuccesFull"} */
class Block_4244789651d258e81a7b9_29319398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'registerSuccesFull' => 
  array (
    0 => 'Block_4244789651d258e81a7b9_29319398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerSuccesFull"} */
/* {block "notpermitted"} */
class Block_143007885651d258e81ce44_59450588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notpermitted' => 
  array (
    0 => 'Block_143007885651d258e81ce44_59450588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "notpermitted"} */
/* {block "cartPage"} */
class Block_1307665697651d258e81ec08_44926979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartPage' => 
  array (
    0 => 'Block_1307665697651d258e81ec08_44926979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "cartPage"} */
/* {block "orderpage"} */
class Block_197836638651d258e820a28_11863511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'orderpage' => 
  array (
    0 => 'Block_197836638651d258e820a28_11863511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "orderpage"} */
/* {block "footer"} */
class Block_1455600220651d258e822923_43898467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1455600220651d258e822923_43898467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "footer"} */
}
