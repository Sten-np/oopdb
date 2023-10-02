<?php

namespace Handlers;

use Project9\Db;

class CartPageHandler
{
    public function __construct()
    {
        try
        {
            $where = ['id' => 'productId'];
            $products = Db::$db->select('product', ['id', 'productName', 'price' ,'description'], $where);
        }catch (\PDOException $error)
        {
            throw new \Exception("Error!" . $error);
        }

        global $template;
        $template->assign("products", $products);
        $template->display("template/cart.tpl");
    }

}