
      <!-- Popup  -->
      <div class="modal fade" id="popup-add-progenitor">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content modal-content-box">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="title">بيانات </h4>
                </div>
                <div class="modal-body">
                <form role="form"  action="<?php echo e(route('empabsences.store')); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                          <label class="control-label"> اسم الموظف </label>
                          <select class="form-control select2" name="empolyee_id">
                            <option value="1">محمد ابراهيم ابراهيم السيد</option>
                            <option value="1">احمد محمد احمد علي</option>
                            <option value="0">عباس الخير عبد الرحمن محمد</option>
                            <option value="1">الفاضل محمد عثمان بلال</option>
                            <option value="0">معتز احمد محمد حنفي</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                          <label class="control-label"> التاريخ من </label>
                          <input class="form-control" placeholder="" type="date" name="absence_from" >
                        </div>
                      </div>
                      <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                          <label class="control-label"> التاريخ الي </label>
                          <input class="form-control" placeholder="" type="date" name="absence_to">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">ملاحظات</label>
                          <textarea class="form-control" placeholder="" name="absence_reason"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                        <button  class="btn btn-primary">حـــفظ</button>
                      </div>
                      <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- ... end Popup  -->


<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Employee/Providers/../Resources/views/employees/EmpAbsence/add.blade.php ENDPATH**/ ?>