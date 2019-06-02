<?php

// Add Your Routes Here

$route->get('/' , 'App\controller\first@launch');



$route->get('/register' , 'App\controller\login@register');
////>>  POST SECTION
$route->post('/register' , 'App\controller\login@register_POST');
////>> MIDDLEware
// $route->before('/register' , 'App\Middleware\login@register_M');





// activation


$route->get('/aouth/?' , 'App\controller\login@aouth');




//logout
$route->get('/logout' , 'App\controller\login@logout');





$route->get('/login' , 'App\controller\login@log');

$route->get('/warn' , 'App\controller\login@warn');

$route->post('/login' , 'App\controller\login@log_POST');

// $route->get('/sub-admin' , 'App\Middleware\admin@sub_page');

$route->get('/mail' ,  'App\controller\login@testMail');

$route->get('/active' ,  'App\controller\login@active');


$route->group('/sub-admin', function() {
    $this->get('/', 'App\Middleware\admin@sub_page');

    $this->get('/profile', 'App\Middleware\admin@sup_profile');
    $this->post('/profile/edit', 'App\Middleware\admin@edit_sub');
 });


//  $route->get('/*', 'App\Middleware\admin@ActiveCheck'  );
//     // [$this] instanceof ArrayObject so you can get all args by getArrayCopy()
//     // pre($this->getArrayCopy());
//     // pre($this[1]);
//     // pre($this[2]);
// // });

$route->group('/admin', function()
{
    // /admin/
    $this->get('/', 'App\Middleware\admin@admin_page');

    // /admin/settings
    $this->get('/profile', 'App\Middleware\admin@profile_page');
    $this->get('/organization', 'App\Middleware\admin@organiz');
    $this->get('/ads', 'App\Middleware\admin@ads');
    $this->get('/users', 'App\Middleware\admin@users');
    $this->post('/profile', 'App\Middleware\admin@profile_post');

    $this->post('/profile/edit', 'App\Middleware\admin@edit');
    $this->post('/user/add', 'App\Middleware\admin@addUser');
    $this->post('/user/upload', 'App\Middleware\admin@uploadImage');
    $this->post('/user/edit', 'App\Middleware\admin@userEdit');
    $this->post('/user/delete', 'App\Middleware\admin@userDelete');
    $this->post('/ads/add', 'App\Middleware\admin@adsAdd');
    $this->post('/ads/upload', 'App\Middleware\admin@adsUpload');
    $this->post('/ads/get', 'App\Middleware\admin@adsGet');
    $this->post('/ads/update', 'App\Middleware\admin@adsUpdate');
    $this->post('/ads/delete', 'App\Middleware\admin@adsDelete');
    
    $this->post('/user/get', 'App\Middleware\admin@userGet');
    $this->post('/organization/add', 'App\Middleware\admin@orgAdd');
    $this->post('/organization/get', 'App\Middleware\admin@getOrg');
    $this->post('/organization/update', 'App\Middleware\admin@UpdateOrg');
    $this->post('/organization/upload', 'App\Middleware\admin@uploadFiles');
    $this->post('/organization/delete', 'App\Middleware\admin@deleteOrg');

    

    // nested group
    $this->group('/users', function()
    {
        // /admin/users
        $this->get('/?', function($id) {
            // echo 'list of users';

            echo $id;
        });

        // /admin/users/add
        $this->get('/add', function() {
            echo 'add new user';
        });
    });


    $this->group('/user', function()
    {
        // /admin/users
        $this->get('/?', function($id) {
            echo 'list of users';
            echo $id;
        });

        // /admin/users/add
        $this->get('/add', function() {
            echo 'add new user';
        });
    });

});





?>