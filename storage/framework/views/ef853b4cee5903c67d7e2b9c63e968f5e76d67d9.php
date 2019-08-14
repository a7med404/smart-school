<!-- Popup  -->
<div class="modal fade" id="popup-add-payrul">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title">بنود رسوم الطلاب</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('pay_rules.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="form-group">
                        <label class="control-label"> الاسم </label>
                        <input class="form-control" placeholder="" type="text" name="name" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">
                          <input type="checkbox" class="minimal" name="is_mandatary">
                          اجباري
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">ملاحظة</label>
                        <textarea class="form-control" placeholder="" name="note"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                      <button type="submit" class="btn btn-primary">حـــفظ</button>
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
<?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/Modules/Student/Providers/../Resources/views/students/account/pay-ruls/add.blade.php ENDPATH**/ ?>