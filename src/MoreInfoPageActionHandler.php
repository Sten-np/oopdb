<?php

namespace Project9;

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
        $template->display("template/moreInfo.tpl");

    }
}
