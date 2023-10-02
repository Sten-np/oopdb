<?php

namespace Handlers;

use Project9\Db;

class MoreInfoPageActionHandler
{
    public function handleMoreInfoPage()
    {
        // Assuming you have a Database class with a select function
        $products = Db::$db->select('product', ['*']);

        // Ensure that the global $smarty variable is accessible
        global $template;

        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
        $where = ['id' => $product_id];
        $product = Db::$db->select('product', ['*'], $where);
        $template->assign('product', $product);

        // Check if the "Add to cart" form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
            // Retrieve product information from the form submission
            $product_id = $_POST['product_id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];

            // Create an array to store the product details
            $product = [
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price,
            ];

            // Check if the shopping cart session variable exists
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            // Add the product to the shopping cart session
            $_SESSION['cart'][] = $product;
        }

        // Display the moreInfo.tpl template
        $template->display("template/moreInfo.tpl");
    }
}
