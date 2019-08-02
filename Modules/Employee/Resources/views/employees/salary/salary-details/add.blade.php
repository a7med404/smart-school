
    <!-- Popup  -->
    <div class="modal fade" id="popup-add-rewards">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title">بيانات </h4>
            </div>
            <div class="modal-body">
              <form role="form" action="" method="POST">
                  @csrf
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> السنة المالية </label>
                      <select class="form-control select2" name="level_id">
                        <option value="CA">2010</option>
                        <option value="TE">2011</option>
                        <option value="TE">2012</option>
                        <option value="CA">2013</option>
                        <option value="TE">2014</option>
                        <option value="TE">2015</option>
                      </select>
                    </div>
                  </div>
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> التاريخ </label>
                      <input class="form-control" placeholder="" type="text" name="max_student_number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> اسم الادارة </label>
                      <select class="form-control select2" name="level_id">
                        <option value="CA">التعلبم</option>
                        <option value="TE">الحسابات</option>
                        <option value="TE">شؤون الموظفين</option>
                      </select>
                    </div>
                  </div>
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> اسم القسم </label>
                      <select class="form-control select2" name="rewards_id">
                        <option value="CA">اداري</option>
                        <option value="TE">معلم</option>
                        <option value="TE">عامل</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> النوع </label>
                      <div class="form-group">
                        <label>
                          <input type="radio" name="type" class="flat-red" checked> مكافاة
                        </label>
                        <label>
                          <input type="radio" name="type" class="flat-red"> خصم
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> اسم الموظف </label>
                      <select class="form-control select2" name="level_id">
                      <option value="1">احمد محمد احمد علي</option>
                      <option value="0">عباس الخير عبد الرحمن محمد</option>
                      <option value="1">الفاضل محمد عثمان بلال</option>
                      <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                  <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                      <label class="control-label"> القيمة </label>
                      <input class="form-control" placeholder="" type="text" name="max_student_number">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">السبب</label>
                      <textarea class="form-control" placeholder=""></textarea>
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
            </div>
          </div>
        </div>
      </div>
      <!-- ... end Popup  -->


