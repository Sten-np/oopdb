<?php

namespace Handlers;

use Project9\Db;
use Project9\Security;

$security = new Security();

if (!isset($_SESSION['csrf_token']))
{
    // Generate a new CSRF token and store it in the session
    $_SESSION['csrf_token'] = $security->generateCSRFToken();
}

class AdminHandler
{
    private string $email;
    private string $pass;


    public function __construct()
    {
        if(!empty($_POST['email']) && !empty($_POST['pass']))
        {
            $this->email = $_POST["email"];
            $this->pass = $_POST["pass"];
            $this->passVerify();
        }
    }




    public function passVerify() {
        global $security;

        $where = ['emailadress' => $this->email];
        $admin = Db::$db->select('user', ['*'], $where);
        if (!empty($admin) && password_verify($this->pass, $admin[0]['password'])) {
            // Authentication successful
            // Set the user's session or redirect to a dashboard page
            if (isset($admin[0]['bool_adm']) && $admin[0]['bool_adm'] != 1) {
                echo "Your account is not permitted to login as admin...";
                header("Refresh:1; url=index.php?action=admin-login");
                exit();
            }

            if ($security->verifyCSRFToken($_POST['csrf_token'])) {
                $_SESSION['admin'] = $admin[0];
                echo "<h2>Welcome " . $_POST['username'] . $admin[0]['username'] . "</h2><br>";
                echo "<p>You've logged in.</p>";
                header("Refresh:1; url=index.php?action=admin-dashboard");
                exit();
            } else {
                // CSRF token is invalid; handle the error or reject the request
                echo "<h2>Invalid Token</h2>";
                echo "<p>Your token is invalid.</p>";
                echo "<p>You are unable to login</p>";
                header("Refresh:3; url=index.php", true, 303);
                exit;
            }
        }
        else
            {
            // Authentication failed
            // Display an error message or redirect back to the login page with an error parameter
            echo "<p>Incorrect email or password. Please try again.</p>";
            header("Refresh:3; url=index.php?action=admin-login");
            exit();
        }

    }
}