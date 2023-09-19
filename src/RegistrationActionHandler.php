<?php

namespace Project9;

require_once 'Security.php';

$security = new Security();

if (!isset($_SESSION['csrf_token']))
{
    // Generate a new CSRF token and store it in the session
    $_SESSION['csrf_token'] = $security->generateCSRFToken();
}

class registrationActionHandler
{
    public function handleRegisterForm()
{
    global $template;
    $template->display("template/registerForm.tpl");
}


    public function handleRegister()
{    global $security;

    if (!empty($_POST['username']) && !empty($_POST['emailadress']) && !empty($_POST['phonenumber']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat']))
    {
        if(!isset($_POST['username']) || strlen($_POST['username']) > 75 || !preg_match('/^[a-zA-Z-0-9 ]+$/', $_POST['username']))
        {
            echo "<h2>Your username has more than 75 characters</h2>";
            echo "The username you've created, has more than 75 characters or special characters. Which is not allowed!<br>";
            echo "The username you've created:<br>{$_POST['username']}";
            header("Refresh:3; url=index.php?action=registerForm", true, 303);
            exit;
        }
        if(!isset($_POST['emailadress']) || strlen($_POST['emailadress']) > 45 || !filter_var($_POST['emailadress'], FILTER_VALIDATE_EMAIL))
        {
            echo "<h2>Your email adress has more than 45 characters or isn't a email</h2>";
            echo "The emailadress you've created, has more than 45 characters or isn't a email. Which is not allowed!<br> {$_POST['username']}";
            header("Refresh:3; url=index.php?action=registerForm", true, 303);
            exit;
        }

        if (!isset($_POST['phonenumber']) || empty($_POST['phonenumber']) || strlen($_POST['phonenumber']) > 15 || !preg_match('/^[0-9]{2}-[0-9]{8}+$/', $_POST['phonenumber']))
        {
            echo "<h2>Your phone number has more than 15 characters or contains invalid characters</h2>";
            echo "<p>Your account has not been created because the phone number you provided is not allowed</p>";
            echo "<p>Or you typed your phone number like 06 12345678. Which must be 06-12345678</p>";
            echo "<p>The phone number you've entered: <br>{$_POST['phonenumber']}</p>";
            header("Refresh:3; url=index.php?action=registerForm", true, 303);
            exit;
        }

        // checks if the password is longer than 30 characters
        if(!isset($_POST['password']) || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{8,30})/', $_POST['password']))
        {
            echo "<h2>Your password you've created is not allowed!</h2>";
            echo "Password must have at least the following things:<br>";
            echo "Password must have at least one lowercase letter.<br>";
            echo "Password must have at least one uppercase letter.<br>";
            echo "Password must have at least one digit (0-9).<br>";
            echo "Password must have at least one special character for example: ~ ? ! @ # $ % ^ & * .<br>";
            echo "Password must have a minimum length of 8 characters and the maximum length is 30 characters<br>";
            header("Refresh:3; url=index.php?action=registerForm", true, 303);
            exit;
        }
        else if(!isset($_POST['passwordrepeat']) || $_POST['passwordrepeat'] !== $_POST['password'])
        {
            echo "<h2>Your password doesn't match!</h2>";
            echo "Password must be the same of the Repeat Password!<br>";
            header("Refresh:3; url=index.php?action=registerForm", true, 303);
            exit;
        }


        if ($security->verifyCSRFToken($_POST['csrf_token']))
        {
            // Assuming you have a User class for registration
            $user = new User($_POST['username'], $_POST['emailadress'], $_POST['phonenumber'], $_POST['password'], $_POST['passwordrepeat']);

            // Display a success message
            echo "<h2>Welcome " . $_POST['username'] . "</h2><br>";
            echo "<p>Your account has been created.</p>";
            echo "<p>You can now login with your email address " . $_POST['emailadress'] . "</p>";

            // Expire the CSRF token
            $security->expireCSRFToken($_POST['csrf_token']);

            header("Refresh:3; url=index.php", true, 303);
            exit;
        }
        else
        {
            // CSRF token is invalid; handle the error or reject the request
            echo "<h2>Invalid Token</h2>";
            echo "<p>Your token is invalid.</p>";
            echo "<p>We are unable to make a account for you</p>";
            header("Refresh:3; url=index.php", true, 303);
            exit;
        }
    }
    global $template;
    // Assign success messages to Smarty variables
    $template->assign('welcomeMessage', "Welcome " . $_POST['username']);
    $template->assign('accountCreatedMessage', "Your account has been created.");
    $this->smarty->assign('loginMessage', "You can now login with your email address " . $_POST['emailadress']);

    // Display the success template
    $template->display("template/register_success.tpl");
    header("Refresh:3; url=index.php", true, 303);
    exit;
 }
}