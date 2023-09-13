<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\xboxPage;
use Project9\Playstation;
use Project9\User;
use Project9\Db;

session_start();

$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();


$database = new Db();

//I've added a extra $_GET['action'], so that the 'switch statement' will work!
$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {
    case "registerForm":
        $template->display("template/registerForm.tpl");
        break;
    case "register":
        $handler = new RegistrationActionHandler();
        $handler->handleRegister();
        break;
    case "loginForm":
        $template->display("template/loginForm.tpl");
        break;
    case "login":
        $handler = new LoginActionHandler();
        $handler->handleLogin();
        break;
        case "admin-login":
        $template->display("template/admin-login.tpl");
        break;
        case "login-adm":
        if(!empty($_POST['email']) && !empty($_POST['pass']))
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $where = ['emailadress' => $email];
            $admin = Db::$db->select('user', ['*'], $where);

             if (!empty($admin) && password_verify($pass, $admin[0]['password'])) {
                // Authentication successful
                // Set the user's session or redirect to a dashboard page
                var_dump($admin);
                if(isset($admin[0]['bool_adm']) && $admin[0]['bool_adm'] != 1)
                {
                    echo "Your account is not permitted to login as admin...";
                    header("Refresh:2; url=index.php?action=admin-login");
                    exit();
                }
                $_SESSION['admin'] = $admin[0];
                echo "<h2>Welcome " . $admin[0]['username'] . "</h2><br>";
                echo "<p>You've logged in.</p>";
                header("Refresh:2; url=index.php");
                exit;
            } else {
                // Authentication failed
                // Display an error message or redirect back to the login page with an error parameter
                echo "<p>Incorrect email or password. Please try again.</p>";
                header("Refresh:3; url=index.php?action=admin-login");
                exit;
            }


        }
        break;

    case "productPage":
//        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
//        $where = [];
//        if ($product_id !== null && is_numeric($product_id)) {
//            $where['product_id'] = $product_id;
//        }
        // Assuming you have a Database class with a select function
        $products = Db::$db->select('product', ['*']);

        // Assign the product information to template variables
        $template->assign('products', $products);

        // Display the "productPage.tpl" template
        $template->display("template/productPage.tpl");
        break;
        break;
    case "contact":
        $template->display("template/contact.tpl");
        break;
    case "xboxPage":
        $columns = ['*'];
        $where = ['category' => 'xbox'];
        $products = Db::$db->select('product', $columns, $where);
        $template->assign('products', $products);
        $template->display("template/xboxPage.tpl");
        break;
    case "playstationPage":
        $columns = ['*'];
        $where = ['category' => 'playstation'];
        $products = Db::$db->select('product', $columns, $where);
        $template->assign('products', $products);
        $template->display("template/playstationPage.tpl");
        break;
    case "nintendoPage":
        $columns = ['*'];
        $where = ['category' => 'nintendo'];
        $products = Db::$db->select('product', $columns, $where);
        $template->assign('products', $products);
        $template->display("template/nintendoPage.tpl");
        break;
    case "moreInfo":
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
        $where = ['id' => $product_id];
        $product = Db::$db->select('product', ['*'], $where);

        // Assign the product information to template variables
        $template->assign('product', $product);

        // Display the "moreInfo.tpl" template
        $template->display("template/moreInfo.tpl");
        break;
    default:
        $template->display("template/homePage.tpl");
        break;

}


//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");



//////Creating new products also for testing
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
//


