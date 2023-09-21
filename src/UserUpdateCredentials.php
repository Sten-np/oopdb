<?php

namespace Project9;

require_once 'Security.php';

$security = new Security();

if (!isset($_SESSION['csrf_token'])) {
    // Generate a new CSRF token and store it in the session
    $_SESSION['csrf_token'] = $security->generateCSRFToken();
}

class UserUpdateCredentials
{
    public function __construct()
    {
        global $security;
        try {
            if (isset($_POST['csrf_token']) && $security->verifyCSRFToken($_POST['csrf_token'])) {
                // Validate and sanitize user inputs
                $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['emailadress'], FILTER_SANITIZE_EMAIL);
                $phonenumber = filter_var($_POST['phonenumber'], FILTER_SANITIZE_STRING);
                $password = $_POST['password']; // You should validate and hash the password securely.

                // Perform the database update
                $data = [
                    'username' => $username,
                    'emailadress' => $email,
                    'phonenumber' => $phonenumber,
                    'password' => $password, // Remember to hash the password securely.
                ];
                Db::$db->update("user", $data, $username, $email, $phonenumber, $password);

                // Redirect upon successful update
                echo '<script>alert("Change your credentials was successful!");</script>';
                header('Location: index.php?action=userInformation');
                exit(); // Ensure no further code execution after redirection.
            } else {
                // Handle CSRF token verification failure (e.g., show an error page).
                echo '<script>alert("CSRF Token Verification Failed!");</script>';
            }
        } catch (\PDOException $error) {
            // Log or handle the database error gracefully
            throw new \Exception($error);
        }
    }
}