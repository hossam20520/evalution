<!DOCTYPE html>
<html lang="<?php  echo $lang;    ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Anubis</title> -->
    @yield("css")
</head>
<body dir="<?php echo $dir;   ?>" class="{{ $class }}">
<!-- class="hold-transition skin-blue fixed sidebar-mini" -->

 @yield("content")

@yield("js")
</body>
</html>
