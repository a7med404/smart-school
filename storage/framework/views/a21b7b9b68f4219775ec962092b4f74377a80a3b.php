<?php $__env->startSection('title'); ?>
<?php echo e(__('home/sidebar.all_bear-in-mind')); ?>

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
        <h1>لفت نظر <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">لفت نظر</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">لفت نظر</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>

              <a type="button" data-toggle="modal" data-target="#popup-add-formal" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة
              </a>
            </div>
          </div>
          <div class="box-body">

            <div class="row">
              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الموظف </th>
                            <th>التاريخ</th>
                            <th>ملاحظات</th>
                            <th>options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $bearinminds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><a href="#" class=""><?php echo e($item->empolyee_id); ?></a></td>
                        <td><a href="#" class=""><?php echo e($item->date); ?></a></td>
                        <td><a href="#" class=""><?php echo e($item->note); ?></a></td>
                        <td>
                            <div class="btn-group">
                            <form action="<?php echo e(route('bearinminds.edit',['id' => $item->id])); ?>" method="get">
                                <button class="btn btn-info>"><i class="fa fa-pencil"></i></button>
                           </form>
                            <form action="<?php echo e(route('bearinminds.destroy',['id' => $item->id])); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></button>
                                </form>

                            </div>
                        </td>
                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
              </div>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>

    <!-- /.box -->
    <?php echo $__env->make('employee::employees.BearinMind.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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




<?php echo $__env->make('cpanel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/BearinMind/index.blade.php ENDPATH**/ ?>