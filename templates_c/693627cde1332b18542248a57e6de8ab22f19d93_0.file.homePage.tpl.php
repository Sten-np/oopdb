<?php
<<<<<<< HEAD
/* Smarty version 4.3.2, created on 2023-09-11 14:47:32
=======
/* Smarty version 4.3.2, created on 2023-09-12 11:50:26
>>>>>>> productPage
  from 'C:\Wamp.NET\sites\oopdb\template\homePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
<<<<<<< HEAD
  'unifunc' => 'content_64ff0c64472e56_37783061',
=======
  'unifunc' => 'content_650050829683e4_57957543',
>>>>>>> productPage
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693627cde1332b18542248a57e6de8ab22f19d93' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\homePage.tpl',
<<<<<<< HEAD
      1 => 1694431114,
=======
      1 => 1694506443,
>>>>>>> productPage
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64ff0c64472e56_37783061 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_650050829683e4_57957543 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> productPage
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67722016764ff0c6446f705_65820321', "title");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160125471665005082965b36_83063888', "title");
>>>>>>> productPage
?>



<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36118167064ff0c64471588_62431424', "homePage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_67722016764ff0c6446f705_65820321 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131924550265005082967071_90606086', "homePage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_160125471665005082965b36_83063888 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_67722016764ff0c6446f705_65820321',
=======
    0 => 'Block_160125471665005082965b36_83063888',
>>>>>>> productPage
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
<<<<<<< HEAD
class Block_36118167064ff0c64471588_62431424 extends Smarty_Internal_Block
=======
class Block_131924550265005082967071_90606086 extends Smarty_Internal_Block
>>>>>>> productPage
{
public $subBlocks = array (
  'homePage' => 
  array (
<<<<<<< HEAD
    0 => 'Block_36118167064ff0c64471588_62431424',
=======
    0 => 'Block_131924550265005082967071_90606086',
>>>>>>> productPage
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
