<?php

namespace App\config\database;
use PDO;


class connect{
    private $_connection;
    public $instancex;
	private static $_instance; 
	private $_host = "127.0.0.1";  
	private $_username = "root";       // change this username 
	private $_password = "";          // change the password
    private $_database = "eva";   // the database name
    private $charset = 'utf8';      // charset encode
    public static $_pdo;
   private $option = [
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
       PDO::ATTR_EMULATE_PREPARES => false,
   ];

  
   
    private function __construct() {

       // php -r "new PDO('mysql:host=127.0.0.1;dbname=inject', 'root', '');"
    $con = "mysql:host=$this->_host;dbname=$this->_database;charset=$this->charset";
try{
    $pdo = new PDO($con,$this->_username, $this->_password, $this->option);
       self::$_pdo = $pdo;
}catch (PDOException $e){

echo $e->getMessage();

}
    }
    
    public static function getInstance() {
		if(!self::$_instance) { 
			self::$_instance = new self();
		}
		return self::$_instance;
    }
    

    private function __clone() {

     }
	// Get mysqli connection
	public static function getConnection() {
		return self::$_pdo;
	}



    
}



?>