<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;

class model
{
    static function db(){
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE_NAME,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => CHARSET,
            'host' => SERVER,
            'port' => PORT
        ];

        return $db = new Database($options);
    }
}
