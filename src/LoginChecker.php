<?php

namespace Project9;

class LoginChecker
{

    public static function checkUser():void
    {
        if(!isset($_SESSION['user']) || !$_SESSION['user'])
        {
            echo "<script>alert('You need to be logged in for that action!')</script>";
            header("Refresh:1; url=index.php");
            exit();
        }
    }

    public static function checkAdmin():void
    {
        if(!isset($_SESSION['admin']) || !$_SESSION['admin'])
        {
            header("Location: index.php?action=notpermitted");
            exit();
        }
    }
}