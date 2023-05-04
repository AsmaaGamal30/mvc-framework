<?php 

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;
class controller
{
    public function view($path,$pram){
        extract($pram);
        require_once(VIEWS.$path.'.php');
    }

    public function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'mvc',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];

        return $db = new Database($options);
    }
}