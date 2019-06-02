<?php $__env->startSection('css'); ?>


<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="public/assets/images/favicon.ico" />
  <!-- Font Awosomes -->
  <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
  <!-- Ion Icons -->
  <link rel="stylesheet" href="public/assets/css/ionicons.min.css">
  <!-- data tables css -->
  <link rel="stylesheet" href="public/assets/css/dataTables.bootstrap.min.css" />
  <!-- style -->
  <link rel="stylesheet" href="public/assets/css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="activation-sec">
                <img src="public/assets/images/postbox.svg" alt="">
                <h3>ACTIVATE YOUR ACCOUNT</h3>
                <p>Please Check you E-mail we have sent you a message to activate your account</p>
        </div>
    </div>
    <img src="public/assets/images/viewplus-icon.png" alt="" class="logo-view">


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hossam/Documents/evalution/anubis/views/active.blade.php ENDPATH**/ ?>