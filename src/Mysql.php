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

    public function select(string $table, array $columns = ['*'], array $where = [])
    {
        try {
            // Build the SELECT query
            $selectColumns = implode(', ', $columns);
            $sql = "SELECT $selectColumns FROM $table";

            if (!empty($where)) {
                $whereConditions = [];
                foreach ($where as $key => $value) {
                    // Check if the value is an array (for IN clause)
                    if (is_array($value)) {
                        $inValues = implode(',', array_fill(0, count($value), '?'));
                        $whereConditions[] = "$key IN ($inValues)";
                    } else {
                        $whereConditions[] = "$key = :$key";
                    }
                }
                $sql .= " WHERE " . implode(' AND ', $whereConditions);
            }

            $query = self::$db->prepare($sql);

            if (!empty($where)) {
                foreach ($where as $key => $value) {
                    // Bind values differently for IN clause
                    if (is_array($value)) {
                        foreach ($value as $index => $val) {
                            $query->bindValue($index + 1, $val);
                        }
                    } else {
                        $query->bindValue(":$key", $value);
                    }
                }
            }

            $query->execute();

            // Fetch and return the results as an associative array
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            throw new Exception($error->getMessage());
        }
    }



    public function update(string $table, array $data, string $where)
    {
        try {
            $sql = "UPDATE $table SET ";
            $values = [];

            foreach ($data as $key => $value) {
                $sql .= "$key = :$key, ";
                $values[":$key"] = $value;
            }

            $sql = rtrim($sql, ', ');
            $sql .= " WHERE `id` =  $where";

            $stmt = self::$db->prepare($sql);
            $stmt->execute($values);

            return $stmt->rowCount() > 0; // Check if any rows were affected
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    //username, password, passwordRepeat, email
    public function insert(string $table, $params = []) : void
    {
        try {

            $columns = implode(',', array_keys($params));
            $values = ":" . implode(' , :', array_keys($params));
            //It can be $insert or $query
            $insert =  self::$db->prepare("INSERT INTO $table($columns) VALUES ($values)");
            foreach ($params as $key => $value) {
                $insert->bindValue(':' . $key, $value);
            }
            $insert->execute();
        } catch(PDOException $error)
        {
            throw new Exception($error->getMessage());
        }

        // TODO: Implement insert() method.
//        $insert = $db->prepare("INSERT INTO users SET username=:username, password=:password");
//        INSERT INTO users (username, password)) VALUES (:username, :password);
//        $insert->bindParam(":username", $user);
//        $insert->bindParam(":password", $_POST['password']);
//        $insert->execute();

    }

    public function disconnect()
    {
        try
        {
            self::$db = null;
        }catch(PDOException $error)
        {
            throw new Exception($error->getMessage());
        }
    }
}
