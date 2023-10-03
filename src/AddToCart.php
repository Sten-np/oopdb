<?php
namespace Project9;

class AddToCart
{
    public function __construct()
    {
        try
        {
            if (!isset($_POST['submit']))
            {
                echo '<script>alert("Invalid! Page will refresh.");</script>';
                header('Refresh:1; index.php?action=productPage');
                exit();
            }

            if (!isset($_SESSION['cart']))
            {
                $_SESSION['cart'] = [];
            }

            $data = [
                'productId' => (int)$_POST['product_id'],
            ];

            // Append the product to the cart
            $_SESSION['cart'][] = $data;

            header('Refresh:1; index.php?action=cartPage');
        } catch (\PDOException $error)
        {
            throw new \Exception($error);
        }
    }
}
