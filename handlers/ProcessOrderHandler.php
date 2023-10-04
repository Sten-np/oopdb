<?php

namespace Handlers;

class ProcessOrderHandler
{
    public function __construct()
    {
        if(!isset($_POST['submitorder']))
        {
            echo "<script>alert('Incorrect submit!')</script>";
            header("refresh: 1; url = index.php?action=cartPage");
            exit();
        }

    }

}