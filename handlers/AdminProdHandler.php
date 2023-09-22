<?php

namespace Handlers;
use Exception;
use PDOException;
use Project9\Db;

class AdminProdHandler
{
    public function __construct()
    {
        try
        {
            $prod = Db::$db->select('product', ['id','productName', 'price' ,'description', 'category']);
        }catch (PDOException $error)
        {
            throw new Exception("Error!" . $error);
        }

        global $template;
        $template->assign("prods", $prod);
        $template->display("template/admin-products.tpl");
    }
}