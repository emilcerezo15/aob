<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <title>AOB - <?php echo $__env->yieldContent('title'); ?></title>

        <script src="<?php echo e(asset('/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/materialize.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/script.js')); ?>"></script>

        <link rel="stylesheet" href="<?php echo e(asset('/css/materialize.min.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>

        <input id="BASE_URL" type="hidden" value="<?php echo e(URL::to('/')); ?>"/>
        <?php echo $__env->yieldContent('content'); ?>

    </body>

</html>