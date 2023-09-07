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


switch($action)
{
    case "registerForm":
        $template->display("template/registerForm.tpl");

    case "productPage":
        $template->display("template/productPage.tpl");
        break;
    default:
        $template->display("template/layout.tpl");
        break;

}


//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->connect("localhost", "gamehub", "root", "");


//Creating new products
$productList = new ProductList();

$nintendo1 = new \Project9\Nintendo("Super Mario Bros", "adventure", "img/GameHub", 60, 121, "This is Sparta!!!", 0, "10GB",);
$nintendo1->addRequirements("all your money");
//to add the product in the array ProductList
$productList->addProduct($nintendo1);


print "<table style=width: 100 border='1px solid black'>
           <tr>
          <th>Catergory</th>
         <th>Naam Product</th>
         <th>Verkoopprijs</th>
         <th>Info</th>
         </tr>";

foreach ($productList->getProducts() as $products)
{
    print "<tr>
         <td>".$products->setCategory()."</td>
         <td>".$products->getName()."</td>".
        "<td>€".$products->getCalculatePrice()."</td>
         </tr>";

}



