<?php

namespace Handlers;

use Project9\Db;

class SearchPageHandler
{
    public function handleSearchPage()
    {
        // Check if "search" key exists in $_POST
        if (isset($_POST["search"]))
        {
            // Assuming you have a PDO database connection
            $pdo = new \PDO("mysql:host=localhost;dbname=gamehub", "root", "root");

            // Fetch all products (assuming it's necessary)
            $products = Db::$db->select('product', ['*']);

            // Ignores the warning message, because the filter_var works
            error_reporting(E_ALL ^ E_DEPRECATED);

            // This code works for searching in all pages.
            $search = filter_var($_POST["search"], FILTER_SANITIZE_STRING);
            $query = $pdo->prepare("SELECT * FROM product WHERE productName LIKE :cproductName");
            $query->bindValue(':cproductName', "%$search%", \PDO::PARAM_STR); // Use PDO constants
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);

            // Ensure that the global $template variable is accessible
            global $template;

            if (count($result) > 0)
            {
//                echo"You are searching for '".$_POST["search"]."'";
                $template->assign('products', $result);
                $template->assign('valuta', "€ ");
                $template->display("template/searchPage.tpl");
            } else
            {
//                echo"You are searching for '".$_POST["search"]."'";
                echo "Helaas Pindekaas.... we kunnen geen resultaten vinden.";
                $template->assign('products', []);
                $template->assign('valuta', "€ ");
                $template->display("template/searchPage.tpl");
            }
        } else
        {
            // Handle the case when "search" key is not set
            echo "Please provide a search term.";
        }
    }
}
