<?php $__env->startSection('content'); ?>
<div class="pad margin no-print">
    <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> تنبيه:</h4>
        تم تطوير هذه الصفحة للطباعة. انقر فوق زر الطباعة في الجزء السفلي  للاختبار.
    </div>
  </div>
    <!-- title row -->
      <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    
                
                    <!-- info row -->
                    <div class="row invoice-info">
                        <!-- /.col -->
                        <div class="col-sm-3 invoice-col">
                            <div class="pull-right">
                                <img src="<?php echo e(asset('modules/master/images/school-logo.png')); ?>"src="" class="img-responsive m-r-10" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 text-center invoice-col">
                            <p class="m-b-10 name-of-allah"> بسم الله الرحمن الرحيم</p>
                            <strong>وزاة التربية و التعليم</strong><br>
                            <strong>مدرسة العميد</strong><br>
                            <div class="m-t-30">
                            <strong class="report-title"> تقرير المراحل التعليمية</strong>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 invoice-col">
                        <div class="pull-left">
                            <img src="<?php echo e(asset('modules/master/images/school-logo.png')); ?>"src="" class="img-responsive m-l-10" alt="">
                        </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        
        <!-- Table row -->
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table table-striped table-bordered table-hover full-width m-t-20 m-20" id="table_id">
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student::layouts.print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/Student/Providers/../Resources/views/print/tests/page.blade.php ENDPATH**/ ?>