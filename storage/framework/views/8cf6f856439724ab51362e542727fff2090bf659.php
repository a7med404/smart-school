<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
          طباعة
          
      </h1>
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li><a href="#">طباعة</a></li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
          <h4><i class="fa fa-info"></i> تنبيه:</h4>
          تم تطوير هذه الصفحة للطباعة. انقر فوق زر الطباعة في الجزء السفلي  للاختبار.
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
          <div class="col-xs-12">
          <h2 class="page-header">
              <i class="fa fa-globe"></i> Smart School, Inc.
              <small class="pull-left">Date: 2/10/2019</small>
          </h2>
          </div>
          <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
          From
          <address>
              <strong>Admin, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (804) 123-5432<br>
              Email: info@almasaeedstudio.com
          </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->

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

      <!-- this row will not appear when printing -->
      <div class="row no-print">
          <div class="col-xs-12">
          <a href="#" onclick="window.print();" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
          <a type="button" href="<?php echo e(route('download-PDF')); ?>" class="btn btn-primary" style="margin-right: 5px;">
              <i class="fa fa-download"></i> انشاء ملف PDF
          </a>
          </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('student::layouts.print-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/Student/Providers/../Resources/views/print/page.blade.php ENDPATH**/ ?>