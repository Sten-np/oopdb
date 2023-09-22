<?php

namespace Handlers;

class UserInformationActionHandler
{
    public function handleUserInformationPage()
    {

        global $template;
        // Display the "productPage.tpl" template
        $template->display("template/userInformation.tpl");
    }
}
