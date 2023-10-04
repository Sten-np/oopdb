<?php

namespace Handlers;

class AdminInformationActionHandler
{
    public function handleAdminInformationPage()
    {

        global $template;
        // Display the "productPage.tpl" template
        $template->display("template/admin-information.tpl");
    }
}
