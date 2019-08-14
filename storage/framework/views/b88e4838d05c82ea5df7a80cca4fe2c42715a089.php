
  <!-- Popup  -->
  <div class="modal fade" id="popup-add-admins">
        <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-admins" aria-hidden="true">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title"> الادارة</h4>
            </div>
            <div class="modal-body">
              <!-- Personal Information Form  -->
            <form role="form" action="<?php echo e(route('managaments.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label"> اسم الادارة</label>
                      <input class="form-control" name="name" placeholder="" type="text">
                    </div>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                    <button href="#" class="btn btn-primary" type="submit">حـــفظ</button>
                  </div>
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                  </div>
                </div>
              </form>
              <!-- ... end Personal Information Form  -->
    
            </div>
          </div>
        </div>
      </div>
      <!-- ... end Popup  -->

      <!-- ... end Popup  -->
    
    <?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/managaments/management/add.blade.php ENDPATH**/ ?>