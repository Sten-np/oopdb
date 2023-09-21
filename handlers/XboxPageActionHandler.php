<?php

namespace Handlers;

use Project9\Db;

class xboxPageActionHandler
{
    public function handleXboxPage()
    {
        // Assuming you have a Database class with a select function
        $products = Db::$db->select('product', ['*']);

        // Ensure that the global $smarty variable is accessible
        global $template;

        $columns = ['*'];
        $where = ['category' => 'xbox'];
        $products = Db::$db->select('product', $columns, $where);
        $template->assign('products', $products);
        $template->display("template/xboxPage.tpl");

    }
}
