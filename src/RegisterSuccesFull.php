<?php

namespace Project9;

class RegisterSuccesFull
{
    public function handleRegisterSuccesFull()
    {

        global $template;
        // Display the "productPage.tpl" template
        $template->display("template/registerSuccesfull.tpl");
    }
}