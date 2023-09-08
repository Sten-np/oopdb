<?php

namespace Project9;

class Db
{
    public static $db;

    public function __construct()
    {
        self::$db = new Mysql("localhost", "gamehub", "root","");
    }
}