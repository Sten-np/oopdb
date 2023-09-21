<?php

namespace Project9;

require_once 'Security.php';

$security = new Security();

if (!isset($_SESSION['csrf_token']))
{
    // Generate a new CSRF token and store it in the session
    $_SESSION['csrf_token'] = $security->generateCSRFToken();
}

class LoginActionHandler
{

    public function handleLoginForm()
    {
        global $template;
        $template->display("template/loginForm.tpl");
    }

    public function handleLogin()
    {
        global $security;
        // Handle login logic here
        if (!empty($_POST['emailadress']) && !empty($_POST['password']))
        {
            $email = $_POST['emailadress'];
            $password = $_POST['password'];

            $where = ['emailadress' => $email];
            $users = Db::$db->select('user', ['*'], $where);

            if (!empty($users) && password_verify($password, $users[0]['password'])) {
                //Will check the CSRF Token first
                if ($security->verifyCSRFToken($_POST['csrf_token'])) {
                    // Authentication successful
                    // Set the user's session or redirect to a dashboard page
                    $_SESSION['user'] = $users[0];
                    echo "<h2>Welcome " . $users[0]['username'] . "</h2><br>";
                    echo "<p>You've logged in.</p>";

                    // Expire the CSRF token
                    $security->expireCSRFToken($_POST['csrf_token']);

                    header("Refresh:3; url=index.php", true, 303);
                    exit;
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
                    header("Refresh:3; url=index.php?action=loginForm");
                    exit;
                }
            } else {
                // Handle login errors (e.g., missing fields)
                header("Location: index.php?action=loginForm&error=1");
                exit;
            }
            global $template;

            // Assign success messages to Smarty variables
            $template->assign('welcomeMessage', "Welcome " . $users[0]['username']);
            $template->assign('loginMessage', "You've logged in.");

            // Display the success template
            $template->display("template/login_success.tpl");
            header("Refresh:3; url=index.php");
            exit;
        }
    }

