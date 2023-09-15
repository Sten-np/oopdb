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
    $minPasswordLength = 8;

    if (!empty($_POST['username']) && !empty($_POST['emailadress']) && !empty($_POST['phonenumber']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat']))
    {
        // Validate user input (e.g., check email format, password requirements)
        // ...
        // checks if the password is truly 8 characters or higher
        if(strlen($_POST['password']) < $minPasswordLength && mb_strlen($_POST['password'] < $minPasswordLength))
        {
            echo "<h2>Your password have lesser than 8 characters</h2>";
            echo "Password must be at least {$minPasswordLength} characters!";
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