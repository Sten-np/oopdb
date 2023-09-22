<?php

namespace Project9;
use Exception;
use PDOException;

class ChangeProdInfo
{
    public function __construct()
    {
        try
        {
            if(!isset($_POST['submit']))
            {
                echo '<script>alert("Invalid! Page will refresh.");</script>';
                header('Refresh:1; index.php?action=admin-products');
                exit();
            }
            $data = [
                'productName' => $_POST['prodname'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'category' => $_POST['category']
            ];
            Db::$db->update("product", $data , $_POST['prodid']);
            header('Refresh:1; index.php?action=admin-products');
        }catch (PDOException $error)
        {
            throw new Exception($error);
        }
    }
}