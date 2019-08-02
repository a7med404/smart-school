<div class="row">

    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="form-group">
            <?php echo Form::label('education_year', 'العام الدراسي', ['class' => 'control-label']); ?>

            <?php echo Form::select('education_year', educationYear(), null, ['id' => 'education_year', 'class' => "form-control select2 <?php echo e($errors->has('education_year') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('education_year')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']); ?>

            <?php echo Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  <?php echo e($errors->has('level_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('level_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('classroom_id', 'اختيار الصف', ['class' => 'control-label']); ?>

            <?php echo Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  <?php echo e($errors->has('classroom_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('classroom_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('pay_rul_id', 'نوع الرسوم', ['class' => 'control-label']); ?>

            <?php echo Form::select('pay_rul_id', getSelect('pay_ruls'), null, ['id' => 'pay_rul_id', 'class' => "select2 form-control  <?php echo e($errors->has('pay_rul_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('pay_rul_id')); ?>", 'required']); ?>

        </div>
    </div>


    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('name', 'القيمة', ['class' => 'control-label']); ?>

            <?php echo Form::text('value', null, ['id' => 'value', 'class' => "form-control ",'required', 'autofocus']); ?>

        </div>
    </div>
</div>


</div>


<?php if(isset($PayClassInfo)): ?>
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
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/students/account/pay-class/form.blade.php ENDPATH**/ ?>