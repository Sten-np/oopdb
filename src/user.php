<?php

class User
{
    private string $username;
    private string $password;
    public static array $users = [];

    public function __construct(string $username, string $password, string $repeatPassword)
    {
        $this->username = $username;
        if ($password == $repeatPassword) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }
        self::$users[] = $this;
        $db->insert("user", {$username, $password});
}
}