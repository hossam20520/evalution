<?php
namespace App\social\facebookConf;

class config{


 

    public static function getInfo(){
       $info = [
            'app_id' =>'xxxxxxxxxxxxxx',  //replace x with your app id
            'app_secret'=>'xxxxxxxxxxxxxxxx',  //replace x with your app secret
            'default_graph_version'=>'v2.7'
       ];

       return $info;

    }

    public static function getPermissions(){
        $permissions = array(
            'email',
            'public_profile'
            );
            return $permissions;
    }



}















?>