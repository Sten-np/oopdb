<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\XBox;
use Project9\Playstation;
use Project9\Security;
use Project9\User;
use Project9\Db;

session_start();

$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();


$database = new Db();

//Generate a random token string
$security = new Security();
$security->generateToken();
$security->validateToken();

$template->assign("csrf_token", $security);

//I've added a extra $_GET['action'], so that the 'switch statement' will work!
$action = isset($_GET['action']) ? $_GET['action'] : null;




switch ($action) {
    case "registerForm":
        $template->display("template/registerForm.tpl");
        break;
    case "register":
        if (!empty($_POST['username']) && !empty($_POST['emailadress']) && !empty($_POST['phonenumber']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat'])) {
            var_dump($_POST['csrf_token']);
            var_dump($_SESSION['csrf_token']);

            if (!isset($_POST['csrf_token']) || !isset($_SESSION["csrf_token"]))
            {
                exit("Token not set!");
            }

            if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION["csrf_token"])
            {
                $user = new User($_POST['username'], $_POST['emailadress'], $_POST['phonenumber'], $_POST['password'], $_POST['passwordrepeat']);
                // Display a success message
                echo "<h2>Welcome " . $_POST['username'] . "</h2><br>";
                echo "<p>Your account has been created.</p>";
                echo "<p>You can now login with your email address " . $_POST['emailadress'] . "</p>";
                header("Refresh:3; url=index.php", true, 303);
                exit;

//                unset($_SESSION["token"]);
            }
            // ERROR message, cannot validate token
            else
            {
                echo "POST Token: " . $_POST["token"] . "<br>";
                echo "Session Token: " . $_SESSION["token"] . "<br>";
                exit("Invalid Token");
            }

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
        $template->display("template/productPage.tpl");
        break;
    case "homePage":
        $template->display("template/homePage.tpl");
        break;
    case "contact":
        $template->display("template/contact.tpl");
        break;
    default:
        $template->display("template/homePage.tpl");
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



