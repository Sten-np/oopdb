<?php

namespace Project9;
class User
{
    private string $username;
    private string $password;
     private $database;

    public function __construct(string $username, string $password, string $repeatPassword)
    {
        $this->username = $username;
        if ($password == $repeatPassword) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->password = $password;
            Mysql::db->insert("user", ["username" => $username, "password" => $password]);
        }
        self::$users[] = $this;
}
}