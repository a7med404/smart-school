<div class="row">

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                <?php echo Form::label('managament_id', ' اسم الادارة ', ['class' => 'control-label']); ?>

                <?php echo Form::select('managament_id', getSelect('managaments'), null, ['id' => 'managament_id', 'class' => "select2 form-control  <?php echo e($errors->has('managament_id') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('managament_id')); ?>", 'required']); ?>

            </div>
        </div>

        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                    <?php echo Form::label('name', 'اسم القسم', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control  <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

                </div>
            </div>

        
    </div>
    
    
    
    <?php if(isset($ManagamentInfo)): ?>
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
    <?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/managaments/department/form.blade.php ENDPATH**/ ?>