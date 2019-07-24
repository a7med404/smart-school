    <p>بيانات عامة:</p>
    <!-- Personal Information Form  -->
    <div class="row">
        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('name', ' اسم الطالب كامل', ['class' => 'control-label']); ?>

                <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control  <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('gender', 'النوع', ['class' => 'control-label']); ?>

                <?php echo Form::select('gender', gender(), null, ['id' => 'gender', 'class' => "form-control select2 <?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('gender')); ?>", 'required']); ?>

            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('religion', 'الديانة', ['class' => 'control-label']); ?>

                <?php echo Form::select('religion', religion(), null, ['id' => 'religion', 'class' => "form-control select2 <?php echo e($errors->has('religion') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('religion')); ?>", 'required']); ?>

            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <?php echo Form::label('birthday', 'تاريخ الميلاد', ['class' => 'control-label']); ?>

                    <div class="input-group">
                        <?php echo Form::text('birthday', null, ['id' => 'birthday', 'class' => "form-control  <?php echo e($errors->has('birthday') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('birthday')); ?>", 'required', 'autofocus']); ?>

                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <?php echo Form::label('start_data', 'تاريخ الالتحاق', ['class' => 'control-label']); ?>

                    <div class="input-group">
                        <?php echo Form::text('start_data', null, ['id' => 'start_data', 'class' => "form-control  <?php echo e($errors->has('start_data') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('start_data')); ?>", 'required', 'autofocus']); ?>

                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('education_year', 'العام الدراسي', ['class' => 'control-label']); ?>

                <?php echo Form::select('education_year', educationYear(), null, ['id' => 'education_year', 'class' => "form-control select2 <?php echo e($errors->has('education_year') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('education_year')); ?>", 'required']); ?>

            </div>
        </div>

        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('study_status', 'الحالة الدراسية', ['class' => 'control-label']); ?>

                <?php echo Form::select('study_status', studyStatus(), null, ['id' => 'study_status', 'class' => "form-control select2 <?php echo e($errors->has('study_status') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('study_status')); ?>", 'required']); ?>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('nationality', 'الجنسية', ['class' => 'control-label']); ?>

                <?php echo Form::select('nationality', nationality(), null, ['id' => 'nationality', 'class' => "form-control select2 <?php echo e($errors->has('nationality') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('nationality')); ?>", 'required']); ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 custom-label-checkbox-radio">
            <div class="form-group">
                <?php echo Form::label('is_staff_son', 'من ابناء العاملين' , ['class' => 'control-label']); ?> <br />
                <?php echo Form::checkbox('is_staff_son', 1, null, ['id' => 'is_staff_son', 'class' => " <?php echo e($errors->has('is_staff_son') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('is_staff_son')); ?>"]); ?>

            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12"> 
            <div class="form-group">
                <?php echo Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']); ?>

                <?php echo Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  <?php echo e($errors->has('level_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('level_id')); ?>", 'required']); ?>

            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('classroom_id', 'اسم الصف', ['class' => 'control-label']); ?>

                <?php echo Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  <?php echo e($errors->has('classroom_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('classroom_id')); ?>", 'required']); ?>

            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']); ?>

                <?php echo Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  <?php echo e($errors->has('part_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('part_id')); ?>", 'required']); ?>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="form-group">
                <?php echo Form::label('note', 'ملاحظة', ['class' => 'control-label']); ?>

                <?php echo Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  <?php echo e($errors->has('note') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('note')); ?>", 'autofocus']); ?>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <button class="btn btn-primary btn-md">حفــظ</button>
        </div>
    </div>
    <!-- ... end Personal Information Form  -->
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/students/student/form.blade.php ENDPATH**/ ?>