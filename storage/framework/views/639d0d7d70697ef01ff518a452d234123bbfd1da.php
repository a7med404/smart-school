
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
        <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-left">Date: 2/10/2014</small>
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($object->id); ?></td>
                  <td><?php echo e($object->name); ?></td>
                  <td><?php echo e($object->sort); ?></td>
                  <td><?php echo e($object->school_master); ?></td>
                  <td><?php echo e($object->head_master); ?></td>
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



<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/Student/Providers/../Resources/views/print/tests/print.blade.php ENDPATH**/ ?>