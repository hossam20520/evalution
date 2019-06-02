<?php
namespace Necropolis\database;
use Necropolis\interfaces\CRUD;
use App\config\database\connect;
use PDO;
class query implements CRUD {
    private static $pdo;
    private static $col = null ;
    private static $_instance =null;
  public function __construct(){
        connect::getInstance();
     
        self::$pdo = connect::getConnection();
    
      
    }


    public static function Insert($table , $col , $val){

        if(!self::$_instance) { 

			self::$_instance = new self();
		}
         
        $cols = implode("," ,$col);
        $num = count($col);
        $out = "";
        for($i=1; $i<=$num; $i++){
         $out .= "?,";
        }
        $fin = rtrim($out, ",");
   $values = implode(",",$val);

   $sql = "insert into ".$table."(".$cols.") values(".$fin.")";
   $statment = self::$pdo->prepare($sql);
   $statment->execute($val);

   return self::$_instance;

    }

    public function getBack($col){


    }

    public  static function find($table , $col , $match , $out){

        $statment = self::$pdo->prepare("select * from ".$table." where id =:id   ");
        $statment->execute([ 'id' => 1 ]);
        $row = $statment->fetch();

       self::$col = $row[$out];

       return self::$_instance;

        

    }



    public function getID(){
       
            $id =  self::$pdo->lastInsertId();
       
      
       
        return $id;
    }

    public function getCol(){
       return  self::$col;
    }
 
}














?>