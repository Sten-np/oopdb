<?php

namespace Handlers;

use Project9\Db;
use PDOException;

class FilterPageHandler
{
    public function filterProductPage()
    {
        // Ensure that the global $template variable is accessible
        global $template;

        try{
        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            // Check if categories checkboxes were selected
            // Check if categories checkboxes were selected
            if (isset($_POST['nintendoForm'])) {
                $category = 'nintendo';
            } elseif (isset($_POST['playstationForm'])) {
                $category = 'playstation';
            } elseif (isset($_POST['xboxForm'])) {
                $category = 'xbox';
            }

            if (isset($category)) {
                $columns = ['*'];
                $where = ['category' => $category];
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
            else {
                echo "No product found...<br>";
                echo "The product you selected in the filter doesn't exist.";
            }
          }
        }
        catch(PDOException $e)
        {
            throw new PDOException("Error! " . $e);
        }
    }
}
