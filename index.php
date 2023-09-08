<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\XBox;
use Project9\Playstation;
use Project9\User;
use Project9\Db;

session_start();

$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();




if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}

$database = new Db();

//I've added a extra $_GET['action'], so that the 'switch statement' will work!
$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {
    case "register":
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat'])) ;
        {
            $user = new User($_POST['username'], $_POST['password'], $_POST['passwordrepeat']);
            print "<h2>Welcome ".($_POST['username'])."</h2><br>".
                header( "Refresh:3; url=index.php", true, 303);
            exit;
        }


        break;
    case "registerForm":
        $template->display("template/registerForm.tpl");
        break;
    case "productPage":
        $template->display("template/productPage.tpl");
        break;
    default:
        $template->display("template/layout.tpl");
        break;

}


//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");



////Creating new products also for testing
//$productList = new ProductList();
//
//$nintendo1 = new \Project9\Nintendo("Super Mario Bros", "img/GameHub", 60, 121, "This is Sparta!!!", 0,);
//$nintendo1->addRequirements("all your money");
//$nintendo1->setGenre("Adventure");
////to add the product in the array ProductList
//$productList->addProduct($nintendo1);
//
//
//print "<table style=width: 100 border='1px solid black'>
//         <tr>
//         <th>Catergory</th>
//         <th>Naam Product</th>
//         <th>Verkoopprijs</th>
//         <th>Genre</th>
//         </tr>";
//
//foreach ($productList->getProducts() as $products)
//{
//    print "<tr>
//         <td>".$products->setCategory()."</td>
//         <td>".$products->getName()."</td>".
//        "<td>€".$products->getCalculatePrice()."</td>.
//         <td>".$products->printInfo()."</td>
//         </tr>";
//
//}



