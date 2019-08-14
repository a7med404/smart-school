<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       
       

       <?php echo $__env->make('partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    
    <body onload="window.print();">
      <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
          <?php echo $__env->yieldContent('content'); ?>
          
        </section>
            <!-- /.content -->
      <div class="clearfix"></div>
      </div>
      <!-- ./wrapper -->
    </body>
</html>
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/layouts/print.blade.php ENDPATH**/ ?>