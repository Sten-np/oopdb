<?php

namespace Handlers;

use PDO;
use PDOException;
use Project9\Db;
use Project9\Mysql;

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
            $success = false;
            $data = [
                'OrderID' => null,
                'CustomerID' => $_SESSION['user']['id'],
                'OrderDate' => date('Y-m-d'),
                'TotalAmount' => $_POST['TotalAmount']
            ];
            Db::$db->insert("orders", $data);

            $orderId = Mysql::$db->lastInsertId();


            foreach ($_SESSION['cart'] as $product) {
                $data2 = [
                    'OrderItemID' => null,
                    'OrderID' => (int)$orderId,
                    'ProductID' => $product['productId'],
                    'quantity' => 1,
                ];

                Db::$db->insert("order_items", $data2);
            }
            Db::$db->disconnect();

            $success = true;


        }catch(PDOException $e)
        {
            throw new PDOException($e->getMessage());
        }

        if(!$success)
        {
            echo "<script>alert('There was an error ordering your products! Please try again later...')</script>";
            header("refresh: 1; url = index.php?action=cartPage");
            exit();
        }

        echo "<script>alert('Your order was placed successfully!')</script>";
        header("refresh: 1; url = index.php");
    }

}