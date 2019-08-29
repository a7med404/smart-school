<!-- Popup  -->
<div class="modal fade" id="popup-add-add-holidays">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title">بيانات  اسم الاجازة</h4>
            </div>
            <div class="modal-body">
                <?php echo Form::open(['route' => ['add-holidays.store'], 'method' => "POST", 'class' => 'form']); ?>

                <?php echo $__env->make('employee::employees.holiday.addholiday.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/holiday/addholiday/add.blade.php ENDPATH**/ ?>