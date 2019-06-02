@extends('main')

@section('css')
<title>Evaluation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


@endsection

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="../index.html"><img src="public/assets/images/login.png" alt="login-logo"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <p class="login-box-msg ">Sign In</p>

    <form action="login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection