<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;


class homecontroller extends controller
{
    public function __construct(){
        session::Start();
    }

    public function index(){
        $user = new user();
        $data = $user->getAllUsers();
        $title = "home index";
        $h1  = "Asmaa Gamal";
        $this->view('home/index',['title'=>$title, 'h1'=>$h1, 'data'=>$data]);
    }

    public function login(){
        $title = "login";
        $this->view('home/login',['title'=>$title]);
    }

    public function postLogin(){
        $validation = GUMP::is_valid($_POST,[
            'email'=>'required'
        ]);
        if($validation == 1){
            $user = new user();
            $data = $user->getUser($_POST['email'],$_POST['password']);
            Session::Set("user",$data);
            helpers::redirect('user/index');
        }


    }

    public function logout(){
        Session::Stop();
    }

    public function register(){
        $title = "register";
        $this->view('home/register',['title'=>$title]);
    }

    public function postRegister(){
        $validation = GUMP::is_valid($_POST,[
            'email'=>'required',
            'username'=>'required',
            'password'=>'required|between_len,4;100',
        ]);
        if($validation == 1){
            $user = new user();
            $data = $user->insertUser($_POST['username'], $_POST['email'], $_POST['password']);
            Session::Set("user",$data);
            helpers::redirect('user/index');
        }else{
            Session::Stop();  
        }
    }
}