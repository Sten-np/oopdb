<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Handlers\AdminHandler;
use Project9\Db;
use Project9\Mysql;
use Project9\User;
use Project9\xboxPage;

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
        if (!empty($_POST['username']) && !empty($_POST['emailadress']) && !empty($_POST['phonenumber']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat'])) {
            // Validate user input (e.g., check email format, password requirements)
            // ...

            // Assuming you have a User class for registration
            $user = new User($_POST['username'], $_POST['emailadress'], $_POST['phonenumber'], $_POST['password'], $_POST['passwordrepeat']);

            // Display a success message
            echo "<h2>Welcome " . $_POST['username'] . "</h2><br>";
            echo "<p>Your account has been created.</p>";
            echo "<p>You can now login with your email address " . $_POST['emailadress'] . "</p>";
            header("Refresh:3; url=index.php", true, 303);
            exit;
        }
        break;
    case "loginForm":
        $template->display("template/loginForm.tpl");
        break;
    case "login":
        if (!empty($_POST['emailadress']) && !empty($_POST['password'])) {
            $email = $_POST['emailadress'];
            $password = $_POST['password'];

            $where = ['emailadress' => $email];
            $users = Db::$db->select('user', ['*'], $where);

            if (!empty($users) && password_verify($password, $users[0]['password'])) {
                // Authentication successful
                // Set the user's session or redirect to a dashboard page
                $_SESSION['user'] = $users[0];
                echo "<h2>Welcome " . $users[0]['username'] . "</h2><br>";
                echo "<p>You've logged in.</p>";
                header("Refresh:3; url=index.php");
                exit;
            } else {
                // Authentication failed
                // Display an error message or redirect back to the login page with an error parameter
                echo "<p>Incorrect email or password. Please try again.</p>";
                header("Refresh:3; url=index.php?action=loginForm");
                exit;
            }
        } else {
            // Handle login errors (e.g., missing fields)
            header("Location: index.php?action=loginForm&error=1");
            exit;
        }
        break;
        case "admin-login":
        $template->display("template/admin-login.tpl");
        break;
        case "login-adm":
            $adminHandler = new AdminHandler($_POST['email'], $_POST['pass']);
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


