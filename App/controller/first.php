<?php
namespace App\controller;
use Jenssegers\Blade\Blade;
use Necropolis\core\view\view;
use App\config\database\connect;
use Necropolis\database\query;
use Inc\home\Classes\Core;
use Inc\home\Classes\Facade;
use Necropolis\sessions\session;
use App\languages\swlang;

class first{




    public function launch(){

        view::go("welcom",['lang'=>'en' , 'dir'=> 'ltr']);
    }
}










?>