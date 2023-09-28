<?php

namespace Project9;

class UserChangeSuccesFull
{
    public function handleUserChangeSuccesFull()
    {

        global $template;
        // Display the "productPage.tpl" template
        $template->display("template/userChangeSuccesFull.tpl");
    }
}