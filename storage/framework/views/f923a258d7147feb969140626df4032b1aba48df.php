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

    <title>Ahgiz-24! || <?php echo $__env->yieldContent('title'); ?> </title>
    <?php echo $__env->make('cpanel.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('header'); ?>

  </head>
  
  <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
        <a href="../../index2.html"><b>Smart </b>school</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
        <p class="login-box-msg">تسجيل دخول من الوصول الي النطام</p>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group has-feedback">
                <input  id="username" type="text" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e(old('username')); ?>" required autofocus placeholder="البريد الالكتروني">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php if($errors->has('username')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('username')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group has-feedback">
                <input  id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required placeholder="كلمة السر">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> تذكرني
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                     دخول
                </button>
    
                
            </div>
            <!-- /.col -->
            </div>
        </form>
        <a href="<?php echo e(route('password.request')); ?>">نسيت كلمة السر</a>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->


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
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
      </script>

    <?php echo $__env->make('cpanel.partials.toastr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('cpanel.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/User/Providers/../Resources/views/auth/login.blade.php ENDPATH**/ ?>