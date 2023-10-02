<?php

namespace Project9;

class CartPageHandler
{
    public function handleCartPage()
    {
        // Ensure that the global $template and $db variables are accessible
        global $template, $db;
        // Start the session

        // Retrieve the cart data from the session (if it exists)
        $cartItems = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : array();

        // Extract product IDs from cart items to use in the database query
        $productIds = array_map(function ($item) {
            return $item['id'];
        }, $cartItems);

        // Assuming you have a Database class with a select function
        $columns = ['*'];
        $where = ['id' => $productIds]; // Filter products by their IDs in the cart
        $products = Db::$db->select('product', $columns, $where);

        // Add the 'image' information to the $cartItems array
        foreach ($cartItems as &$cartItem) {
            foreach ($products as $product) {
                if ($product['id'] == $cartItem['id']) {
                    $cartItem['image'] = $product['image'];
                    break;
                }
            }
        }

        // Assign the cart data and products data to Smarty variables
        $template->assign('cartItems', $cartItems);
        $template->assign('products', $products);

        // Display the cart page template
        $template->display("template/cartPage.tpl");
    }
}
