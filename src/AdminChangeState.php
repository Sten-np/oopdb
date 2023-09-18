<?php

namespace Project9;

class AdminChangeState
{

    public function __construct()
    {
        try
        {
            $where = ['bool_adm' => 1];
            $admins = Db::$db->INSERT('user', ['id', 'username', 'bool_adm'], $where);

        }catch (\PDOException $error)
        {
            throw new \Exception($error);
        }
    }

}