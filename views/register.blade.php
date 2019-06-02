@extends('main')

@section('css')

<title>Evaluation</title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="public/assets/images/favicon.ico"/>
   <!-- Font Awosomes -->
  <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
  <!-- Ion Icons -->
  <link rel="stylesheet" href="public/assets/css/ionicons.min.css">
  <!-- style -->
  <link rel="stylesheet" href="public/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


@endsection



@section('content')

<div class="register-box">
  <div class="register-logo">
    <a href="../index.html"><img src="public/assets/images/login.png" alt="login-logo"></a>
  </div>
  <!-- /.login-logo -->
  <div class="register-box-body">
    <p class="register-box-msg">Register to start your session</p>
    <form action="register" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name="phone" placeholder="phone">
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control"  name="org" placeholder="Organization Name">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Repeat Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat"> Register </button>
        </div>
        <!-- /.col -->
      </div>
      <a href="login.html" class="have-account">I already have an account</a>
    </form>

  </div>
  <!-- /.register-box-body -->
</div>
<!-- /.register-box -->





@endsection

@section('js')

<script src="public/assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="public/assets/js/bootstrap.min.js"></script>
<!-- slim scroll for side bar -->
<script src="public/assets/js/jquery.slimscroll.min.js"></script>
<!-- chart plugin -->
<script src="public/assets/js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="public/assets/js/adminlte.js"></script>

@endsection