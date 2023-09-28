<?php

namespace Handlers;

use Project9\Db;
use PDOException;
use PDO;

class FilterPageHandler
{
    public function filterProductPage()
    {
        // Ensure that the global $template variable is accessible
        global $template;

        try{
            $pdo = new PDO("mysql:host=localhost;dbname=gamehub", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Check if the form was submitted
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $selectedCategories = [];

                // Check if categories checkboxes were selected
                if (isset($_POST['nintendoForm'])) {
                    $selectedCategories[] = 'nintendo';
                }
                if (isset($_POST['playstationForm'])) {
                    $selectedCategories[] = 'playstation';
                }
                if (isset($_POST['xboxForm'])) {
                    $selectedCategories[] = 'xbox';
                }



                $priceFilter = false;
                // Check if the price checkbox was selected
                if (isset($_POST['priceForm'])) {
                    $priceFilter = true;
                    $minPrice = isset($_POST['minPrice']) ? (float)$_POST['minPrice'] : 0;
                    $maxPrice = isset($_POST['maxPrice']) ? (float)$_POST['maxPrice'] : PHP_FLOAT_MAX;
                }

                // Build the WHERE condition for the SQL query
                $where = [];
                $placeholders = [];

                // Add category conditions
                foreach ($selectedCategories as $category) {
                    $where[] = 'category = :category_' . $category;
                    $placeholders['category_' . $category] = $category;
                }

                // Add price conditions if price filter is enabled
                if ($priceFilter) {
                    $where[] = 'price >= :minPrice AND price <= :maxPrice';
                    $placeholders['minPrice'] = $minPrice;
                    $placeholders['maxPrice'] = $maxPrice;
                }

                $whereClause = implode(' OR ', $where);

                // Construct the SQL query
                $sql = "SELECT * FROM product WHERE $whereClause";

                // Connect to the database using PDO
                $pdo = new \PDO("mysql:host=localhost;dbname=gamehub", "root", "");

                // Prepare the SQL query
                $query = $pdo->prepare($sql);

                // Bind parameters
                foreach ($placeholders as $key => $value) {
                    $query->bindValue(':' . $key, $value);
                }

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
        catch(PDOException $e)
        {
            echo "Database Connection Error: " . $e->getMessage();
            exit;
        }
    }
}
