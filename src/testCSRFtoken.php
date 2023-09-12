<?php
//START SESSION
session_start();

//GENERATE RANDOM TOKEN (STRING)
//Generate a random token string
$_SESSION["CSRFToken"] = bin2hex(random_bytes(32));
echo "Generated Token: " . $_SESSION["CSRFToken"] . "<br>";
print_r($_SESSION);
//Set expiry (less time for hackers)
$_SESSION["CSRFToken-expire"] = time() + 3600; //1 hour


//Token code = 5dde512677f072bbecfc5e3ad3e45cead8106b5bf4e482585b7defc718b79ca7

?>
<!DOCTYPE html>
<html>
<head>

</head>

<body>
<form method="POST">

</form>
</body>
</html>
