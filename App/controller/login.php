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
use Inc\home\Classes\DATA\Seeds;

class login{
 private static $pdo;
public function __construct(){
  session_start();
  connect::getInstance();
     
  self::$pdo = connect::getConnection();
}


  public function register(){

   
   if(isset($_SESSION['id'])){
   view::redirect("sub-admin");
   }elseif(isset($_SESSION['ID'])){
    view::redirect("admin");
   

      
   }else{
    view::go("register",['lang'=>'en' , 'dir'=> 'ltr' , 'class'=>'hold-transition login-page']);
    
   }
   
  
  
  }

  public function log(){

   
      if(isset($_SESSION['id'])){
        view::redirect("sub-admin");
       }elseif(isset($_SESSION['ID'])){
        view::redirect("admin");
       
    
          
       }else{
        view::go("login",['lang'=>'en' , 'dir'=> 'ltr','class'=>'hold-transition login-page']);
        
       }
    


  }

  public function register_POST(){
     session_start();

    $req = app('request')->body;
    $name = $req['name'];
    $phone = $req['phone'];
    $email = $req['email'];
    $org = $req['org'];
    $password = $req['password'];
    $gender = "male";
    $code = Seeds::Code();
    $id =  query::Insert("register" , ["name", "phone","email" , "org", "password" , "gender" ] , [$name ,$phone ,$email,$org,$password, $gender ] )->getID();
    query::Insert("active" , ["code", "id_user","statues" ] , [$code ,$id  ,"disactive" ] )->getID();
    $_SESSION['id'] = $id;


//send mail



  view::redirect("sub-admin");

  // view::go("register",['lang'=>'en' , 'dir'=> 'ltr']);
  }


  public function log_POST(){
   

 

    $req = app('request')->body;
  
    $email = $req['email'];
    
    $password = $req['password'];

    
        $statment = self::$pdo->prepare("select * from register where email=:email");
        $statment->execute([ 'email' => $email  ]);
       
        $row = $statment->fetch();
         $id = $row['id'];
        $dbPassword = $row['password'];
         $dbEmail = $row['email'];
        if( $dbPassword == $password && $email == $dbEmail ){

  

          $stmt = self::$pdo->prepare("SELECT 1 FROM register WHERE id=? and statues=?");
          $stmt->execute([$id,"active"]);
        $userExists = $stmt->fetchColumn();
        if($userExists){ 
       $statment2 = self::$pdo->prepare("select * from roles where id_user=:id_user  ");
         $statment2->execute([ 'id_user' => $id  ]);

         $rows = $statment2->fetch();
        $ad = $rows['role_name'];

       

  if($ad == "super"){
    $_SESSION['ID'] = $id;
    view::redirect("admin");
  }else{
    $_SESSION['id'] = $id;
    view::redirect("sub-admin");
  }
       
        
}else{
  view::redirect("warn");
}
       }else{
        view::redirect("login");
       
       }

  }


  public function aouth($code){

   $stmt = self::$pdo->prepare("SELECT 1 FROM active WHERE code=? and statues=?");
   $stmt->execute([$code,"disactive"]);
 $userExists = $stmt->fetchColumn();
if($userExists){


$disactive = "disactive";
  $statmentz = self::$pdo->prepare("update active set statues = ?  where code='$code' and statues='$disactive'  ");
  $statmentz->execute(['active']);
  view::redirect("../sub-admin");
 
}else{
  view::redirect("../register");
}



   
     



  }


  public function active(){

    view::go("active");
   
  }

  public function testMail(){
//   require_once dirname(__FILE__).'vendor/autoload.php';

// // Create the Transport
// $transport = (new Swift_SmtpTransport('mail.togols.com', 2525))
//   ->setUsername('info@togols.com')
//   ->setPassword('h@ss@m1991aa')
// ;

// // Create the Mailer using your created Transport
// $mailer = new Swift_Mailer($transport);

// // Create a message
// $message = (new Swift_Message('Wonderful Subject'))
//   ->setFrom(['info@togols.com' => 'Hossam'])
//   ->setTo(['hossamhassan889@gmail.com', 'other@domain.org' => 'A name'])
//   ->setBody('Here is the message itself');

// // Send the message
// $result = $mailer->send($message);
echo getcwd();
    //  $mail->sendFrom();
    //  $mail->setTo();
    //  $mail->setBody();
    //  $mail->send("");
    //  $mail->send();
  }

  public function warn(){

    view::go('warn');
  }



  public function logout(){
    
     
      session_destroy();
      session_unset();

      view::redirect("login");
 
  }


  


}










?>