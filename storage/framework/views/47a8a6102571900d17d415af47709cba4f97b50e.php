
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
            <form role="form" action="<?php echo e(route('managaments.store')); ?>" methode="post">
    
                <div class="row">
                  <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label"> اسم الادارة</label>
                      <input class="form-control" placeholder="" type="text">
                    </div>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                    <button href="#" class="btn btn-primary">حـــفظ</button>
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
    
      <!-- Popup  -->
      <div class="modal fade" id="popup-add-department">
        <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-department" aria-hidden="true">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title">بيانات القسم</h4>
            </div>
            <div class="modal-body">
              <!-- Personal Information Form  -->
              <form role="form">
    
                <div class="row">
                  <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الادارة</label>
                      <select class="form-control select2">
                        <option value="CA">الاسلام</option>
                        <option value="TE">المسيحية</option>
                        <option value="TE">اخرى</option>
                      </select>
                    </div>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label"> اسم القسم </label>
                      <input class="form-control" placeholder="" type="text" >
                    </div>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                    <button href="#" class="btn btn-primary">حـــفظ</button>
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
    
      <!-- Popup  -->
      <div class="modal fade" id="popup-add-specialty">
        <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-specialty" aria-hidden="true">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title"> التخصص</h4>
            </div>
            <div class="modal-body">
              <!-- Personal Information Form  -->
              <form role="form">
    
                <div class="row">
                  <div class="col col-lg-6 col-md-5 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label"> اسم التخصص</label>
                      <input class="form-control" placeholder="" type="text">
                    </div>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                    <button href="#" class="btn btn-primary">حـــفظ</button>
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
    
    <?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/managaments/add.blade.php ENDPATH**/ ?>