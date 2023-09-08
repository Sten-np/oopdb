<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\XBox;
use Project9\Playstation;

session_start();

$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();


$action = isset($_GET['action']) ?? null;


if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    $action = null;
}

$action = isset($_GET['action']) ?? null;
$database = new Db();


switch($action)
{
    case "registerForm":
        $template->display("template/registerForm.tpl");
        break;
//    case "register":
//        if(!empty($_POST['username']) && !empty($_POST['password']));
    default:
        $template->display("template/layout.tpl");
        break;

}



$database = new Mysql("localhost", "gamehub", "root", "");
$database->connect("localhost", "gamehub", "root", "");
//$database->insert("user", "username" => $username, "password" => $password );


//
//$productList = new ProductList();
//
//
//$nintendo1 = new \Project9\Nintendo("Super Mario Bros", "adventure", "img/GameHub", 60, 121, "This is Sparta!!!", 0, "10GB",);
//
////to add the product in the array ProductList
//$productList->addProduct($nintendo1);
//
//
//foreach ($productList->getProducts() as $product)
//{
//   print $product->setCategory();
//}

