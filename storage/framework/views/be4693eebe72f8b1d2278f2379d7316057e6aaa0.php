<div class="row">
    <div class="col col-lg-8 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']); ?>

            <?php echo Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  <?php echo e($errors->has(' employee_id ') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('employee_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('add_holiday_id', 'نوع الأجازة ', ['class' => 'control-label']); ?>

            <?php echo Form::select('add_holiday_id', getSelect('add_holidays'), null, ['id' => 'add_holiday_id', 'class' => "select2 form-control  <?php echo e($errors->has('add_holiday_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('add_holiday_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('balance', 'الرصيد', ['class' => 'control-label']); ?>

                <?php echo Form::text('balance', null, ['id' => 'balance', 'class' => "form-control  <?php echo e($errors->has('balance') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('balance')); ?>", 'required', 'autofocus']); ?>

            </div>
        </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('from', 'التاريخ من', ['class' => 'control-label']); ?>

                <?php echo Form::date('from', null, ['id' => 'from', 'class' => "form-control  <?php echo e($errors->has('from') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('from')); ?>", 'required', 'autofocus']); ?>

            </div>
        </div>


    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('to', 'التاريخ الي ', ['class' => 'control-label']); ?>

                <?php echo Form::date('to', null, ['id' => 'to', 'class' => "form-control  <?php echo e($errors->has('to') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('to')); ?>", 'required', 'autofocus']); ?>

            </div>
        </div>


    <div class="col col-lg-12 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('note', ' ملاحــظة ', ['class' => 'control-label']); ?>

                <?php echo Form::textArea('note', null, ['id' => 'note', 'class' => "form-control  <?php echo e($errors->has('note') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('note')); ?>", 'required', 'autofocus']); ?>

            </div>
        </div>
    
</div>



<?php if(isset($calendInfo)): ?>
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
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/holiday/empholiday/form.blade.php ENDPATH**/ ?>