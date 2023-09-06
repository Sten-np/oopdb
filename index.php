<?php
require_once "vendor/autoload.php";

use Project9\Mysql;

session_start();

$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();

$action = isset($_GET['action']) ?? null;

switch($action)
{
    case "registerForm":
        $template->display("template/registerForm.tpl");
        break;
    default:
        $template->display("template/layout.tpl");
        break;
}

