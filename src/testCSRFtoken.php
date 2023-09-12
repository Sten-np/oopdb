<?php
//START SESSION
session_start();

//GENERATE RANDOM TOKEN (STRING)
$_SESSION["token"] = bin2hex(random_bytes(32));
print_r($_SESSION);
