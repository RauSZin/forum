<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title><?php echo e(config('app.name', 'Laravel')); ?></title>


        <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">



    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">


</head>

<body>

    <div id="app">

        <div class="container pb-2">

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </div>

</body>

</html>
