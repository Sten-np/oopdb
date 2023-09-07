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
            $this->password = $password;
            $this->database->insert("user", ["username" => $username, "password" => $password]);
        }
        self::$users[] = $this;
}
}