<?php

namespace Project9;

class AdminListHandler
{
    public function __construct()
    {
        try
        {
            $where = ['bool_adm' => 1];
            $admins = Db::$db->select('user', ['id', 'emailadress' ,'username', 'bool_adm'], $where);
        }catch (\PDOException $error)
        {
            throw new \Exception("Error!" . $error);
        }



        global $template;
        $template->assign("admins", $admins);
        $template->display("template/admin-admins.tpl");
    }

}
