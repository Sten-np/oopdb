<?php

namespace Handlers;

use Project9\Db;

class AdminHandler
{
    private string $email;
    private string $pass;

    public function __construct(string $email, string $pass)
    {
        if(!empty($_POST['email']) && !empty($_POST['pass']))
        {
            $this->email = $email;
            $this->pass = $pass;
            $this->passVerify();
        }
    }


    public function passVerify() {
        $where = ['emailadress' => $this->email];
        $admin = Db::$db->select('user', ['*'], $where);
        if (!empty($admin) && password_verify($this->pass, $admin[0]['password'])) {
            // Authentication successful
            // Set the user's session or redirect to a dashboard page
            if(isset($admin[0]['bool_adm']) && $admin[0]['bool_adm'] != 1)
            {
                echo "Your account is not permitted to login as admin...";
                header("Refresh:2; url=index.php?action=admin-login");
                exit();
            }
            $_SESSION['admin'] = $admin[0];
            echo "<h2>Welcome " . $admin[0]['username'] . "</h2><br>";
            echo "<p>You've logged in.</p>";
            header("Refresh:2; url=index.php");
            exit;
        } else {
            // Authentication failed
            // Display an error message or redirect back to the login page with an error parameter
            echo "<p>Incorrect email or password. Please try again.</p>";
            header("Refresh:3; url=index.php?action=admin-login");
            exit;
        }

    }
}