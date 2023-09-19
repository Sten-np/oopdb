<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Handlers\AdminHandler;
use Project9\Db;
use Project9\Mysql;
use Project9\User;
use Project9\ProductPageActionHandler;
use Project9\LoginActionHandler;
use Project9\RegistrationActionHandler;
use Project9\XboxPageActionHandler;
use Project9\PlaystationPageActionHandler;
use Project9\NintendoPageActionHandler;
use Project9\MoreInfoPageActionHandler;
use Project9\xboxPage;
use Project9\Db;
use Project9\AdminListHandler;
use Project9\UserListHandler;
use Project9\AdminChangeState;



session_start();
$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();
global $template;


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
            $adminHandler = new AdminHandler($_POST['email'], $_POST['pass']);
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
    default:
        $template->display("template/homePage.tpl");
        break;
}
//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");
