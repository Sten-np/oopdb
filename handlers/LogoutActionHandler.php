<?php

namespace Handlers;

use Project9\Security;

$security = new Security();

class LogoutActionHandler
{
    public function handleLogout()
    {
        global $security;

        // Check if the user is not logged in
        if (!isset($_SESSION['username']) && !isset($_SESSION['emailadress'])) {

            session_unset();
            // Display a confirmation message
            echo "<h2>You are logging out!</h2>";
            echo "<p>Bye! See you next time!</p>";

            // Redirect to the homepage after logout
            header("Refresh: 3; url=index.php");
            exit();
        } else {
            // If the user is logged in, you can handle it accordingly
            // For example, show an error message or redirect to a login page
            echo "<h2>You are not logged in yet!</h2>";
            header('Location: login.php'); // Redirect to the login page
            exit();
        }
    }
}



