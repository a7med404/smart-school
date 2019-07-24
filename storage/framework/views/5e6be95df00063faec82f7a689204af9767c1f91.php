<div class="row">

        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                    <?php echo Form::label('type', ' نوع المخالفة  ', ['class' => 'control-label']); ?>

                    <?php echo Form::select('type', calendType(), null, ['id' => 'type', 'type' => "select2 form-control  <?php echo e($errors->has('type') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('type')); ?>", 'required']); ?>

                </div>
            </div>
        
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('discount_percentage', '    نسبة خصم من المرتب', ['class' => 'control-label']); ?>

            <?php echo Form::text('discount_percentage', null, ['id' => 'discount_percentage', 'class' => "form-control  <?php echo e($errors->has('discount_percentage') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('discount_percentage')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            <?php echo Form::label('name', '  اسم المخالفة', ['class' => 'control-label']); ?>

            <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control  <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>



<?php if(isset($classroomInfo)): ?>
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
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/calends/form.blade.php ENDPATH**/ ?>