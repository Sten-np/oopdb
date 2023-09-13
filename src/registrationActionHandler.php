<?php

namespace Project9;
class registrationActionHandler extends baseActionHandler
{
    public function handleRegisterForm()
{
    $this->smarty->display("template/registerForm.tpl");
}

    public function handleRegister()
{
    if (!empty($_POST['username']) && !empty($_POST['emailadress']) && !empty($_POST['phonenumber']) && !empty($_POST['password']) && !empty($_POST['passwordrepeat'])) {
        // Validate user input (e.g., check email format, password requirements)
        // ...

        // Assuming you have a User class for registration
        $user = new User($_POST['username'], $_POST['emailadress'], $_POST['phonenumber'], $_POST['password'], $_POST['passwordrepeat']);

        // Display a success message
        echo "<h2>Welcome " . $_POST['username'] . "</h2><br>";
        echo "<p>Your account has been created.</p>";
        echo "<p>You can now login with your email address " . $_POST['emailadress'] . "</p>";
        header("Refresh:3; url=index.php", true, 303);
        exit;
    }

    // Assign success messages to Smarty variables
    $this->smarty->assign('welcomeMessage', "Welcome " . $_POST['username']);
    $this->smarty->assign('accountCreatedMessage', "Your account has been created.");
    $this->smarty->assign('loginMessage', "You can now login with your email address " . $_POST['emailadress']);

    // Display the success template
    $this->smarty->display("template/register_success.tpl");
    header("Refresh:3; url=index.php", true, 303);
    exit;
}
}