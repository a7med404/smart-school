<div class="row">
    
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('employee_id', ' اسم الموظف  ', ['class' => 'control-label']); ?>

            <?php echo Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  <?php echo e($errors->has('employee_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('employee_id')); ?>", 'required']); ?>

        </div>
    </div>
</div>



<?php if(isset($classroomInfo)): ?>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">بحــث</button>
    </div>
</div>
    
<?php else: ?>
<div class="row m-t-40">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">بحــث</button>
    </div>
<?php endif; ?>
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/empPull/form.blade.php ENDPATH**/ ?>