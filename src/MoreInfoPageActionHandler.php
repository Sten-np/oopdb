<?php

namespace Project9;

class MoreInfoPageActionHandler
{
    public function handleMoreInfoPage()
    {
        // Start the session (if not already started)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Assuming you have a Database class with a select function
        $products = Db::$db->select('product', ['*']);

        // Ensure that the global $smarty variable is accessible
        global $template;

        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
        $where = ['id' => $product_id];
        $product = Db::$db->select('product', ['*'], $where);
        $template->assign('product', $product);

        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            $productId = $product_id; // Use the product ID from the URL or wherever it's stored

            // Check if the $product array is not empty and contains at least one element
            if (!empty($product) && isset($product[0])) {
                // Create an array to represent the product
                $cartItem = array(
                    'id' => $productId,
                    'name' => $product[0]['productName'], // Replace with the appropriate field from your database
                    'price' => $product[0]['price'], // Replace with the appropriate field from your database
                    'quantity' => $quantity
                );

                // Check if the cart session variable exists, and if not, create it
                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = array();
                }

                // Add the product to the cart session
                $_SESSION['cart'][] = $cartItem;

                // Redirect back to the more info page or wherever you want
                header("Location: index.php?action=moreInfo"); // Replace with the appropriate URL
                exit();
            }
        }

        $template->display("template/moreInfo.tpl");
    }
}
