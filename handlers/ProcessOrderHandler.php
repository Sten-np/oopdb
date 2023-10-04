<?php

namespace Handlers;

use PDO;
use PDOException;
use Project9\Db;

class ProcessOrderHandler
{
    public function __construct()
    {
        if(!isset($_POST['submitorder']))
        {
            echo "<script>alert('Incorrect submit!')</script>";
            header("refresh: 1; url = index.php?action=cartPage");
            exit();
        }

        try
        {
            $data = [
                'firstname' => $_POST['fname'],
                'lastname' => $_POST['lname'],
                'adress' => $_POST['street'],
                'number' => $_POST['number'],
                'zipcode' => $_POST['zipcode'],
                'country' => $_POST['country'],
                'user_id' => $_SESSION['user']['id'],
                'product_id' => $_SESSION['cart']
            ];

            Db::$db->insert("orders", $data);
        }
        catch(PDOException $e)
        {
            throw new PDOException("Error!" . $e->getMessage());
        }

    }

}