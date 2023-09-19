<?php
<<<<<<< Updated upstream
/* Smarty version 4.3.2, created on 2023-09-19 10:24:13
=======
/* Smarty version 4.3.2, created on 2023-09-19 10:39:01
>>>>>>> Stashed changes
  from 'C:\Wamp.NET\sites\oopdb\template\homePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
<<<<<<< Updated upstream
  'unifunc' => 'content_65095aadc98939_91099885',
=======
  'unifunc' => 'content_65095e25ea8b59_06269555',
>>>>>>> Stashed changes
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693627cde1332b18542248a57e6de8ab22f19d93' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\homePage.tpl',
<<<<<<< Updated upstream
      1 => 1695032468,
=======
      1 => 1695112316,
>>>>>>> Stashed changes
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< Updated upstream
function content_65095aadc98939_91099885 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65095e25ea8b59_06269555 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> Stashed changes
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< Updated upstream
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119519452865095aadc95001_58027761', "title");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88136559365095e25ea4d72_22359533', "title");
>>>>>>> Stashed changes
?>



<?php 
<<<<<<< Updated upstream
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163539529265095aadc97075_74803865', "homePage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_119519452865095aadc95001_58027761 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69952487365095e25ea6f80_76734098', "homePage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_88136559365095e25ea4d72_22359533 extends Smarty_Internal_Block
>>>>>>> Stashed changes
{
public $subBlocks = array (
  'title' => 
  array (
<<<<<<< Updated upstream
    0 => 'Block_119519452865095aadc95001_58027761',
=======
    0 => 'Block_88136559365095e25ea4d72_22359533',
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
class Block_163539529265095aadc97075_74803865 extends Smarty_Internal_Block
=======
class Block_69952487365095e25ea6f80_76734098 extends Smarty_Internal_Block
>>>>>>> Stashed changes
{
public $subBlocks = array (
  'homePage' => 
  array (
<<<<<<< Updated upstream
    0 => 'Block_163539529265095aadc97075_74803865',
=======
    0 => 'Block_69952487365095e25ea6f80_76734098',
>>>>>>> Stashed changes
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
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
      <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h1 class="display-3 fw-bold"><img src="img/GameHub.png"></h1>
        <div class="d-flex gap-3 justify-content-center lead fw-normal">
          <a class="icon-link" href="#" style="color: orange; text-decoration: none; border-bottom: 1px solid orange">
            Buy ></a>
        </div>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" >
      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Playstation</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="img/playstation.png"></div>
      </div>

      <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="width: 33%">
        <div class="my-3 p-3" >
          <h2 class="display-5">Xbox</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="img/xbox.png"></div>
      </div>

      <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" >
        <div class="my-3 py-3">
          <h2 class="display-5">Nintendo</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="img/nintendo.png"></div>
      </div>

    </div>


<?php
}
}
/* {/block "homePage"} */
}
