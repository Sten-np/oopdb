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

          if ($security->verifyCSRFToken($_POST['csrf_token']))
          {

              Db::$db->update("user", $data, $_POST['user_id_check']);

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
