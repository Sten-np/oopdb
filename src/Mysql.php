<?php

namespace Project9;

use Exception;
use PDO;
use PDOException;

class Mysql implements Database
{
    public static $db;

    public function __construct(string $host, string $dbname, string $username, string $password)
    {
        try
        {
            self::$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
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

    public function insert(string $table, array $params = []):void
    {

       try {
           $columns = implode(',', array_keys($params));
           $values = ":".implode(', :',array_keys($params));
           $insert = self::$db->prepare("INSERT INTO $table ($columns) VALUES ($values)");
           foreach ($params as $key=>$value)
           {
               $insert->bindValue(':'.$key, $value);
           }
           $insert->execute();
       }catch(PDOException $error)
       {
           throw new Exception($error->getMessage());

       }

//        $insert = $db->prepare("INSERT INTO users SET username=:username, password=:password");
        //INSERT INTO users (username, password) VALUES (:username, :password);
//        $insert->bindParam(":username", $user);
//        $insert->bindParam(":username", $_POST['password']);
//        $insert->execute();


    }

    public function disconnect()
    {

    }
}