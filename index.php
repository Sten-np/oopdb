<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\xboxPage;
use Project9\Playstation;
use Project9\Security;
use Project9\User;
use Project9\Db;
use Project9\ProductPageActionHandler;
use Project9\LoginActionHandler;
use Project9\LogoutActionHandler;
use Project9\RegistrationActionHandler;
use Project9\XboxPageActionHandler;
use Project9\PlaystationPageActionHandler;
use Project9\NintendoPageActionHandler;
use Project9\MoreInfoPageActionHandler;
use Project9\UserInformationActionHandler;
use Project9\SearchPageHandler;



session_start();
$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();
global $template;

$database = new Db();


// Generate a random token string
$security = new Security();

if (!isset($_SESSION['csrf_token'])) {
    // Generate a new CSRF token and store it in the session
    $_SESSION['csrf_token'] = $security->generateCSRFToken();
}


$template->assign('csrf_token', $_SESSION['csrf_token']);

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
    case "logout":
        $handler = new LogoutActionHandler();
        $handler->handleLogout();
        break;
    case "productPage":
        $handler = new productPageActionHandler();
        $handler->handleProductPage();
        break;
    case "contact":
        $template->display("template/contact.tpl");
        break;
    case "xboxPage":
        $handler = new xboxPageActionHandler();
        $handler->handleXboxPage();
        break;
    case "playstationPage":
        $handler = new playstationPageActionHandler();
        $handler->handlePlaystationPage();
        break;
    case "nintendoPage":
        $handler = new nintendoPageActionHandler();
        $handler->handleNintendoPage();
        break;
    case "moreInfo":
        $handler = new MoreInfoPageActionHandler();
        $handler->handleMoreInfoPage();
        break;
    case "userInformation":
        $handler = new UserInformationActionHandler();
        $handler->handleUserInformationPage();
        break;
    case "search":
        $handler = new SearchPageHandler();
        $handler->handleSearchPage();
        break;
    default:
        $template->display("template/homePage.tpl");
        break;

}


//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");




