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


        <section class="content">
                <!-- Default box -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
                  </div>
                    <div class="box-body">
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                          <li class="active"><a href="#admins" data-toggle="tab">الادارة</a></li>
                          <li><a href="#department" data-toggle="tab">الاقسام</a></li>
                          <li><a href="#specialty" data-toggle="tab">التخصصات</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="admins" role="tabpanel" aria-expanded="true">
          
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-admins" class="btn btn-info m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم الادارة </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $managaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $managament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr class="text-center">
                                            <td><?php echo e($managament->id); ?></td>
                                            <td><?php echo e($managament->name); ?></td>
                                          <td>
                                              <div class="dropdown">
                                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                      <span class="fa fa-ellipsis-h"></span>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('managaments.show',  ['id' => $managament->id])); ?>"}}>استعراض</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('managaments.edit',  ['id' => $managament->id])); ?>">تعديل</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="<?php echo e(route('managament.delete',['id' => $managament->id])); ?>">حذف</a></li>
                                                      </ul>
                                              </div>
                                          </td>
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
                          <div class="tab-pane" id="department" role="tabpanel" aria-expanded="true">
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-department" class="btn btn-info m--20 m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم الادارة </th>
                                            <th>اسم القسم </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr class="text-center">
                                            <td><?php echo e($department->id); ?></td>
                                            <td><?php echo e($department->managament_id); ?></td>
                                            <td><?php echo e($department->name); ?></td>
                                          <td>
                                              <div class="dropdown">
                                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                      <span class="fa fa-ellipsis-h"></span>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('departments.show',  ['id' => $department->id])); ?>"}}>استعراض</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('departments.edit',  ['id' => $department->id])); ?>">تعديل</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="<?php echo e(route('department.delete',['id' => $department->id])); ?>">حذف</a></li>
                                                      </ul>
                                              </div>
                                          </td>
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
          
                          <div class="tab-pane" id="specialty" role="tabpanel" aria-expanded="true">
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-specialty" class="btn btn-info m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم التخصص </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>مدرس انجليزى</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>وكيل مالى وإدارى</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>وكيل شئون مالية وحسابات</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>مشرف رياض أطفال</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>
          
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.box -->
              </section>
          
    </div>
    <!-- /.box -->
    
    <?php echo $__env->make('employee::employees.managaments.management.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('employee::employees.managaments.department.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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




<?php echo $__env->make('cpanel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/managaments/index.blade.php ENDPATH**/ ?>