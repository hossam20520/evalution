<?php

define('DS' , DIRECTORY_SEPARATOR, true);
define('BASE_PATH', __DIR__. DS, true);


require_once 'vendor/autoload.php';
use Jenssegers\Blade\Blade;
use Necropolis\core\view;
use Necropolis\core\core;
use Necropolis\app\hello;
use App\controller\test;
use App\Middleware\login;






$app = System\App::instance();
$app->request = System\Request::instance();
$app->route = System\Route::instance($app->request);
$route = $app->route;




require_once 'go/go.php';


$route->end();

?>