<?php
declare(strict_types=1);

require_once "vendor/autoload.php";

//With the namespaces 'Handlers'
use Handlers\AdminHandler;
use Handlers\AdminListHandler;
use Handlers\MoreInfoPageActionHandler;
use Handlers\NintendoPageActionHandler;
use Handlers\PlaystationPageActionHandler;
use Handlers\ProcessOrderHandler;
use Handlers\ProductPageActionHandler;
use Handlers\RemoveProductHandler;
use Handlers\SearchPageHandler;
use Handlers\UserInformationActionHandler;
use Handlers\UserListHandler;
use Handlers\CartPageHandler;
use Handlers\XboxPageActionHandler;
use Handlers\AdminProdHandler;
use Handlers\LoginActionHandler;
use Handlers\LogoutActionHandler;
use Handlers\RegistrationActionHandler;
use Handlers\AddProductHandler;
use Handlers\FilterPageHandler;

//With the namespaces 'Project9'
use Project9\AdminChangeState;
use Project9\AddToCart;
use Project9\Db;
use Project9\LoginChecker;
use Project9\Mysql;
use Project9\Security;
use Project9\UserChangeSuccesFull;
use Project9\RegisterSuccesFull;
use Project9\UserUpdateCredentials;
use Project9\UserUpdateLocate;
use Project9\ChangeProdInfo;

session_start();
$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();
global $template;

$database = new Db();

$security = new Security();

if (!isset($_SESSION['csrf_token'])) {
    // Generate a new CSRF token and store it in the session
    $_SESSION['csrf_token'] = $security->generateCSRFToken();
}
$template->assign('csrf_token', $_SESSION['csrf_token']);

$action = $_GET['action'] ?? null;

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
        LoginChecker::checkAdmin();
        $template->display("template/admin-dashboard.tpl");
        break;

    case "admin-users":
        LoginChecker::checkAdmin();
        $UserListHandler = new UserListHandler();
        break;

    case "admin-admins":
        LoginChecker::checkAdmin();
        $adminHandler = new AdminListHandler();
        break;

    case "changeadminstate":
        $adminChangeState = new AdminChangeState();
        break;


    case "addtocart":
        $addtocart = new AddToCart();
        break;

    case "cartPage":
        $CartHandler = new CartPageHandler();
        break;
    case "processorder":
        $processOrderHandler = new ProcessOrderHandler();
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
        LoginChecker::checkUser();
        $handler = new UserInformationActionHandler();
        $handler->handleUserInformationPage();
        break;

    case "userUpdateLocate":
        $handler = new userUpdateLocate();
        $handler->handleUserUpdateLocate();
        break;

    case "userUpdateCredentials":
        $handler = new UserUpdateCredentials();
        break;

    case "userChangeSuccesFull":
        $handler = new UserChangeSuccesFull();
        $handler->handleUserChangeSuccesFull();
    break;
    case "registerSuccesFull":
        $handler = new RegisterSuccesFull();
        $handler->handleRegisterSuccesFull();
        break;
    case "search":
        $handler = new SearchPageHandler();
        $handler->handleSearchPage();
        break;
    case "filterPage":
        $handler = new FilterPageHandler();
        $handler->filterProductPage();
        break;
    case "notpermitted":
        $template->display("template/notpermitted.tpl");
        break;
    case "admin-products":
        LoginChecker::checkAdmin();
        $AdminProdHandler = new AdminProdHandler();
        break;
    case "changeProdInfo":
        $ChangeProdInfo = new ChangeProdInfo();
        break;
    case "addprod":
        LoginChecker::checkAdmin();
        $template->display("template/addprod.tpl");
        break;

    case "addproduct":
        LoginChecker::checkAdmin();
        $addProductHandler = new AddProductHandler();
        break;
    case "removeProd":
        LoginChecker::checkAdmin();
        $removeProductHandler = new RemoveProductHandler();
        break;

    default:
        $template->display("template/homePage.tpl");
        break;
}
//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");