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
            $totalCost = 0;
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart']))
            {
                foreach ($_SESSION['cart'] as $cartItem)
                {
                    if (isset($cartItem['productId']) && is_numeric($cartItem['productId'])) {
                        $where = ['id' => (int)$cartItem['productId']];
                        $product = Db::$db->select('product', ['id', 'productName', 'price', 'description'], $where);

                        if (!empty($product)) {
                            $products[] = $product[0];
                            $totalCost += $product[0]['price'];
                            $costNoVat = round($totalCost / 1.21);
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
        $template->assign("totalCost", $totalCost);
        $template->assign("priceNoVat", $costNoVat);
        $template->display("template/cart.tpl");
    }
}
