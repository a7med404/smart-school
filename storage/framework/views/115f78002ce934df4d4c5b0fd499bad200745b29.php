<?php $__env->startSection('title'); ?>
<?php echo e(__('home/sidebar.all_students')); ?>

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
  <h1> كل الطلاب <small>  </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active">كل الطلاب</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">كل الطلاب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
            <form  role="form">
              <div class="row">
                <?php echo Form::hidden('filter', null, ['value' => "<?php echo e(old('filter')); ?>"]); ?>

                <div class="col col-lg-3 col-md-3 col-sm-12 col-12"> 
                  <div class="form-group">
                      <?php echo Form::label('level_id', 'اختيار المرحلة التعليمية', ['class' => 'control-label']); ?>

                      <?php echo Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  <?php echo e($errors->has('level_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('level_id')); ?>"]); ?>

                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <?php echo Form::label('classroom_id', 'اختيار الصف', ['class' => 'control-label']); ?>

                    <?php echo Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  <?php echo e($errors->has('classroom_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('classroom_id')); ?>"]); ?>

                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <?php echo Form::label('part_id', 'اختيار الفصل', ['class' => 'control-label']); ?>

                    <?php echo Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  <?php echo e($errors->has('part_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('part_id')); ?>"]); ?>

                  </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-6 col-12">
                  <div class="form-group">
                    <?php echo Form::label('gender', 'النوع', ['class' => 'control-label']); ?>

                    <?php echo Form::select('gender', getGender(), null, ['id' => 'gender', 'class' => "form-control select2 <?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('gender')); ?>"]); ?>

                  </div>
                </div>
                <div class="col col-lg-1 col-md-1 col-sm-12 col-12 m-t-25">
                  <button type="submit" class="btn btn-info">بحــــث</button>
                </div>
              </div>
            </form>
                
            <div class="row">
              <!-- Print Buttons -->
              <div class="no-print">
                  <div class="col-xs-12 m-b-20">
                    <a href="/student/print-page/students" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                    <a type="button" href="/student/print-page/students" class="btn btn-success" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> انشاء ملف PDF
                    </a>
                    <a href="/student/print-page/students" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                    <a href="/student/print-page/students" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> تصدير اكسل</a>
                  </div>
              </div>
              <!-- End Prints buttons -->
            </div>

            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th>اسم المرحلة التعليمية</th>
                            <th>اسم الصف</th>
                            <th>اسم الفصل</th>
                            <th>النوع</th>
                            <th><?php echo e(__('home/labels.options')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                          <td><?php echo e($student->id); ?></td>
                          <td><?php echo e($student->name); ?></td>
                          <td><?php echo e($student->level->name); ?></td>
                          <td><?php echo e($student->classroom->name); ?></td>
                          <td><?php echo e($student->part->name); ?></td>
                          <td><?php echo e(gender()[$student->gender]); ?></td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('students.show',  ['id' => $student->id])); ?>">استعراض</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(route('students.edit',  ['id' => $student->id])); ?>">تعديل</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="<?php echo e(route('students.delete',['id' => $student->id])); ?>">حذف</a></li>
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


<?php echo $__env->make('cpanel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/students/student/index.blade.php ENDPATH**/ ?>