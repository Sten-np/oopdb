<?php

namespace Project9;

class playstationPageActionHandler
{
    public function handlePlaystationPage()
    {
        // Assuming you have a Database class with a select function
        $products = Db::$db->select('product', ['*']);

        // Ensure that the global $smarty variable is accessible
        global $template;

        $columns = ['*'];
        $where = ['category' => 'playstation'];
        $products = Db::$db->select('product', $columns, $where);
        $template->assign('products', $products);
        $template->display("template/playstationPage.tpl");

    }
}
