<?php
use MVC\core\app;

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLERS",APP.'controllers'.DS);
define("CORE",APP.'core'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);

//config

define("SERVER","localhost");
define("USERNAME","root");
define("CHARSET","utf8");
define("DATABASE_TYPE","mysql");
define("PASSWORD","");
define("DATABASE_NAME","mvc");
define("PORT","3306");
define("DOMAIN_NAME","http://mvc.test/");


require_once("../vendor/autoload.php");

$app = new MVC\core\app();



