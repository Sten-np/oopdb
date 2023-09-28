<?php
/* Smarty version 4.3.4, created on 2023-09-28 11:06:15
  from 'C:\Wamp.NET\sites\Project9\template\filterPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65155e27ed81a9_85208490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c7c153df0183780352681c328b7c044443b4399' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\filterPage.tpl',
      1 => 1695897124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65155e27ed81a9_85208490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109343865665155e27ec02a1_84559446', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210370002065155e27ec3023_81255954', "navmenu");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103906394665155e27ec4c77_37198207', "filterPage");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block "title"} */
class Block_109343865665155e27ec02a1_84559446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_109343865665155e27ec02a1_84559446',
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
class Block_210370002065155e27ec3023_81255954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_210370002065155e27ec3023_81255954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "navmenu"} */
/* {block "filterPage"} */
class Block_103906394665155e27ec4c77_37198207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filterPage' => 
  array (
    0 => 'Block_103906394665155e27ec4c77_37198207',
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
        <form action="index.php?action=filterPage" method="POST">
            <label class="category-checkbox">
                <input type="checkbox" name="nintendoForm" value="Nintendo"> Nintendo
            </label>
            <label class="category-checkbox">
                <input type="checkbox" name="playstationForm" value="Playstation"> Playstation
            </label>
            <label class="category-checkbox">
                <input type="checkbox" name="xboxForm" value="Xbox"> Xbox
            </label>
            <label class="category-checkbox">
                <input id="priceForm" type="checkbox" name="priceForm" value="price" onclick="togglePriceFilters()"> Price
            </label>
            <!-- Add price input fields if Price is selected -->
            <div id="priceFilter" class="priceFilter" style="display: none;">
                <input id="minPrice" type="number" name="minPrice" placeholder="Min Price">
                <input id="maxPrice" type="number" name="maxPrice" placeholder="Max Price">
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
    </section>





        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
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

            <?php echo '<script'; ?>
>
                function togglePriceFilters() {
                    var priceFilter = document.getElementById("priceFilter");
                    console.log("togglePriceFilters function called"); // Add this line

                    if (priceFilter.style.display === "none" || priceFilter.style.display === "") {
                        priceFilter.style.display = "block";
                    } else {
                        priceFilter.style.display = "none";
                    }

                }
            <?php echo '</script'; ?>
>
    </div>
<?php
}
}
/* {/block "filterPage"} */
}
