<?php

namespace Project9;

class UserListHandler
{
    public function __construct()
    {
        try
        {
            $where = ['bool_adm' => 0];
            $users = Db::$db->select('user', ['id', 'username', 'emailadress' ,'bool_adm'], $where);
        }catch (\PDOException $error)
        {
            throw new \Exception("Error!" . $error);
        }



        global $template;
        $template->assign("users", $users);
        $template->display("template/admin-users.tpl");
    }

}