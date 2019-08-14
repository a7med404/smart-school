<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('management_id', 'اسم الادارة', ['class' => 'control-label']); ?>

            <?php echo Form::select('management_id', getSelect('managaments'), null, ['id' => 'management_id', 'class' => "select2 form-control  <?php echo e($errors->has('management_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('management_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('department_id', 'اسم القسم', ['class' => 'control-label']); ?>

            <?php echo Form::select('department_id', getSelect('departments'), null, ['id' => 'department_id', 'class' => "select2 form-control  <?php echo e($errors->has('department_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('department_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']); ?>

            <?php echo Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  <?php echo e($errors->has('employee_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('employee_id')); ?>", 'required']); ?>

        </div>
    </div>
    
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('date', 'التاريخ', ['class' => 'control-label']); ?>

                <?php echo Form::date('date', null, ['id' => 'date', 'class' => "form-control  <?php echo e($errors->has('date') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('date')); ?>", 'required', 'autofocus']); ?>

            </div>
        </div>

        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                    <?php echo Form::label('type', 'نوع المخالفة', ['class' => 'control-label']); ?>

                    <?php echo Form::select('type', calendType(), null, ['id' => 'type', 'class' => "select2 form-control  <?php echo e($errors->has('type') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('type')); ?>", 'required']); ?>

                </div>
            </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('', 'اسم المخالفة', ['class' => 'control-label']); ?>

                <?php echo Form::select('calend_id', getSelect('calends'), null, ['id' => 'calend_id', 'class' => "select2 form-control  <?php echo e($errors->has('calend_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('calend_id')); ?>", 'required']); ?>

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
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/calends/form.blade.php ENDPATH**/ ?>