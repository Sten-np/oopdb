<?php

namespace Project9;

class AdminChangeState
{

    public function __construct()
    {
        try
        {
            if (!isset($_POST['submit']))
            {
                echo '<script>alert("Invalid! Page will refresh.");</script>';
                header('Refresh:1; index.php?action=admin-admins');
                exit();
            }
            $data = [
                'bool_adm' => $_POST['bool_adm_stateform']
            ];
            Db::$db->update("user", $data , $_POST['user_id_stateform']);
            header('Location: index.php?action=admin-users');
        }catch (\PDOException $error)
        {
            throw new \Exception($error);
        }
    }

}
