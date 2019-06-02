<?php
namespace App\Middleware;
use Necropolis\core\view\view;
use Jenssegers\Blade\Blade;
use App\config\database\connect;
use Necropolis\database\query;


class admin{
     private static $pdo = null;
public function __construct(){
  session_start();
        connect::getInstance();
     
        self::$pdo = connect::getConnection();
}

    public function admin_page(){
       
      

        if($_SESSION['ID'] == null ){
          view::redirect("register");
        }else{

          $statment =  self::$pdo->query("select * from register")->fetchAll();
        
          
    
          $ID =  $_SESSION['ID'];
          $info = self::$pdo->prepare("select * from register where id=:id ");
          $info->execute([ 'id' => $ID ]);
          $row = $info->fetch();

          view::go("admin",['class'=>'hold-transition skin-blue fixed sidebar-mini' , 'lang'=>'en', 'info'=>$row , 'org'=> $statment]);
        }
        




    }

    public function sub_page(){
  
   
      


      if(isset($_SESSION['id'])){
          $id_user = $_SESSION['id'];
        

       $stmt = self::$pdo->prepare("SELECT 1 FROM active WHERE id_user=? and statues=?");
        $stmt->execute([$id_user,"disactive"]);
     $userExists = $stmt->fetchColumn();
   if($userExists){

    view::go("active");

    // exit();
      
     }else{

      $ID =  $_SESSION['id'];
      $info = self::$pdo->prepare("select * from register where id=:id ");
      $info->execute([ 'id' => $ID ]);
      $row = $info->fetch();


      view::go("admon",['class'=>'hold-transition skin-blue fixed sidebar-mini' , 'lang'=> 'en' , 'info'=>$row ,'dir'=>'ltr']);

   }
      

       
      }else{
        view::redirect("register");
      }
  
  


  }

  public function profile_page(){
    


     if(!isset($_SESSION['ID'])){

      view::redirect("../register");

    }else{ 
      $ID =  $_SESSION['ID'];
      $info = self::$pdo->prepare("select * from register where id=:id ");
      $info->execute([ 'id' => $ID ]);
      $row = $info->fetch();
      view::go("profile",['class'=>'hold-transition skin-blue fixed sidebar-mini', 'info'=>$row , 'lang'=>'en' , 'dir'=>'left']);
     }

       

    
    
    

 


}

public function profile_post(){

//  view::redirect(""); 

}

public function edit(){
   session_start();
  $req = app('request')->body;
  $val = $req['value'];
  $type  = $req['type'];
  //$id  = $req['id'];
  $id = $_SESSION['ID'];
  $update = "update register set ".$type." =? where id ='$id' ";
  $statment = self::$pdo->prepare($update);
  $statment->execute([$val]);


  $ar = array('statue'=> 'oki');
  echo json_encode($ar);

  
  


}



public function edit_sub(){
  session_start();
 $req = app('request')->body;
 $val = $req['value'];
 $type  = $req['type'];
 //$id  = $req['id'];
 $id = $_SESSION['id'];
 $update = "update register set ".$type." =? where id ='$id' ";
 $statment = self::$pdo->prepare($update);
 $statment->execute([$val]);


 $ar = array('statue'=> 'oki');
 echo json_encode($ar);

 
 


}


public function sup_profile(){
if(isset($_SESSION['id'])){
  $id_user =  $_SESSION['id'];


  $stmt = self::$pdo->prepare("SELECT 1 FROM active WHERE id_user=? and statues=?");
  $stmt->execute([$id_user,"disactive"]);
$userExists = $stmt->fetchColumn();
if($userExists){

view::redirect("../sub-admin");
}else{


  $ID =  $_SESSION['id'];

  
  $info = self::$pdo->prepare("select * from register where id=:id ");
  $info->execute([ 'id' => $ID ]);
  $row = $info->fetch();
  view::go("subprofile",['class'=>'hold-transition skin-blue fixed sidebar-mini', 'info'=>$row , 'lang'=>'en' , 'dir'=>'left']);
}
}else{


  view::redirect("../login");
}

}




public function organiz(){

  
  
 
  
  if(isset($_SESSION['ID'])){
    $ID =  $_SESSION['ID'];
  
  
    $info = self::$pdo->prepare("select * from register where id=:id ");
    $info->execute([ 'id' => $ID ]);
    $row = $info->fetch();



    $statment =  self::$pdo->query("select * from org order by id_org DESC")->fetchAll();


  view::go("organization",['class'=>'hold-transition skin-blue fixed sidebar-mini' , 'info'=>$row , 'lang'=>'en' , 'dir'=>'left' , 'statment'=> $statment ]);


 


}else{

  view::redirect("../login");

}

}

public function users(){
  
  if(isset($_SESSION['ID'])){
    $ID =  $_SESSION['ID'];
  
  
    $info = self::$pdo->prepare("select * from register where id=:id ");
    $info->execute([ 'id' => $ID ]);
    $row = $info->fetch();


    $statment = self::$pdo->query("select * from register order by id DESC")->fetchAll();


  
  view::go("users",['class'=>'hold-transition skin-blue fixed sidebar-mini', 'info'=>$row , 'statment'=>$statment , 'lang'=>'en' , 'dir'=>'left' ]);

  


 


}else{

  view::redirect("../login");

}

  
}


public function orgAdd(){
  $req = app('request')->body;
   $name = $req['name'];
   $address  = $req['address'];
   $identityColor  = $req['identityColor'];
   $fontName  = $req['fontName'];
   $color  = $req['color'];
   $size  = $req['size'];
   $weight  = $req['weight'];
   $italic  = $req['italic'];
   $logo  = $req['logo'];

   $id =  query::Insert("org" , ["name_org", "address_org","identity_color" , "img_org", "font_name" , "font_color" , "size_font" , "weight" , "italic" ] , [$name ,$address  ,$identityColor, $logo   ,$fontName, $color, $size ,  $weight , $italic ] )->getID();
         
   $ar =  array('statues'=>'done' , 'id' => $id , 'logo' => $logo);
  echo json_encode($ar);







}

public function getOrg(){
  $req =  app('request')->body;
  $id = $req['id'];
  $info = self::$pdo->prepare("select * from org where id_org=:id ");
  $info->execute([ 'id' => $id ]);
  $row = $info->fetch();
   
  $arr = array('name'=>$row['name_org'] , 'address'=>$row['address_org'] ,
   'identity_color'=>$row['identity_color'] , 'img_org'=>$row['img_org'], 
   'font_name'=>$row['font_name'] , 'font_color'=>$row['font_color'], 
   'size_font'=>$row['size_font'] , 'weight'=>$row['weight'], 'italic'=>$row['italic']);
  echo json_encode( $arr );

}

public function uploadFiles(){

 $req =  app('request')->files;
  $image = $req['file'];
   $imag = $image['tmp_name'];
   $targetPath = "public/assets/users/org/".$image['name'];
  if(is_uploaded_file($imag)){
  if(move_uploaded_file($imag,$targetPath)) { 
      $arr = array('statues'=> 'done', 'location'=>$targetPath );
      echo json_encode($arr);
    
     }

  }

  

 
 

}

public function UpdateOrg(){
 
  $req = app('request')->body;
  $name = $req['name'];
  $address  = $req['address'];
  $identityColor  = $req['identityColor'];
  $fontName  = $req['fontName'];
  $color  = $req['color'];
  $size  = $req['size'];
  $weight  = $req['weight'];
  $italic  = $req['italic'];
  $logo  = $req['logo'];
  $id = $req['id'];

  $update = "update org set name_org =? ,address_org = ? , identity_color =? , img_org =? , font_name=? ,font_color=? ,size_font=?  , weight=? , italic = ?   where id_org ='$id' ";
  $statment = self::$pdo->prepare($update);
  $statment->execute([$name ,$address,$identityColor, $logo  ,$fontName,$color, $size ,$weight ,$italic  ]);

$ar = array('statues'=>'done');
echo json_encode($ar);

}

public function deleteOrg(){
  $req = app('request')->body;
  $id = $req['id'];
  $delete = "delete from org where id_org =:id";
  $statment = self::$pdo->prepare($delete);
  $statment->execute([$id]);

$ar = array('statues'=>'done');
echo json_encode($ar);
}


public function uploadImage(){

  $req =  app('request')->files;
  $image = $req['file'];
   $imag = $image['tmp_name'];
   $targetPath = "public/assets/users/".$image['name'];
  if(is_uploaded_file($imag)){
  if(move_uploaded_file($imag,$targetPath)) { 
      $arr = array('statues'=> 'done', 'location'=>$targetPath );
      echo json_encode($arr);
    
     }

  }

}

public function addUser(){
  $req = app('request')->body;
  $name = $req['name'];
  $address  = $req['address'];
  $email = $req['email'];
  $image   = $req['image'];
  $password  = $req['password'];
  $state  = $req['state'];
  $gender  = $req['gender'];
  $phone  = $req['phone'];
  $mobile  = $req['mobile'];
  $role  = $req['role'];
  $org = $req['org'];

  $id =  query::Insert("register" , ["name", "phone","email" , "org", "password", "photo" , "gender" , "mobile" , "address" ,"statues" ] , [$name ,$phone   ,$email, $org , $password   ,$image ,$gender, $mobile ,  $password  ,  $state ] )->getID();
        
  $ar =  array('statues'=>'done' , 'id' => $id , 'logo' => $image);
 echo json_encode($ar);


}

public function userEdit(){
 
  $req = app('request')->body;
  $name = $req['name'];
  $address  = $req['address'];
  $email = $req['email'];
  $image   = $req['image'];
  $password  = $req['password'];
  $state  = $req['state'];
  $gender  = $req['gender'];
  $phone  = $req['phone'];
  $mobile  = $req['mobile'];
  $role  = $req['role'];
  $org = $req['org'];
  $id = $req['id'];
  if($role == 'super'){
$role_num = 1;

  }else{
    $role_num = 2;
  }






  $stmt = self::$pdo->prepare("SELECT 1 FROM active WHERE id_user=? and statues=?");
  $stmt->execute([$id_user,"disactive"]);
$userExists = $stmt->fetchColumn();
if($userExists){ 

  $updateRole  = "update roles set role_name=? , id_role=? where id_user='$id'";
  $statmentRole = self::$pdo->prepare($updateRole);
  $statmentRole->execute([$role ,$role_num ]);

}else{
  query::Insert("roles" , ["role_name", "id_role" , "id_user"] , [ $role ,  $role_num ,$id  ] )->getID();

}
 

  $update = "update register set name =? ,phone = ? , email =? , org =? , password=? ,photo=? ,gender=?  , mobile=? , address = ?  , statues=?  where id ='$id' ";
  $statment = self::$pdo->prepare($update);
  $statment->execute([$name ,$phone ,$email, $org  ,$password,$image, $gender ,$mobile  ,$address , $state ]);

$ar = array('statues'=>'done');
echo json_encode($ar);

}

public function userGet(){

  $req =  app('request')->body;
  $id = $req['id'];

  $in = self::$pdo->prepare("select * from roles where id=:id ");
  $in->execute([ 'id' => $id ]);
  $rowx = $in->fetch();


  $info = self::$pdo->prepare("select * from register where id=:id ");
  $info->execute([ 'id' => $id ]);
  $row = $info->fetch();
   
  $arr = array('name'=>$row['name'] , 'phone'=>$row['phone'] ,
   'email'=>$row['email'] , 'org'=>$row['org'], 
   'password'=>$row['password'] , 'photo'=>$row['photo'], 
   'gender'=>$row['gender'] , 'mobile'=>$row['mobile'], 'address'=>$row['address'], 'statue'=>$row['statues'] , 'role'=>$rowx['role_name']);
  echo json_encode( $arr );

}


public function userDelete(){
  $req = app('request')->body;
  $id = $req['id'];
  $delete = "delete from register where id =:id";
  $statment = self::$pdo->prepare($delete);
  $statment->execute([$id]);

$ar = array('statue'=>'done');
echo json_encode($ar);

}

public function ads(){

    
  if(isset($_SESSION['ID'])){
    $ID =  $_SESSION['ID'];
  
  
    $info = self::$pdo->prepare("select * from register where id=:id ");
    $info->execute([ 'id' => $ID ]);
    $row = $info->fetch();


    $statment = self::$pdo->query("select * from ads order by id_ads DESC")->fetchAll();

    $org = self::$pdo->query("select * from org order by id_org DESC")->fetchAll();


  
  view::go("ads",['class'=>'hold-transition skin-blue fixed sidebar-mini', 'info'=>$row , 'statment'=>$statment , 'org'=>$org ,  'lang'=>'en' , 'dir'=>'left' ]);

  


 


}else{

  view::redirect("../login");

}

}

public function adsAdd(){

    
  $req = app('request')->body;
  $title = $req['title'];
  $notes  = $req['notes'];
  $orgAds = $req['orgAds'];
  $stat   = $req['stat'];
  $external = $req['external'];
  $img = $req['img'];

  $id =  query::Insert("ads" , ["title_ads", "url_ads","img_url" , "note_ads", "statues", "id_org_ads" ] , [$title  ,$external  ,$img, $notes , $stat   ,$orgAds ] )->getID();
        
  $ar =  array('statues'=>'done' , 'id' => $id , 'logo' => $img);
 echo json_encode($ar);

}

public function adsUpload(){

  $req =  app('request')->files;
  $image = $req['file'];
   $imag = $image['tmp_name'];
   $targetPath = "public/assets/users/ads/".$image['name'];
  if(is_uploaded_file($imag)){
  if(move_uploaded_file($imag,$targetPath)) { 
      $arr = array('statues'=> 'done', 'location'=>$targetPath );
      echo json_encode($arr);
    
     }

  }

}



public function adsUpdate(){

  $req = app('request')->body;
  $title = $req['title'];
  $notes  = $req['notes'];
  $orgAds = $req['orgAds'];
  $stat   = $req['stat'];
  $external = $req['external'];
  $img = $req['img'];
  $id = $req['id'];

  $update = "update ads set title_ads =? , url_ads=? ,img_url =? ,note_ads=?  ,statues =?  where id_ads ='$id' ";
  $statment = self::$pdo->prepare($update);
  $statment->execute([$title  ,$external,$img, $notes  , $stat  ]);

$ar = array('statues'=>'done');
echo json_encode($ar);

}


public function adsGet(){
  $req =  app('request')->body;
  $id = $req['id'];

  $info = self::$pdo->prepare("select * from ads where id_ads=:id ");
  $info->execute([ 'id' => $id ]);
  $row = $info->fetch();
   
  $arr = array('title'=>$row['title_ads'] , 'url_ads'=>$row['url_ads'] ,
   'img_url'=>$row['img_url'] , 'note_ads'=>$row['note_ads'], 
   'statues'=>$row['statues'],'org'=>$row['id_org_ads']
   );
  echo json_encode( $arr );
}


public function adsDelete(){
  $req = app('request')->body;
  $id = $req['id'];
  $delete = "delete from ads where id_ads =:id";
  $statment = self::$pdo->prepare($delete);
  $statment->execute([$id]);

$ar = array('statue'=>'done');
echo json_encode($ar);
}





}







?>