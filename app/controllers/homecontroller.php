<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;

class homecontroller extends controller
{
    public function index(){
        $user = new user();
        $data = $user->getAllUsers();
        $title = "home index";
        $h1  = "Asmaa Gamal";
        $this->view('home/index',['title'=>$title, 'h1'=>$h1, 'data'=>$data]);
    }
}