<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('name', 'اسم المرحلة التعليمية', ['class' => 'control-label']); ?>

            <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control  <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('sort', 'الترتيب', ['class' => 'control-label']); ?>

            <?php echo Form::text('sort', null, ['id' => 'sort', 'class' => "form-control  <?php echo e($errors->has('sort') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('sort')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('head_master', 'مدير المدرسة', ['class' => 'control-label']); ?>

            <?php echo Form::text('head_master', null, ['id' => 'head_master', 'class' => "form-control  <?php echo e($errors->has('head_master') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('head_master')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('school_master', ' ناظر المدرسة', ['class' => 'control-label']); ?>

            <?php echo Form::text('school_master', null, ['id' => 'school_master', 'class' => "form-control  <?php echo e($errors->has('school_master') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('school_master')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>

<?php if(isset($levelInfo)): ?>
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
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/students/educations/levels/form.blade.php ENDPATH**/ ?>