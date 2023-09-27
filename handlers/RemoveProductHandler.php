<?php

namespace Handlers;
use PDOException;
use PDO;
use Project9\Db;

class RemoveProductHandler
{
    public function __construct()
    {
        try
        {
            if(!isset($_POST['removeprodsubmit']))
            {
                header("Refresh:1; url=index.php?action=admin-products");
                exit();
            }
            Db::$db->delete("product");
        }
        catch(PDOException $e)
        {
            throw new PDOException("Error! " . $e);
        }

        header("Refresh:1; url=index.php?action=admin-products");
    }
}