<?php

namespace Project9;

use Exception;
use PDO;
use PDOException;

class Mysql implements Database
{
    public $database;

    public function connect(string $host, string $dbname, string $username, string $password)
    {
        try
        {
            $this->database = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOException $error)
        {
            throw new Exception($error->getMessage());
        }
    }

    public function select()
    {
        // TODO: Implement select() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    //username, password, passwordRepeat, email
    public function insert(string $table, $params = []) : void
    {
        try {

            $columns = implode(', ', array_keys($params));
            $values = ":" . implode(' ,:', array_keys($params));
            //It can be $insert or $query
            $query = $this->database->prepare("INSERT INTO $table($columns) VALUES ($values)");
            foreach ($params as $key => $value) {
                $query->bindValue(':' . $key, $value);
            }
            $query->execute();
        } catch(PDOException $error)
        {
            throw new Exception($error->getMessage());
        }

        // TODO: Implement insert() method.
//        $insert = $database->prepare("INSERT INTO users SET username=:username, password=:password");
//        INSERT INTO users (username, password)) VALUES (:username, :password);
//        $insert->bindParam(":username", $user);
//        $insert->bindParam(":password", $_POST['password']);
//        $insert->execute();

    }

    public function disconnect()
    {

    }
}