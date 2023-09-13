<?php
/* Smarty version 4.3.2, created on 2023-09-13 11:23:27
  from 'C:\Wamp.NET\sites\oopdb\template\homePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65017f8f9821a9_69046699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693627cde1332b18542248a57e6de8ab22f19d93' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\homePage.tpl',
      1 => 1694596023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65017f8f9821a9_69046699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37544698165017f8f97e210_04838258', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64474118065017f8f9803a6_44151368', "homePage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_37544698165017f8f97e210_04838258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_37544698165017f8f97e210_04838258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  GameHub | Home
<?php
}
}
/* {/block "title"} */
/* {block "homePage"} */
class Block_64474118065017f8f9803a6_44151368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_64474118065017f8f9803a6_44151368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    .d-md-flex flex-md-equal w-100 my-md-3 ps-md-3{
      display: inline-block;
    }

    img{
      height: 100%;
      width: 75%;
      object-fit: contain;
    }

  </style>
  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary" >
      <div class="col-md-6 p-lg-5 mx-auto my-5" href="#">
        <h1 class="display-3 fw-bold"><img src="../img/GameHub.png"></h1>
        <div class="d-flex gap-3 justify-content-center lead fw-normal">
          <a class="icon-link" href="index.php?action=productPage" style="color: orange; text-decoration: none; border-bottom: 1px solid orange">All products ></a>
        </div>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" >
      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3" >
          <h2 class="display-5">Playstation</h2>
          <a class="lead" href="index.php?action=playstationPage" style="color: orange; text-decoration: none; border-bottom: 1px solid orange">Buy ></a>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="img/playstation.png"></div>
      </div>

      <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="width: 35%" >
        <div class="my-3 p-3" >
          <h2 class="display-5">Xbox</h2>
          <a class="lead" href="index.php?action=xboxPage" style="color: orange; text-decoration: none; border-bottom: 1px solid orange">Buy ></a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="img/xbox.png"></div>
      </div>

      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" >
        <div class="my-3 py-3">
          <h2 class="display-5">Nintendo</h2>
          <a class="lead" href="index.php?action=nintendoPage" style="color: orange; text-decoration: none; border-bottom: 1px solid orange">Buy ></a>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="img/nintendo.png"></div>
      </div>

    </div>


<?php
}
}
/* {/block "homePage"} */
}
