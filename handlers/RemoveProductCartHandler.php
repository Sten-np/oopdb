<?php

namespace Handlers;

class RemoveProductCartHandler
{
    public function handleRemoveProduct()
    {
        // Get the product ID to remove from the request
        $productIdToRemove = $_POST['productId'] ?? null;

        if ($productIdToRemove !== null && is_numeric($productIdToRemove)) {
            // Loop through the cart and remove the product with the specified ID
            foreach ($_SESSION['cart'] as $key => $cartItem) {
                if (isset($cartItem['productId']) && (int)$cartItem['productId'] === (int)$productIdToRemove) {
                    unset($_SESSION['cart'][$key]);
                    break;
                }
            }
        }

        // Redirect back to the cart page
        header('Location: index.php?action=cartPage');
        exit;
    }
}