<?php

namespace Project9;

use Exception;
use PDO;
use PDOException;

class Mysql implements Database
{
    protected $database;

    public function connect(string $username, string $password, string $host, string $dbname)
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

    public function insert()
    {
        // TODO: Implement insert() method.
    }

    public function disconnect()
    {

    }
}