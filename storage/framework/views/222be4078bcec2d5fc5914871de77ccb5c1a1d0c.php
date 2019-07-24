<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']); ?>

            <?php echo Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  <?php echo e($errors->has('level_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('level_id')); ?>", 'required']); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('classroom_id', 'اسم الصف', ['class' => 'control-label']); ?>

            <?php echo Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  <?php echo e($errors->has('classroom_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('classroom_id')); ?>", 'required']); ?>

        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('name', 'اسم الفصل', ['class' => 'control-label']); ?>

            <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control  <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('max_student_number', 'عدد الطلاب', ['class' => 'control-label']); ?>

            <?php echo Form::text('max_student_number', null, ['id' => 'max_student_number', 'class' => "form-control  <?php echo e($errors->has('max_student_number') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('max_student_number')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('sort', 'الترتيب', ['class' => 'control-label']); ?>

            <?php echo Form::text('sort', null, ['id' => 'sort', 'class' => "form-control  <?php echo e($errors->has('sort') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('sort')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>
 

 
<?php if(isset($partInfo)): ?>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>
    
<?php else: ?>
<div class="row m-t-40">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/students/educations/parts/form.blade.php ENDPATH**/ ?>