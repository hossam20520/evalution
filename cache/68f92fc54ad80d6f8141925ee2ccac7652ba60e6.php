<?php $__env->startSection('css'); ?>

<title>Ads</title>
<link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="../public/images/favicon.ico" />
  <!-- Font Awosomes -->
  <link rel="stylesheet" href="../public/assets/css/font-awesome.min.css">
  <!-- Ion Icons -->
  <link rel="stylesheet" href="../public/assets/css/ionicons.min.css">
  <!-- style -->
  <link rel="stylesheet" href="../public/assets/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <link rel="stylesheet" href="../public/assets/css/fontsSelect.css">
  <link rel="stylesheet" href="../public/assets/css/users.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
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
                <img src="../public/assets/images/user.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo e($info['name']); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../public/assets/images/user.jpg" class="img-circle" alt="User Image">

                  <p>
                  <?php echo e($info['name']); ?> 
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

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../public/assets/images/user.jpg" class="img-circle" alt="User Image" style="
    width: 42px;
    height: 42px;
">>
          </div>
          <div class="pull-left info">
            <p><?php echo e($info['name']); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="../admin">
              <i class="fa fa-th" aria-hidden="true"></i><span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="pages/evaluation.html">
              <i class="fa fa-heartbeat" aria-hidden="true"></i>
              <span>Evaluation</span>
            </a>
          </li>
          <li>
            <a href="organization">
              <i class="fa fa-hospital-o" aria-hidden="true"></i>
              <span>Organizations</span>
            </a>
          </li>
          <li>
            <a href="pages/devices.html">
              <i class="fa fa-tablet" aria-hidden="true"></i>
              <span>Devices</span>
            </a>
          </li>
          <li>
            <a href="users">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Users</span>
            </a>
          </li>
          <li>
            <a href="ads">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <span>Ads</span>
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
        <?php echo e(date('l')); ?>

          <small><?php echo e(date('d-m-Y')); ?></small>
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
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Ads</h3>
                <div class="pull-right">
                  <button type="button" class="btn btn-success add-orgnization which" data-toggle="modal" data-edit="no" data-target=".ads-add">
                    <i class="glyphicon glyphicon-plus"></i> Add
                    Ads</button>
                  <button class="btn btn-default refresh-btn"><i class="glyphicon glyphicon-refresh"></i>
                    Reload</button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-inline dt-bootstrap">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="dataTables_length">
                        <!-- <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries </label> -->
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="dataTables_filter right-search">
                        <input type="search" class="form-control input-sm" placeholder="search" aria-controls="example1">
                      </div>
                    </div>
                  </div>
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover org organization-table dataTable no-footer" role="grid">
                    <thead>
                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1"> URL</th><th class="sorting_disabled" rowspan="1" colspan="1">Title</th><th class="sorting_disabled" rowspan="1" colspan="1"> Status </th><th class="sorting_disabled" rowspan="1" colspan="1"> Notes </th><th class="sorting_disabled" rowspan="1" colspan="1"> Action </th></tr>
                    </thead>
                    <tbody class="father__org">
                      
                      
                           
    <?php $__currentLoopData = $statment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
    <tr role="row" class="odd">
                        <td><a href="#"><img src="<?php echo e($ads['img_url']); ?>" alt="<?php echo e($ads['img_url']); ?>"></a></td>
                        <td><?php echo e($ads['title_ads']); ?></td>
                        <td><button class="btn btn-success"><?php echo e($ads['statues']); ?></button></td>
                        <td><?php echo e($ads['note_ads']); ?></td>
                        <td class=" text-center">
                          <button type="button" class="btn btn-success which" data-edit ="yes"  data-id="<?php echo e($ads['id_ads']); ?>" data-toggle="modal" data-target=".ads-add">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </button>
                          <button type="button" class="btn btn-danger rmove"  data-id="<?php echo e($ads['id_ads']); ?>"  data-toggle="modal" data-target=".romove-popup">
                            <i class="glyphicon glyphicon-trash"></i>
                          </button>
                        </td>
                      </tr>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                    </tbody></table></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
                </div>
                <div class="row">
                  <div class="col-sm-5">
                  </div>
                  <div class="col-sm-7">
                    <div class="pagination-table">
                      <ul class="pagination">
                        <li class="paginate_button previous disabled" id="table_ratings_previous">
                          <a href="#" aria-controls="table_ratings" data-dt-idx="0">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                          </a></li>
                        <li class="paginate_button active">
                          <a href="#" aria-controls="table_ratings">1</a>
                        </li>
                        <li class="paginate_button">
                          <a href="#" aria-controls="table_ratings">2</a>
                        </li>
                        <li class="paginate_button next" id="table_ratings_next">
                          <a href="#" aria-controls="table_ratings" data-dt-idx="6" tabindex="0">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="#">View Plus</a>.</strong> All rights
      reserved.
    </footer>
  </div>





  <div class="modal fade ads-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
          <h4 class="modal-title" id="gridSystemModalLabel"> <i class="fa fa-plus"></i> Add Ads
          </h4>
        </div>
        <div class="modal-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Data-add" data-toggle="tab">Ad Info</a></li>
              <li><a href="#preview-add" data-toggle="tab">preview</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="Data-add">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" id="titleAds" class="form-control" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-10">
                      <input type="text" id="notAds" class="form-control" placeholder="Notes">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Organizations</label>
                    <div class="col-sm-10">
                      <select class="form-control orgAds">
                      <?php $__currentLoopData = $org; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($orgs['id_org']); ?>"><?php echo e($orgs['name_org']); ?></option>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Upload Photo</label>
                    <div class="col-sm-10">
                      <div class="upload-btn-wrapper">
                        <button class="btn">Choose photo</button>
                        <form method="post"  enctype="multipart/form-data">
                            <input type="file" class="form-control" id="image" name="filename"  onchange="uploadImage(this)"  >
                        </form>
                      </div>
                    </div>
                  </div>
                  <center><div class="c" ><img src="../public/assets/users/defult.jpg" class="cc" ></div></center>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">External URL</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="extUrlADS" placeholder="NExternal URLotes">
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-10">
                        <div class="holder" id="statues" data-stat="disactive">
                            <input class="toggle">
                        </div>
                      </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="preview-add">
                <img src="" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary save">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end add ads popup -->

 


      <div class="modal fade in" id="myModal3" role="dialog" style="">
    <div class="modal-dialog">
    
      <!-- Modal content-->
       
  
 
        
       <center> <img src="../public/assets/images/reload.gif" width="100px" class="page_load" style="
    margin-top: 173px;
"></center>
        
       
    
      
    </div>
  </div>









  <div class="modal fade romove-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </button>
                      <h4 class="modal-title" id="gridSystemModalLabel"> <i class="fa fa-trash"></i> Remove Organization
                      </h4>
                    </div>
                    <div class="modal-body">
                          <h4>Are you sure to remove </h4>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default conRm" id="deleteOrg" data-dismiss="modal">Yes</button>
                      <button type="button" class="btn btn-primary">No</button>
                    </div>
                    <!-- /.nav-tabs-custom -->
                  </div>
                </div>
              </div>






<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
  <script src="../public/assets/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../public/assets/js/bootstrap.min.js"></script>
  <!-- slim scroll for side bar -->
  <script src="../public/assets/js/jquery.slimscroll.min.js"></script>
  <!-- chart plugin -->
  <script src="../public/assets/js/Chart.min.js"></script>
  <!-- chart custom -->
  <script src="../public/assets/js/jquery.dataTables.min.js"></script>

  <script src="../public/assets/js/dataTables.bootstrap.min.js"></script>

  <script src="../public/assets/js/jscolor.js"></script>


  <script src="../public/assets/js/adminlte.js"></script>
  <script src="../public/assets/js/fontsSelect.js"></script>
  <script src="../public/assets/js/ads.js"></script>
  

  <?php $__env->stopSection(); ?>
<?php echo $__env->make(main, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hossam/Documents/evalution/anubis/views/ads.blade.php ENDPATH**/ ?>