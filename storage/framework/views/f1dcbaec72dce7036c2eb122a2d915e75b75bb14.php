<!-- Popup  -->
<div class="modal fade" id="popup-add-level">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title"> البيانات</h4>
            </div>
            <div class="modal-body">
                <?php echo Form::open(['route' => ['levels.store'], 'method' => "POST", 'class' => 'form']); ?>

                <?php echo $__env->make('student::students.educations.levels.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/Modules/Student/Providers/../Resources/views/students/educations/levels/add.blade.php ENDPATH**/ ?>