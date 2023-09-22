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
      try
      {
          $data = [
            'username' => $_POST['username'],
            'emailadress' => $_POST['emailadress'],
            'phonenumber' => $_POST['phonenumber'],
          ];
          if(!empty($_POST['password']))
          {
              // Hash the password
              $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
              $data['password'] = $hashedPassword;
          }

          if(!isset($_POST['username']) || strlen($_POST['username']) > 75 || !preg_match('/^[a-zA-Z-0-9 ]+$/', $_POST['username']))
          {
              echo "<h2>Your username has more than 75 characters</h2>";
              echo "The username you've created, has more than 75 characters or special characters. Which is not allowed!<br>";
              echo "The username you've created:<br>{$_POST['username']}";
              header("Refresh:3; url=index.php?action=userInformation", true, 303);
              exit();
          }
          if(!isset($_POST['emailadress']) || strlen($_POST['emailadress']) > 45 || !filter_var($_POST['emailadress'], FILTER_VALIDATE_EMAIL))
          {
              echo "<h2>Your email adress has more than 45 characters or isn't a email</h2>";
              echo "The emailadress you've created, has more than 45 characters or isn't a email. Which is not allowed!<br> {$_POST['username']}";
              header("Refresh:3; url=index.php?action=userInformation", true, 303);
              exit();
          }

          if (!isset($_POST['phonenumber']) || empty($_POST['phonenumber']) || strlen($_POST['phonenumber']) > 15 || !preg_match('/^[0-9]{2}-[0-9]{8}+$/', $_POST['phonenumber']))
          {
              echo "<h2>Your phone number has more than 15 characters or contains invalid characters</h2>";
              echo "<p>Your account has not been created because the phone number you provided is not allowed</p>";
              echo "<p>Or you typed your phone number like 06 12345678. Which must be 06-12345678</p>";
              echo "<p>The phone number you've entered: <br>{$_POST['phonenumber']}</p>";
              header("Refresh:3; url=index.php?action=userInformation", true, 303);
              exit();
          }

          if((!empty($_POST['password']) || !empty($_POST['passwordrepeat'])) && $_POST['passwordrepeat'] !== $_POST['password'])
          {
              echo "<h2>Your password doesn't match!</h2>";
              echo "Password must be the same of the Repeat Password!<br>";
              header("Refresh:3; url=index.php?action=userInformation", true, 303);
              exit();
          }



          if ($security->verifyCSRFToken($_POST['csrf_token']))
          {

              $user = Db::$db->update("user", $data, $_POST['user_id_check']);

              // Expire the CSRF token
              $security->expireCSRFToken($_POST['csrf_token']);

              echo "Change credentials successful!";
              echo "For the change occurs, you have to log out first!";
              header('Location: index.php?action=userChangeSuccesFull');
          }

      } catch (\PDOException $error)
      {
          throw new \Exception($error);
      }
  }
}
