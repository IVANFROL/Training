<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Starter Kit - Blank Page <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        .navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }
        .layout-px-spacing {
            min-height: calc(100vh - 96px)!important;
        }

    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<?php echo $__env->yieldContent('styles'); ?>
</head>
</body>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH /home/user/Документы/Project/training/resources/views/layouts/adminapp.blade.php ENDPATH**/ ?>