<?php

namespace Handlers;

use PDO;
use PDOException;
use Project9\Db;

class AddProductHandler
{
    public function __construct()
    {
        try
        {
            if(!isset($_POST['submit']))
            {
                echo '<script>alert("Invalid! Page will refresh.");</script>';
                header('Refresh:1; index.php?action=addprod');
                exit();
            }
            $data = [
                'productName' => $_POST['prodname'],
                'price' => $_POST['prodprice'],
                'description' => $_POST['proddesc'],
                'image' => $_POST['prodimg'],
                'category' => $_POST['prodcategory']
            ];
            $product = Db::$db->insert("product", $data);
            Db::$db->disconnect();
            header('location; index.php?action=admin-products');

        }catch(PDOException $e)
        {
            throw new PDOException("Error!" . $e->getMessage());
        }
    }
}