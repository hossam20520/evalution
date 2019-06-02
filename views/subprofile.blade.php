@extends('main')

@section('css')
<title>Admin</title>
<link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="../public/images/favicon.ico" />
  <!-- Font Awosomes -->
  <link rel="stylesheet" href="../public/assets/css/font-awesome.min.css">
  <!-- Ion Icons -->
  <link rel="stylesheet" href="../public/assets/css/ionicons.min.css">
  <!-- style -->
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <link rel="stylesheet" href="../public/assets/css/profile.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

@endsection


@section('content')
<div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="../admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="../public/assets/images/logo.png" alt="logo-images"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="../public/assets/images/logo.png" alt="logo-images"> <b>View </b>Plus</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../{{$info['photo']}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ $info['name']}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../{{$info['photo']}}" class="img-circle" alt="User Image">

                  <p>
                  {{ $info['name']}}
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->
    <!-- evalution67 -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../{{$info['photo']}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ $info['name']}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="../sub-admin">
              <i class="fa fa-th" aria-hidden="true"></i><span>Dashboard</span>
            </a>
          </li>
       <li>
            <a href="profile">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Profile</span>
            </a>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        {{date('l')}}
          <small>{{date('d-m-Y')}}</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"> Home</a></li>
          <li>Dashboard
            </a></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">  
        <div class="row">
            <div class="col-md-3">
    
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="../{{$info['photo']}}" alt="User profile picture">
    
                  <h3 class="profile-username text-center">{{$info['name']}}</h3>
    
                  <p class="text-muted text-center">Admin</p>
    
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Gender</b> <a class="pull-right">{{ $info['gender']}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Phone</b> <a class="pull-right">{{ $info['phone']}}</a>
                    </li>
                    <li class="list-group-item">
                      <!-- <b>Type</b> <a class="pull-right">13,287</a> -->
                    </li>
                  </ul>
                    </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="profile-box nav-tabs-custom">
                  <h4>Update Profile</h4>
                  <div class="profile-form">
                    <form class="form-horizontal" method="post" action="profile">
                      <div class="form-group">
                        <label  class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9 cont">
                        <label  class="col-sm-3 control-label titles">{{ $info['name']}}</label>
                        <button type="button" class="edit">Edit</button>

                         <input type="text"    class="form-control edit-field" placeholder="Name">
                         <button type="button" data-type="name" class="edit-button"> Save</button> 
                         
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9 cont">
                        <label  class="col-sm-3 control-label titles">{{ $info['phone']}}</label>
                      
                          <button type="button" class="edit"> Edit</button>

                          <input type="phone"   class="form-control edit-field" placeholder="Phone Number">
                          <button type="button" data-type="phone" class="edit-button"> Save</button>



                        </div>
                      </div>
                      <div class="form-group">
                          <label  class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9 cont">
                          <label  class="col-sm-3 control-label titles">{{ $info['email']}}</label>
                         
                          <button type="button" class="edit"> Edit</button>

                          <input type="email"   class="form-control edit-field" placeholder="Email">
                          <button type="button" data-type="email" class="edit-button"> Save</button>

                          </div>
                      </div>
                      <div class="form-group">
                          <label  class="col-sm-3 control-label">Organization Name</label>
                          <div class="col-sm-9 cont">
                          <label  class="col-sm-3 control-label titles">{{ $info['org']}}</label>
                         
                         <button type="button" class="edit"> Edit</button>

                         <input type="text"   class="form-control edit-field" placeholder="Org Name">
                         <button type="button" data-type="org"  class="edit-button"> Save</button>
                          </div>
                      </div>

                      <div class="form-group">
                          <label  class="col-sm-3 control-label">Gender</label>
                          <div class="col-sm-9 cont">
                          <label  class="col-sm-3 control-label titles">{{ $info['gender']}}</label>
                         
                         <button type="button" class="edit"> Edit</button>

                         <input type="text"   class="form-control edit-field" placeholder="Gender">
                         <button type="button"  data-type="gender" class="edit-button"> Save</button>

                          </div>
                      </div>


                      <div class="form-group">
                          <label  class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-9 cont">
                          <label  class="col-sm-3 control-label titles">{{ $info['password']}}</label>
                         
                         <button type="button" class="edit"> Edit</button>

                         <input type="password"   class="form-control edit-field" placeholder="password">
                         <button type="button" data-type="password" class="edit-button"> Save</button>
                          </div>
                        </div>
              
                      <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                          <!-- <button type="submit" class="save-btn btn btn-primary">Save</button> -->
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>           
    </section>
      <!-- //////////////////// -->
      <!-- /.content -->
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="#">View Plus</a>.</strong> All rights
      reserved.
    </footer>
  </div>

  @endsection


  @section('js')

  <script src="../public/assets/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../public/assets/js/bootstrap.min.js"></script>
  <!-- slim scroll for side bar -->
  <script src="../public/assets/js/jquery.slimscroll.min.js"></script>
  <script src="../public/assets/js/Chart.min.js"></script>

  <script src="../public/assets/js/adminlte.js"></script>

  <script>
function Hide(ev){
        $(ev).prev().css("display" , "none");  // edit filed
        $(ev).css("display" , "none");  //save button
}

function Show(ev){
  $(ev).next().css("display" , "block"); //edit button
  $(ev).next().next().css("display" , "block");  //label
}


var HideTow = (ev)=>{
      $(ev).prev().css("display" , "none");  // edit filed
       $(ev).css("display" , "none");  //save button
}

var ShowTow = (ev)=> {
  $(ev).prev().prev().css("display" , "block");  //edit button
  $(ev).prev().prev().prev().css("display" , "block"); //label
}

$(document).ready(function(){

  $(".edit").click(function(event){
    let th = $(this);
     Hide(th);
     Show(th);
       
 
      

       let value = $(this).prev().text();
       $(this).next().val(value);
      
      });






    $(".edit-button").click(function(){
      let thi = $(this);
      let value = $(this).prev().val();
      let type  = $(this).data('type');
      
      if(value == ""){
        $(this).prev().css("border-color" , "red");
      // alert("empty");
      return false;
      }
      

      
      let tem = '<img src="../public/assets/images/reload.gif" style="width: 22px;">';
      thi.html(tem)
ajax("profile/edit" , {'value':value , 'type':type }  ,(data)=>{
       thi.html(' ');
       thi.text('Save');
       HideTow(thi);
       ShowTow(thi);
       
       thi.prev().prev().prev().text(value); //set text to label
      
      

} ,(data)=>{
console.log(data);
});

    });


    

});
   

    
    


function ajax( url , args  , callback , error){
jQuery.ajax({
	 url: url,
    data: args,	
    type: "POST",
	dataType:"json",
	success:function(data){
      callback(data);
	
	},
	error:function (er){
	error(er);
	}
	});
}
    </script>

  @endsection













   