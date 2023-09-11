<?php

namespace Project9;

class User
{
    private string $username;
    private string $emailadres;
    private string $phonenumber;
    private string $password;
    public static array $users = [];

    public function __construct(string $username, string $emailadres, string $phonenumber, string $password, string $repeatPassword)
    {
        $this->username = $username;
        $this->emailadres = $emailadres;
        $this->phonenumber = $phonenumber;

        if($password == $repeatPassword)
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->password = $password;
            Db::$db->insert("user", ["username" => $username, "emailadress" => $emailadres, "phonenumber" => $phonenumber, "password" => $password]);
        }
        self::$users[] = $this;
//        $this->database->insert("user", [$username, $password]);

    }
}
