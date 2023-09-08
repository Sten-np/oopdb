<?php

namespace Project9;

class User
{
    private string $username;
    private string $password;
    public static array $users = [];

    public function __construct(string $username, string $password, string $repeatPassword)
    {
        $this->username = $username;
        if($password == $repeatPassword)
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->password = $password;
            Db::$db->insert("user", ["username" => $username, "password" => $password]);
        }
        self::$users[] = $this;
//        $this->database->insert("user", [$username, $password]);

    }
}
