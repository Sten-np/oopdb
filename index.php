<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Handlers\AdminHandler;
use Project9\Db;
use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\XBox;
use Project9\Playstation;
use Project9\Security;
use Project9\User;
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
use Project9\AdminListHandler;
use Project9\UserListHandler;
use Project9\UserUpdateLocate;
use Project9\UserUpdateCredentials;
use Project9\AdminChangeState;



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
        $template->display("template/admin-login.tpl");
        break;

    case "login-adm":
        $handler = new AdminHandler();
        $handler->passVerify();
        break;


    case "admin-dashboard":
        $template->display("template/admin-dashboard.tpl");
        break;

    case "admin-users":
        $UserListHandler = new UserListHandler();
        break;

    case "admin-admins":
        $adminHandler = new AdminListHandler();
        break;

    case "changeadminstate":
        $adminChangeState = new AdminChangeState();
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

    case "userUpdateLocate":
        $handler = new userUpdateLocate();
        $handler->handleUserUpdateLocate();
        break;

    case "userUpdateCredentials":
        $handler = new UserUpdateCredentials();
        $handler->handleUserUpdateCredentials();
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
