<?php
namespace Project9;
interface Database
{
    public function connect(string $username, string $password, string $host, string $dbname);
    public function select();
    public function update();
    public function delete();
    public function insert();
    public function disconnect();
}