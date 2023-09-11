<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Project9\Mysql;
use Project9\ProductList;
use Project9\Nintendo;
use Project9\XBox;
use Project9\Playstation;
use Project9\User;
use Project9\Db;

session_start();

$template = new Smarty();
$template->clearCompiledTemplate();
$template->clearAllCache();




if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}

$database = new Db();

//I've added a extra $_GET['action'], so that the 'switch statement' will work!
$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {
    case "registerForm":
        $template->display("template/registerForm.tpl");
        break;
    case "register":
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
        break;
    case "loginForm":
        $template->display("template/loginForm.tpl");
        break;
        //The login doesn't work right now. We have to check this.
    case "login":
        if (!empty($_POST['emailadress']) && !empty($_POST['password'])) {
            $email = $_POST['emailadress'];
            $password = $_POST['password'];

            // Implement your authentication logic here
            // Check if the provided email and password match a user in the database

            // Example of authentication logic (using PDO and assuming $database is your PDO instance)
            $sql = "SELECT * FROM user WHERE emailadress = :email";
            $stmt = $database->prepare($sql);
            $stmt->bindValue(':emailadress', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Authentication successful
                // Set the user's session or redirect to a dashboard page
                $_SESSION['user'] = $user;
                echo "<h2>Welcome " . $user['username'] . "</h2><br>";
                echo "<p>You've logged in.</p>";
                header("Refresh:3; url=index.php", true, 303);
                exit;
            } else {
                // Authentication failed
                // Display an error message or redirect back to the login page with an error parameter
                echo "<p>Incorrect email or password. Please try again.</p>";
                header("Refresh:3; url=index.php?action=loginForm", true, 303);
                exit;
            }
        } else {
            // Handle login errors (e.g., missing fields)
            header("Location: index.php?action=loginForm&error=1");
            exit;
        }
        break;


    case "productPage":
        $template->display("template/productPage.tpl");
        break;
    default:
        $template->display("template/layout.tpl");
        break;

}


//Connecting to the database
$database = new Mysql("localhost", "gamehub", "root", "");
$database->__construct("localhost", "gamehub", "root", "");



////Creating new products also for testing
//$productList = new ProductList();
//
//$nintendo1 = new \Project9\Nintendo("Super Mario Bros", "img/GameHub", 60, 121, "This is Sparta!!!", 0,);
//$nintendo1->addRequirements("all your money");
//$nintendo1->setGenre("Adventure");
////to add the product in the array ProductList
//$productList->addProduct($nintendo1);
//
//
//print "<table style=width: 100 border='1px solid black'>
//         <tr>
//         <th>Catergory</th>
//         <th>Naam Product</th>
//         <th>Verkoopprijs</th>
//         <th>Genre</th>
//         </tr>";
//
//foreach ($productList->getProducts() as $products)
//{
//    print "<tr>
//         <td>".$products->setCategory()."</td>
//         <td>".$products->getName()."</td>".
//        "<td>€".$products->getCalculatePrice()."</td>.
//         <td>".$products->printInfo()."</td>
//         </tr>";
//
//}



