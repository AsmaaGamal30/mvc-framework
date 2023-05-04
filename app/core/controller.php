<?php 

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;
class controller
{
    public function view($path,$pram){
        extract($pram);
        require_once(VIEWS.$path.'.php');
    }

}