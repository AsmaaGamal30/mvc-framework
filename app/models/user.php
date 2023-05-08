<?php

namespace MVC\models;

use MVC\core\model;
use PDO;

class user extends model
{
    public function getAllUsers(){
        $data = model::db()->rows("SELECT * FROM `users`");
        return $data;
    }

    public function getUser($email,$password){
        $data = model::db()->row("SELECT * FROM `users` WHERE `email` = ? AND `password` = ?",[$email,$password]);
        return $data;
    }

    public function insertUser($username,$email,$password){
        $data = [
            'name' => $username,
            'email' => $email,
            'password' => $password
        ];
        $res = model::db()->insert('users',$data);
        return $res;
        
    }
}