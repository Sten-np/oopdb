<?php

namespace Project9;

class AdminChangeState
{

    public function __construct()
    {
        try
        {
            $data = [
                'bool_adm' => $_POST['bool_adm_stateform']
            ];
            Db::$db->update("user", $data , $_POST['user_id_stateform']);

            echo '<script>alert("Changed to admin successful!");</script>';
            header('Location: index.php?action=admin-users');

        }catch (\PDOException $error)
        {
            throw new \Exception($error);
        }
    }

}