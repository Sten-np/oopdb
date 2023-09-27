<?php
/* Smarty version 4.3.4, created on 2023-09-27 08:00:31
  from 'C:\Wamp.NET\sites\Project9\template\filterPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6513e11faf79e0_39488775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c7c153df0183780352681c328b7c044443b4399' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\filterPage.tpl',
      1 => 1695799015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6513e11faf79e0_39488775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20088625696513e11fae9ea1_77429366', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9622685726513e11faeb375_62681914', "navmenu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20736370506513e11faec3a8_93147340', "filterPage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_20088625696513e11fae9ea1_77429366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20088625696513e11fae9ea1_77429366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    GameHub | Products
<?php
}
}
/* {/block "title"} */
/* {block "navmenu"} */
class Block_9622685726513e11faeb375_62681914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_9622685726513e11faeb375_62681914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "navmenu"} */
/* {block "filterPage"} */
class Block_20736370506513e11faec3a8_93147340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filterPage' => 
  array (
    0 => 'Block_20736370506513e11faec3a8_93147340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .card {
            display: inline-block;
        }
        .category-filter {
            display: grid;
            justify-content: center;
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for the filter title */
        .filter-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style for individual category checkboxes */
        .category-checkbox {
            margin-right: 10px;
        }
    </style>

        <section class="category-filter">
        <h3 class="filter-title">Filter by Category</h3>
        <form id="nintendoForm" action="index.php?action=filterPage" method="POST">
            <label class="category-checkbox">
                <input type="checkbox" name="actionNintendo" value="category1"> Nintendo
            </label>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
        <form id="playstationForm" action="index.php?action=filterPage" method="POST">
            <label class="category-checkbox">
                <input type="checkbox" name="actionPlaystation" value="category2"> Playstation
            </label>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
        <form id="xboxForm" action="index.php=?action=filterPage" method="POST">
            <label class="category-checkbox">
                <input type="checkbox" name="actionXbox" value="category3"> Xbox
            </label>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
        <form id="priceForm" action="index.php=?action=filterPage" method="POST">
            <label class="category-checkbox">
                <input type="checkbox" name="priceForm" value="category3"> Price
            </label>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
    </section>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h3 class="display-3 fw-bold"><img src="../img/GameHub.png" style="height: 100%; width: 40%; object-fit: contain;"</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="#">
                </a>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="row" style="padding-left: 1%"  >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="col-md-4" style="width: 25%; padding-top: 3%">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['productName'];?>
</h5>
                        <p class="card-price"><?php echo $_smarty_tpl->tpl_vars['valuta']->value;
echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</p>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                        <a href="index.php?action=moreInfo&product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="btn btn-primary" style="background-color: orange; color: black; border: none">More Info</a>                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>




<?php
}
}
/* {/block "filterPage"} */
}
