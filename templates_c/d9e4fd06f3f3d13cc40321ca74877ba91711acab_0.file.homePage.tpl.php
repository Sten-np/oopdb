<?php
/* Smarty version 4.3.2, created on 2023-09-12 09:26:38
  from 'C:\Wamp.NET\sites\Project9\template\homePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65002ece92dc02_56749375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e4fd06f3f3d13cc40321ca74877ba91711acab' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\homePage.tpl',
      1 => 1694432312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65002ece92dc02_56749375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171240519665002ece928868_64262846', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180095985465002ece92b893_70696912', "homePage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_171240519665002ece928868_64262846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_171240519665002ece928868_64262846',
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
class Block_180095985465002ece92b893_70696912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_180095985465002ece92b893_70696912',
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
