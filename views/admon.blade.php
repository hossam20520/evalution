@extends('main')

@section('css')
<title>Admin</title>
<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="public/images/favicon.ico" />
  <!-- Font Awosomes -->
  <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
  <!-- Ion Icons -->
  <link rel="stylesheet" href="public/assets/css/ionicons.min.css">
  <!-- style -->
  <link rel="stylesheet" href="public/assets/css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

@endsection

@section('content')
<div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="public/assets/images/logo.png" alt="logo-images"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="public/assets/images/logo.png" alt="logo-images"> <b>View </b>Plus</span>
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
                <img src="{{$info['photo']}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{$info['name']}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{$info['photo']}}" class="img-circle" alt="User Image">

                  <p>
                  {{$info['name']}}
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="sub-admin/profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{$info['photo']}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{$info['name']}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="sub-admin">
              <i class="fa fa-th" aria-hidden="true"></i><span>Dashboard</span>
            </a>
          </li>

          <li>
            <a href="sub-admin/profile">
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
        <p> Control Panel Content </p>
        <!-- start drop down -->
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="true">
            select Organization
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Organization</a></li>
            <li><a href="#">Organization</a></li>
            <li><a href="#">Organization</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="true">
            select Device
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Organization</a></li>
            <li><a href="#">Organization</a></li>
            <li><a href="#">Organization</a></li>
          </ul>
        </div>
        <!-- end drop down -->
        <!-- start cards section -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><span>12</span></h3>
                <p>HAPPY</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-happy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><span>20</span></h3>
                <p>LOVELY</p>
              </div>
              <div class="icon">
                <i class="ion ion-heart"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua ">
              <div class="inner">
                <h3><span>4</span></h3>
                <p>SAD</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-sad"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><span>14</span></h3>
                <p>DISAPPOINTED</p>
              </div>
              <div class="icon">
                <i class="ion ion-heart-broken"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- end card section -->
        <div class="row">
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Donut Chart</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <canvas id="pieChart" style="height:250px"></canvas>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Line Chart for last 7 months</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:250px"></canvas>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-warning direct-chat-warning">
              <div class="box-header with-border">
                <h3 class="box-title">LATEST COMMENTS</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-left">test</span>
                      <span class="direct-chat-timestamp pull-right">1/29/2019, 9:14:38 PM</span>
                    </div><i class="ion ion-android-happy"></i>
                    <div class="direct-chat-text"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Progress bars for today</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 60%;">
                    60%
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 60%;">
                    60%
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 60%;">
                    60%
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 60%;">
                    60%
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="#">View Plus</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  @endsection



  @section('js')
  <script src="public/assets/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="public/assets/js/bootstrap.min.js"></script>
  <!-- slim scroll for side bar -->
  <script src="public/assets/js/jquery.slimscroll.min.js"></script>
  <!-- chart plugin -->
  <script src="public/assets/js/Chart.min.js"></script>
  <!-- chart custom -->
  <script src="public/assets/js/chart-custom.js"></script>
  <!-- AdminLTE App -->
  <script src="public/assets/js/adminlte.js"></script>

  @endsection

  


