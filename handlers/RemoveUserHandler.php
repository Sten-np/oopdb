<?php

namespace Handlers;

use PDOException;
use PDO;
use Project9\Db;

class RemoveUserHandler
{
    public function __construct()
    {
        try
        {
            if(!isset($_POST['removeUserSubmit']))
            {
                echo "<h2>User removed succesfull!</h2>";
                header("Refresh:1; url=index.php?action=admin-users");
                exit();
            }
            Db::$db->delete("user");
        }
        catch(PDOException $e)
        {
            throw new PDOException("Error! " . $e);
        }

        header("Refresh:1; url=index.php?action=admin-users");
    }

}

?>
