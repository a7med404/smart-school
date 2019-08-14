<?php $__env->startSection('title'); ?>
<?php echo e(__('home/sidebar.all_EmpAbsence')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<!-- icheck -->
<?php echo Html::style(asset('modules/master/plugins/icheck-1.x/all.css')); ?>

<!-- dataTable -->
<?php echo Html::style(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.css')); ?>

<?php echo Html::style(asset('modules/master/plugins/datatables/jquery.dataTables.min.css')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
        <h1>تسجيل غياب الموظفين <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">تسجيل غياب الموظفين</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">تسجيل غياب الموظفين</h3>
            <div class="box-tools pull-right">
              <a type="button" data-toggle="modal" data-target="#popup-add-progenitor" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i>  اضافة
              </a>
            </div>
          </div>
        </div>
        <!-- /.box -->
        <div class="row">
          <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                <tr>
                    <th>#ID</th>
                    <th>اسم الموظف</th>
                    <th> التاريخ من</th>
                    <th> التاريخ الي</th>
                    <th>سبب الغياب</th>
                    <th>options</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $empabsences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empabsence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                  <tr>
                    <td><?php echo e($empabsence->id); ?></td>
                    <td><?php echo e($empabsence->empolyee_id); ?></td>
                    <td><?php echo e($empabsence->absence_from); ?></td>
                  <td><?php echo e($empabsence->absence_to); ?></td>
                    <td><?php echo e($empabsence->absence_reason); ?></td>

                    <td>
                      <div class="btn-group">
                            <form action="<?php echo e(route('emp-absences.edit' ,['id' => $empabsence->id])); ?>" method="GET">
                                <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                            </form>

                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                        <form action="<?php echo e(route('emp-absences.destroy',['id' =>$empabsence->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger confirm"> <i class="fa fa-times"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>    <!-- /.box -->
    <?php echo $__env->make('employee::employees.EmpAbsence.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- icheck -->
<?php echo Html::script(asset('modules/master/plugins/icheck.min.js')); ?>

<!-- dataTable -->
<?php echo Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')); ?>

<?php echo Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')); ?>

<script>
    $('#table_id').DataTable({
        // processing: true,
        // serverSide: true,
        // "columnDefs":[
        //   {
        //     "targets":[1, 3, 7],
        //     "orderable":false,
        //   },
        // ],
        "stateSave": false,
        "responsive": true,
        "order": [
            [0, 'desc']
        ],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,
    });
    $(document).ready(function () {
        /*
            For iCheck =====================================>
        */
        $("input").iCheck({
            checkboxClass: "icheckbox_square-yellow",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });

<?php $__env->stopSection(); ?>




<?php echo $__env->make('cpanel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/EmpAbsence/index.blade.php ENDPATH**/ ?>