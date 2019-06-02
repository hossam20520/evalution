<?php
namespace App\languages;
use App\languages\en\en;
use App\languages\ar\ar;

class swlang{

    private static $_instance;
    private static $lang;

    public function __construct(){

    }

    public function getInstance(){
        if(!self::$_instance){
            self::$_instance = new self;

        }
        return  self::$_instance;
    }
    public static function setLang($lang){
      self::$lang = $lang;
    }

    public static function getLang($key){
     if(self::$lang == "en"){
      return en::english($key);
     }else{
        return ar::arabic($key);
     }
 

    }
    
}








?>