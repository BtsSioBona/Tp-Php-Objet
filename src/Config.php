<?php

declare(strict_types = 1);

namespace src;

// db
Config::write('db.host', 'localhost');
//Config::write('db.port', '0000');
Config::write('db.basename', 'tppdo');
Config::write('db.user', 'tp');
Config::write('db.password', 'tp');
$options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
$options[\PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";

class Config
{
    private static $confArray;

    public static function read($name)
    {
        return self::$confArray[$name];
    }

    public static function write($name, $value)
    {
        self::$confArray[$name] = $value;
    }
}