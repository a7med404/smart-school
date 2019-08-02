<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" href="<?php echo e(asset('admin/images/visa.png')); ?>" type="image/ico" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  
    <title><?php echo e(config('app.name', 'Laravel')); ?> || <?php echo $__env->yieldContent('title'); ?> </title>
    <?php echo $__env->make('cpanel.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('header'); ?>
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">
      <?php echo $__env->make('cpanel.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('cpanel.partials.sidebar-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
      <!-- /.content-wrapper -->
      <?php echo $__env->make('cpanel.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('cpanel.partials.control-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./wrapper -->

    <?php echo $__env->make('cpanel.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('footer'); ?> 
      <script>
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
      </script>
    <?php echo $__env->make('cpanel.partials.toastr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('cpanel.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/resources/views/cpanel/layouts/master.blade.php ENDPATH**/ ?>