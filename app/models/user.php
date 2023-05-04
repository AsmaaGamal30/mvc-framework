<?php

namespace MVC\models;

use MVC\core\model;
use PDO;

class user extends model
{
    public function getAllUsers(){
        $data = model::db()->run("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}