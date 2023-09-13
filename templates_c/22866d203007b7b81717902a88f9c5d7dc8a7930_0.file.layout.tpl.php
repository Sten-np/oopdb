<?php
<<<<<<< HEAD
/* Smarty version 4.3.2, created on 2023-09-11 14:47:32
=======
/* Smarty version 4.3.2, created on 2023-09-12 11:50:26
>>>>>>> productPage
  from 'C:\Wamp.NET\sites\oopdb\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
<<<<<<< HEAD
  'unifunc' => 'content_64ff0c64493dd6_24490870',
=======
  'unifunc' => 'content_650050829f8401_73259856',
>>>>>>> productPage
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22866d203007b7b81717902a88f9c5d7dc8a7930' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\layout.tpl',
<<<<<<< HEAD
      1 => 1694432865,
=======
      1 => 1694506350,
>>>>>>> productPage
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64ff0c64493dd6_24490870 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_650050829f8401_73259856 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> productPage
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
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150922320064ff0c644843a1_59611240', "title");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1396426689650050829f04f6_61389779', "title");
>>>>>>> productPage
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

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
            z-index: 1500;
        }
        </style>

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
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2"><a style="text-decoration: none;  color: inherit" href="index.php?action=loginForm">Login</a></button>
            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129068844764ff0c644881c1_68975005', "register");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404288696650050829f3115_21029990', "register");
>>>>>>> productPage
?>

        </div>

        </div>
        </div>
        </header>



<div class="container-fluid">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178980829264ff0c64489b04_75870579', "registerForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152669714164ff0c6448b2b7_38004045', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26527176264ff0c6448c9e1_27877596', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25240689664ff0c6448e107_96027752', "loginForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116594229564ff0c6448f855_35574530', "productPage");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1785424718650050829f4327_22359228', "registerForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1235479264650050829f5400_25829039', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_563691084650050829f64b6_27588087', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_892791729650050829f75a1_79311500', "loginForm");
>>>>>>> productPage
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99647767964ff0c64490f90_83546322', "admin-login");
?>


<<<<<<< HEAD
</div>
=======
    <div class="container">
        <footer class="py-5 " >
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>
>>>>>>> productPage

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180992085564ff0c644926c9_74840514', "footer");
?>


<!--<?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
/* {block "title"} */
<<<<<<< HEAD
class Block_150922320064ff0c644843a1_59611240 extends Smarty_Internal_Block
=======
class Block_1396426689650050829f04f6_61389779 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_150922320064ff0c644843a1_59611240',
=======
    0 => 'Block_1396426689650050829f04f6_61389779',
>>>>>>> productPage
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "register"} */
<<<<<<< HEAD
class Block_129068844764ff0c644881c1_68975005 extends Smarty_Internal_Block
=======
class Block_1404288696650050829f3115_21029990 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'register' => 
  array (
<<<<<<< HEAD
    0 => 'Block_129068844764ff0c644881c1_68975005',
=======
    0 => 'Block_1404288696650050829f3115_21029990',
>>>>>>> productPage
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none;  color: inherit" href="index.php?action=registerForm">Sign-up</a></button><?php
}
}
/* {/block "register"} */
/* {block "registerForm"} */
<<<<<<< HEAD
class Block_178980829264ff0c64489b04_75870579 extends Smarty_Internal_Block
=======
class Block_1785424718650050829f4327_22359228 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'registerForm' => 
  array (
<<<<<<< HEAD
    0 => 'Block_178980829264ff0c64489b04_75870579',
=======
    0 => 'Block_1785424718650050829f4327_22359228',
>>>>>>> productPage
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerForm"} */
/* {block "homePage"} */
<<<<<<< HEAD
class Block_152669714164ff0c6448b2b7_38004045 extends Smarty_Internal_Block
=======
class Block_1235479264650050829f5400_25829039 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'homePage' => 
  array (
<<<<<<< HEAD
    0 => 'Block_152669714164ff0c6448b2b7_38004045',
=======
    0 => 'Block_1235479264650050829f5400_25829039',
>>>>>>> productPage
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homePage"} */
/* {block "productPage"} */
<<<<<<< HEAD
class Block_26527176264ff0c6448c9e1_27877596 extends Smarty_Internal_Block
=======
class Block_563691084650050829f64b6_27588087 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'productPage' => 
  array (
<<<<<<< HEAD
    0 => 'Block_26527176264ff0c6448c9e1_27877596',
=======
    0 => 'Block_563691084650050829f64b6_27588087',
>>>>>>> productPage
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "loginForm"} */
<<<<<<< HEAD
class Block_25240689664ff0c6448e107_96027752 extends Smarty_Internal_Block
=======
class Block_892791729650050829f75a1_79311500 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'loginForm' => 
  array (
<<<<<<< HEAD
    0 => 'Block_25240689664ff0c6448e107_96027752',
=======
    0 => 'Block_892791729650050829f75a1_79311500',
>>>>>>> productPage
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "loginForm"} */
<<<<<<< HEAD
/* {block "productPage"} */
class Block_116594229564ff0c6448f855_35574530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_116594229564ff0c6448f855_35574530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "admin-login"} */
class Block_99647767964ff0c64490f90_83546322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin-login' => 
  array (
    0 => 'Block_99647767964ff0c64490f90_83546322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-login"} */
/* {block "footer"} */
class Block_180992085564ff0c644926c9_74840514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_180992085564ff0c644926c9_74840514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php?action=admin-login" class="nav-link p-0 text-body-secondary">Inloggen als beheerder</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
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
=======
>>>>>>> productPage
}
