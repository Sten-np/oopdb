<?php


namespace Project9;

interface Database
{
    public function __construct(string $host, string $dbname, string $username, string $password);

    public function disconnect();

    public function select(string $table, array $columns = ['*'], array $where = []);

    public function insert(string $table, array $param);

    public function update();

    public function delete();
}