<!DOCTYPE html>
<html lang="<?php  echo $lang;    ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Anubis</title> -->
    <?php echo $__env->yieldContent("css"); ?>
</head>
<body dir="<?php echo $dir;   ?>" class="<?php echo e($class); ?>">
<!-- class="hold-transition skin-blue fixed sidebar-mini" -->

 <?php echo $__env->yieldContent("content"); ?>

<?php echo $__env->yieldContent("js"); ?>
</body>
</html>
<?php /**PATH /home/hossam/Documents/evalution/anubis/views/main.blade.php ENDPATH**/ ?>