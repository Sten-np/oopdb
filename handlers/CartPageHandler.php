<?php

namespace Handlers;

use Project9\Db;

class CartPageHandler
{
    public function __construct()
    {
        try
        {
            $products = [];

            if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart']))
            {
                foreach ($_SESSION['cart'] as $cartItem)
                {
                    if (isset($cartItem['productId']) && is_numeric($cartItem['productId'])) {
                        $where = ['id' => (int)$cartItem['productId']];
                        $product = Db::$db->select('product', ['id', 'productName', 'price', 'description', 'image'], $where);

                        if (!empty($product)) {
                            $products[] = $product[0];
                        }
                    }
                }
            }
        } catch (\PDOException $error)
        {
            throw new \Exception("Error!" . $error);
        }
        global $template;
        $template->assign("products", $products);
        $template->display("template/cart.tpl");
    }
}
