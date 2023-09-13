<?php

namespace Project9;

class LoginActionHandler
{

    public function handleLoginForm()
    {
        global $template;
        $template->display("template/loginForm.tpl");
    }

    public function handleLogin()
    {
        // Handle login logic here
        if (!empty($_POST['emailadress']) && !empty($_POST['password'])) {
            $email = $_POST['emailadress'];
            $password = $_POST['password'];

            $where = ['emailadress' => $email];
            $users = Db::$db->select('user', ['*'], $where);

            if (!empty($users) && password_verify($password, $users[0]['password'])) {
                // Authentication successful
                // Set the user's session or redirect to a dashboard page
                $_SESSION['user'] = $users[0];
                echo "<h2>Welcome " . $users[0]['username'] . "</h2><br>";
                echo "<p>You've logged in.</p>";
                header("Refresh:3; url=index.php");
                exit;
            } else {
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
