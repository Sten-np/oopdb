<?php

namespace Handlers;

use Project9\Db;

class FilterPageHandler
{
    public function filterProductPage()
    {
        // Ensure that the global $template variable is accessible
        global $template;

        // Check if any checkboxes were selected
        if (isset($_POST['actionNintendo'])) {

            // Assuming you have a Database class with a select function
            $columns = ['*'];
            $where = ['category' => 'nintendo'];
            $products = Db::$db->select('product', $columns, $where);

            // Assign the filtered products to the template
            $template->assign('valuta', '$');
            $template->assign('products', $products);
            $template->display("template/filterPage.tpl");

        }
        elseif (isset($_POST['actionPlaystation']))
        {
            // Assuming you have a Database class with a select function
            $columns = ['*'];
            $where = ['category' => 'playstation'];
            $products = Db::$db->select('product', $columns, $where);

            // Assign the filtered products to the template
            $template->assign('valuta', '$');
            $template->assign('products', $products);
            $template->display("template/filterPage.tpl");
        }
        elseif (isset($_POST['actionXbox']))
        {
            // Assuming you have a Database class with a select function
            $columns = ['*'];
            $where = ['category' => 'xbox'];
            $products = Db::$db->select('product', $columns, $where);

            // Assign the filtered products to the template
            $template->assign('valuta', '$');
            $template->assign('products', $products);
            $template->display("template/filterPage.tpl");
        }
        elseif (isset($_POST['priceForm'])) {
            // Connect to the database using PDO
            $pdo = new \PDO("mysql:host=localhost;dbname=gamehub", "root", "");

            // Define the maximum price
            $maxPrice = 100;

            // Prepare the SQL query with a placeholder
            $query = $pdo->prepare("SELECT * FROM product WHERE price < :maxPrice");

            // Bind the parameter
            $query->bindValue(':maxPrice', $maxPrice, \PDO::PARAM_INT); // Assuming price is an integer

            // Execute the query
            $query->execute();

            // Fetch the results
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);

            // Assign the results to the template
            $template->assign('valuta', '$');
            $template->assign('products', $result);
            $template->display("template/filterPage.tpl");
        }
        else
        {
            echo"No product found";

            // Assuming you have a Database class with a select function
            $template->display("template/productPage.tpl");
        }
    }
}
