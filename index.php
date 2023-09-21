<?php
declare(strict_types=1);

global $timeFormatted;

require_once "vendor/autoload.php";

use Handlers\AdminHandler;
use Handlers\AdminListHandler;
use Handlers\MoreInfoPageActionHandler;
use Handlers\NintendoPageActionHandler;
use Handlers\PlaystationPageActionHandler;
use Handlers\ProductPageActionHandler;
use Handlers\SearchPageHandler;
use Handlers\UserInformationActionHandler;
use Handlers\UserListHandler;
use Handlers\XboxPageActionHandler;
use Project9\AdminChangeState;
use Project9\Db;
use Project9\LoginActionHandler;
use Project9\LoginChecker;
use Project9\LogoutActionHandler;
use Project9\Mysql;
use Project9\RegistrationActionHandler;
use Project9\Security;


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
        $adminHandler = new AdminHandler();
        break;


    case "admin-dashboard":
        $adminChecker = new LoginChecker();
        $adminChecker->checkAdmin();
        $timestamp = time();
        $timeFormatted = date("H:i:s", $timestamp);
        $template->assign('time', $timeFormatted);
        $template->display("template/admin-dashboard.tpl");
        break;

    case "admin-users":
        $adminChecker = new LoginChecker();
        $adminChecker->checkAdmin();
        $template->assign('time', $timeFormatted);
        $UserListHandler = new UserListHandler();
        break;

    case "admin-admins":
        $adminChecker = new LoginChecker();
        $adminChecker->checkAdmin();
        $template->assign('time', $timeFormatted);
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
        $userChecker = new LoginChecker();
        $userChecker->checkUser();
        $handler = new UserInformationActionHandler();
        $handler->handleUserInformationPage();
        break;

    case "search":
        $handler = new SearchPageHandler();
        $handler->handleSearchPage();
        break;
    case "notpermitted":
        $template->display("template/notpermitted.tpl");
        break;

    default:
        $template->display("template/homePage.tpl");
        break;
}
//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");
