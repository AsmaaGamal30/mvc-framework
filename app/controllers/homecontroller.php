<?php

namespace MVC\controllers;
use MVC\core\controller;
use PDO;
class homecontroller extends controller
{
    public function index(){
        $data = $this->db()->run("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
        $title = "home index";
        $h1  = "Asmaa Gamal";
        $this->view('home/index',['title'=>$title , 'h1'=>$h1 , 'data'=>$data]);
    }
}