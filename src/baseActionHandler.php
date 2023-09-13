<?php

namespace Project9;

class baseActionHandler
{
    protected Smarty $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->template_dir = 'path/to/templates/'; // This line triggers the magic __set method in Smarty.
    }
}

