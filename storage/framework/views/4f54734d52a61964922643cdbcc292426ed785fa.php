<?php $__env->startSection('title'); ?>
<?php echo e(__('home/sidebar.all_calends')); ?>

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
    <h1>   طلب اجازة  <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">  طلب اجازة  </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> طلب اجازة </h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-empholiday" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> طلب اجازة
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                            <tr>
                                <th>#ID</th>
                                <th> اسم الموظف </th>
                                <th>التاريخ من </th>
                                <th> التاريخ الي  </th>
                                <th>   نوع الاجازة </th>
                                <th>  ملاحظات </th>
                                <th>option</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $empholidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empholiday): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="text-center">
                                    <td><?php echo e($empholiday->id); ?></td>
                                    <td><?php echo e($empholiday->employee_id); ?></td>
                                    <td><?php echo e($empholiday->from); ?></td>
                                    <td><?php echo e($empholiday->to); ?></td>
                                    <td><?php echo e($empholiday->add_holiday_id); ?></td>
                                    <td><?php echo e($empholiday->note); ?></td>
     
                                    <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <span class="fa fa-ellipsis-h"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('emp-holidays.show',  ['id' => $empholiday->id])); ?>"}}>استعراض</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('emp-holidays.edit',  ['id' => $empholiday->id])); ?>">تعديل</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="<?php echo e(route('empholiday.delete',['id' => $empholiday->id])); ?>">حذف</a></li>
                                            </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7">
                                    <div class="text-center">
                                        <p>لا توجد بيانات في هذا الجدول</p>
                                    </div>
                                </td>
                            </tr>   
                            <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
    <?php echo $__env->make('employee::employees.holiday.empholiday.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('cpanel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/holiday/empholiday/index.blade.php ENDPATH**/ ?>