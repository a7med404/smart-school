<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="layout/images/visa.png" type="image/ico" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>School !| </title>
    <?php echo $__env->make('partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
        
    <div class="wrapper" id="app">
      <div id="newsfeed-items-grid">
        <div class="ajax-content"></div>
        <navigation></navigation>
        <sidebar></sidebar>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.content-wrapper -->
        <footer_component></footer_component>
        <control_sidebar></control_sidebar>
      </div>
    </div>
    <!-- ./wrapper -->

    <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/Student/Providers/../Resources/views/layouts/print-master.blade.php ENDPATH**/ ?>