<?php

namespace Handlers;

use Project9\Db;

class productPageActionHandler
{
    public function handleProductPage()
    {
        // Assuming you have a Database class with a select function
        $products = Db::$db->select('product', ['*']);

        // Ensure that the global $smarty variable is accessible
        global $template;

            // Assign the product information to template variables
            $template->assign('products', $products);

            // Display the "productPage.tpl" template
            $template->display("template/productPage.tpl");

    }
}
