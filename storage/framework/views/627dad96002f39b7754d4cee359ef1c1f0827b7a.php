
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Invoice
        <small>#007612</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
        <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-right">Date: 2/10/2014</small>
        </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- Table row -->
    <div class="row">
      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>اسم المرحلة التعليمية</th>
                    <th>الترتيب</th>
                    <th>مدير المدرسة</th>
                    <th>ناظر المدرسة</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($level->id); ?></td>
                  <td><?php echo e($level->name); ?></td>
                  <td><?php echo e($level->sort); ?></td>
                  <td><?php echo e($level->school_master); ?></td>
                  <td><?php echo e($level->head_master); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
      </div>
    </div>
    <!-- /.row -->

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>



<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/Student/Providers/../Resources/views/print/levels/levels-print.blade.php ENDPATH**/ ?>