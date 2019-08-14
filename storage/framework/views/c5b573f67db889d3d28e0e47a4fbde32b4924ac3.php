<?php $__env->startSection('title'); ?>
<?php echo e(__('home/sidebar.all_HOME')); ?>

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
        <h1> الموظفيين <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li><a href="#">شوؤن الموظفيين</a></li>
          <li class="active">الموظفيين</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
                <!-- Default box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">الموظفيين</h3>
              <div class="box-tools pull-right">
                <a type="button" data-toggle="modal" data-target="#popup-add-employee" class="btn btn-info">
                  <i class="fa fa-plus"></i>  اضافة موظف امر جديد
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
                          <th>الوظيفة </th>
                          <th>الشعبة </th>
                          <th>المرحلة</th>
                          <th>options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>محمد ابراهيم ابراهيم السيد</td>
                          <td>معلم </td>
                          <td>اللغة العربية</td>
                          <td>الاساس</td>
                          <td>
                              <div class="btn-group">
                                  <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>عبد الله علي حمد النيل</td>
                          <td>معلم</td>
                          <td>التاريخ</td>
                          <td>الثانوية</td>
                          <td>
                              <div class="btn-group">

                                  <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                              </div>
                          </td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </section>



    <!-- /.box -->
    <?php echo $__env->make('employee::employees.emp.employees-info.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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




<?php echo $__env->make('cpanel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/emp/employees-info/index.blade.php ENDPATH**/ ?>