
<div class="row">
    <div class="ccol col-xl-12 col-lg-12 col-md-12">
        <div class="form-group">
            <?php echo Form::label('name', 'Name', ['class' => 'control-label']); ?>

            <?php echo Form::text('name', null, ['id' => 'name', 'class' => "form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('name')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('phone_number', 'Phone Number', ['class' => 'control-label']); ?>

            <?php echo Form::text('phone_number', null, ['id' => 'phone_number', 'class' => "form-control <?php echo e($errors->has('phone_number') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('phone_number')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('email', 'Email', ['class' => 'control-label']); ?>

            <?php echo Form::text('email', null, ['id' => 'email', 'class' => "form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('email')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('username', 'User Name', ['class' => 'control-label']); ?>

            <?php echo Form::text('username', null, ['id' => 'username', 'class' => "form-control  <?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('username')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div> 
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            <?php echo Form::label('note', 'Note', ['class' => 'control-label']); ?>

            <?php echo Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  <?php echo e($errors->has('note') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('note')); ?>", 'autofocus']); ?>

        </div>
    </div>
</div>

<div class="row">
    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 custom-label-checkbox-radio">
            <div class="form-group">
                <?php echo Form::label($role->name, $role->display_name, ['class' => 'control-label']); ?> <br />
                <?php echo Form::checkbox('roles[]', $role->id, null, ['id' => $role->name, 'class' => " <?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('role')); ?>"]); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php if(!isset($userInfo)): ?>
<div class="row">
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('password', 'password', ['class' => 'control-label']); ?>

            <?php echo Form::password('password', null, ['id' => 'password', 'class' => "form-control  <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('password')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            <?php echo Form::label('password-confirm', 'Password Confirm', ['class' => 'control-label']); ?>

            <?php echo Form::password('password_confirmation', null, ['id' => 'password-confirm', 'class' => "form-control <?php echo e($errors->has('password-confirm') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('password-confirm')); ?>", 'required', 'autofocus']); ?>

        </div>
    </div>
</div>

<?php endif; ?>
<div class="row">
    <div class="col-md-3 custom-label-checkbox-radio">
        <div class="form-group">
            <?php echo Form::label('status', 'Status', ['class' => 'control-label']); ?> <br />
            <?php echo Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "<?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('status')); ?>", 'required']); ?>  <span>Active</span> <br>
            <?php echo Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " <?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>", 'value' => "<?php echo e(old('status')); ?>", 'required']); ?> <span>Disable</span> 
        </div>
    </div>
</div>
<?php if(isset($roleInfo)): ?>
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
<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/User/Providers/../Resources/views/users/form.blade.php ENDPATH**/ ?>