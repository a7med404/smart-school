<div class="row">

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('level_id', ' اسم المرحلة التعليمية   ', ['class' => 'control-label']); ?>

            <?php echo Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'type' => "select2 form-control  <?php echo e($errors->has('level_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('level_id')); ?>", 'required']); ?>

        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('department_id', ' اسم القسم  ', ['class' => 'control-label']); ?>

            <?php echo Form::select('department_id', getSelect('departments'), null, ['id' => 'department_id', 'type' => "select2 form-control  <?php echo e($errors->has('department_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('department_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('employee_id', ' اسم الموظف  ', ['class' => 'control-label']); ?>

            <?php echo Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'type' => "select2 form-control  <?php echo e($errors->has('employee_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('employee_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('item_id', ' عنصر التقييم   ', ['class' => 'control-label']); ?>

            <?php echo Form::select('item_id', getSelect('evaluation_items'), null, ['id' => 'item_id', 'type' => "select2 form-control  <?php echo e($errors->has('item_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('item_id')); ?>", 'required']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('real_degree', '  الدرجة الفعلية   ', ['class' => 'control-label']); ?>

            <?php echo Form::text('real_degree', null, ['id' => 'real_degree', 'class' => "form-control  <?php echo e($errors->has('real_degree') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('real_degree')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('degree', ' درجة التقييم   ', ['class' => 'control-label']); ?>

            <?php echo Form::text('degree', null, ['id' => 'degree', 'class' => "form-control  <?php echo e($errors->has('degree') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('degree')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('date', '  التاريخ   ', ['class' => 'control-label']); ?>

            <?php echo Form::date('date', null, ['id' => 'date', 'class' => "form-control  <?php echo e($errors->has('date') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('date')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>

        
    </div>
    
    
    
    <?php if(isset($evaluationIitemInfo)): ?>
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button href="#" class="btn btn-primary">تعــديل</button>
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
    <?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/evaluation/evaluationemp/form.blade.php ENDPATH**/ ?>