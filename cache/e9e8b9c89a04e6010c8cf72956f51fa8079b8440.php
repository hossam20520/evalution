<?php $__env->startSection('css'); ?>
<title>Admin</title>
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
 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="warning-sec">
                <img src="public/assets/images/alarm.svg" alt="">
                <h3>WARNING! YOUR ACCOUNT HAS BEEN DISABLED</h3>
                <p>To activate your account again please contact us </p>
                <button class="btn">CONTACT US</button>
        </div>
    </div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hossam/Documents/evalution/anubis/views/warn.blade.php ENDPATH**/ ?>