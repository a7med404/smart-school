
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('name', 'Permission Name', ['class' => 'control-label']); ?>

            <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control  <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('display_name', 'Display Name', ['class' => 'control-label']); ?>

            <?php echo Form::text('display_name', null, ['id' => 'display_name', 'class' => "form-control  <?php echo e($errors->has('display_name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('display_name')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            <?php echo Form::label('description', 'Description', ['class' => 'control-label']); ?>

            <?php echo Form::textarea('description', null, ['id' => 'description', 'class' => "form-control  <?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('description')); ?>", 'autofocus']); ?>

        </div>
    </div>
</div>

<?php if(isset($permissionInfo)): ?>
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
<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/User/Providers/../Resources/views/permissions/form.blade.php ENDPATH**/ ?>