<template>
<div>
  <section class="content-header">
    <h1> Blank page <small> it all starts here </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          
        <!-- START CUSTOM TABS -->
        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#info" data-toggle="tab">بيانات عامة</a></li>
                <li><a href="#address" data-toggle="tab">عنوان الطالب</a></li>
                <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
                <li><a href="#dist" data-toggle="tab">توزيع الطالب</a></li>
                <li><a href="#health" data-toggle="tab">الحالة الصحية</a></li>
                <li><a href="#master" data-toggle="tab">بيانات ولي امر الطالب</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="info">
                  <p>بيانات عامة:</p>
                    <!-- Personal Information Form  -->
                    <form role="form">
                      <div class="row">
                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> اسم الطالب كامل </label>
                            <input class="form-control" placeholder="" type="text" name="name">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">النوع</label>
                            <select class="form-control select2"  name="gender">
                              <option value="1">ذكر</option>
                              <option value="0">انثي</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">الديانة</label>
                            <select class="form-control select2" name="religion">
                              <option value="CA">الاسلام</option>
                              <option value="TE">المسيحية</option>
                              <option value="TE">اخرى</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">لغة الدراسة</label>
                            <select class="form-control select2" name="study_language_id">
                              <option value="SF">الانجليزية</option>
                              <option value="NY">العربية</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label class="control-label">
                              <input type="checkbox" class="minimal" name="is_staff_son">
                              من ابناء العاملين 
                            </label>
                          </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label class="control-label">
                              <input type="checkbox" class="minimal" name="optionsCheckboxes">
                              من ابناء العاملين 
                            </label>
                          </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label class="control-label">
                              <input type="checkbox" class="minimal" name="is_partner_son">
                              من ابناء الشركاء
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> الرقم القومي للطالب </label>
                            <input class="form-control" placeholder="" type="text" value="" name="identifcation_number">
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ انتهاء الرقم القومي / رقم الهوية</label>
                            <input type="text" class="form-control" id="identifcation_expire" name="identifcation_expire"/>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ الميلاد</label>
                            <input type="text" class="form-control" id="birthday" name="birthday"/>
                          </div>
                        </div>
                      </div>
                  
                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">الصف الذي الحق به الطالب</label>
                            <select class="form-control select2" name="start_from">
                              <option value="CA">الاول</option>
                              <option value="TE">الثاني</option>
                              <option value="TE">الثالث</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ الالتحاق</label>
                            <input type="text" class="form-control" id="start_data" name="start_data"/>
                          </div>
                          </div>
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">سنة الالتحاق</label>
                            <select class="form-control select2"  name="start_year">
                              <option value="CA">2013/2014</option>
                              <option value="TE">2014/2015</option>
                              <option value="TE">2015/2016</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> حالة الطالب</label>
                            <select class="form-control select2"  name="start_year">
                              <option value="CA">2013/2014</option>
                              <option value="TE">2014/2015</option>
                              <option value="TE">2015/2016</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">ملاحظة</label>
                            <textarea class="form-control" placeholder="" name="note"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                          <button class="btn btn-primary btn-md">حفــظ</button>
                        </div>
                      </div>
                    </form>
                    <!-- ... end Personal Information Form  -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="address">
                  <form role="form">
                    <p class="h4 title"> عنوان الطالب</p>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">الشارع 1 </label>
                          <input class="form-control" placeholder="" type="text" name="street_1">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">الشارع 2 </label>
                          <input class="form-control" placeholder="" type="text" name="street_2">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">المدينة</label>
                          <select class="form-control select2" name="city">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">المحلية</label>
                          <select class="form-control select2" name="local">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">رقم المنزل </label>
                          <input class="form-control" placeholder="" type="text" name="home_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn btn-primary btn-md">حفــظ</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="contact">
                  <form role="form">
                    <p class="h4 title"> بيانات الاتصال</p>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">تلفون الطالب </label>
                          <input class="form-control" placeholder="" type="text" name="number_1">
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">تلفون الطواري </label>
                          <input class="form-control" placeholder="" type="text" name="number_2">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> البريد الالكتروني </label>
                          <input class="form-control" placeholder="" type="text" name="email">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn btn-primary btn-md">حفــظ</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="dist">
                  <form role="form">
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">القسم</label>
                          <select class="form-control select2" name="">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">المرحلة التعليمية</label>
                          <select class="form-control select2" name="level_id">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">اسم الصف</label>
                          <select class="form-control select2" name="classroom_id">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> اسم الفصل</label>
                          <select class="form-control select2" name="part_id">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn btn-primary btn-md">حفــظ</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="health">
                  <form role="form">
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> اسم الطبيب </label>
                          <input class="form-control" placeholder="" type="text" name="doctor_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> رقم الطبيب </label>
                          <input class="form-control" placeholder="" type="text" name="doctor_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">فصيل الدم</label>
                          <select class="form-control select2" name="blood_type">
                            <option value="1">الخرطوم</option>
                            <option value="0">انثي</option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">رقم التامين </label>
                          <input class="form-control" placeholder="" type="text" name="insurance_number">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">الحالة الصحية</label>
                          <textarea class="form-control" placeholder="" name="health_status"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn btn-primary btn-md">حفــظ</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="master">
                  <div class="box-body">
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#father" data-toggle="tab">اختيار / اضافة والد</a></li>
                        <li><a href="#mather" data-toggle="tab">اختيار / اضافة والدة</a></li>
                      </ul>
                      <div class="tab-content">
                        <div  class="tab-pane active" id="father">
                          <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">اختيار ولي امر</label>
                                <select class="form-control select2" name="parent">
                                  <option value="1">اب</option>
                                  <option value="0">انثي</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                              <button type="button" data-toggle="modal" data-target="#popup-add-father" class="btn btn-default">اضافة ولي امر جديد</button>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="mather">
                          <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label">اختيار ولي امر</label>
                                <select class="form-control select2" name="parent">
                                  <option value="1">اب</option>
                                  <option value="0">انثي</option>
                                </select>
                              </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                              <button type="button" data-toggle="modal" data-target="#popup-add-mather" class="btn btn-default">اضافة ولي امر جديد</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
      <!-- <div class="box-footer">
          Footer
      </div> -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content modal-content-box">
        <div class="modal-headler">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content modal-content-box -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <!-- Popup  -->
  <div class="modal fade" id="popup-add-father">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-father" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات الوالد</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-3 col-3">
                <div class="form-group">
                  <label class="control-label">التمييز</label>
                  <select class="form-control select2" name="mr_d">
                    <option value="1">السيد /</option>
                    <option value="0">د /</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-9 col-md-9 col-sm-9 col-9">
                <div class="form-group">
                  <label class="control-label"> الاسم </label>
                  <input class="form-control" placeholder="" type="text" name="name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الديانة</label>
                  <select class="form-control select2" name="religion">
                    <option value="CA">الاسلام</option>
                    <option value="TE">المسيحية</option>
                    <option value="TE">اخرى</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الجنسية</label>
                  <select class="form-control select2" name="nationality">
                    <option value="CA">الاسلام</option>
                    <option value="TE">المسيحية</option>
                    <option value="TE">اخرى</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                  <label class="control-label">الرقم الوطني ل ولي الامر</label>
                  <input class="form-control" placeholder="" type="text" name="identifcation_number">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">موهل الوالد </label>
                  <input class="form-control" placeholder="" type="text" name="qualification">
                </div>
              </div>
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">الوظيفة</label>
                  <input class="form-control" placeholder="" type="text" name="job">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">مكان العمل </label>
                  <input class="form-control" placeholder="" type="text" name="work_place">
                </div>
              </div>
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label"> الحالة الاجنماعية </label>
                  <select class="form-control select2" name="martial">
                    <option value="CA">اختيار</option>
                    <option value="TE">المسيحية</option>
                    <option value="TE">اخرى</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">رقم الهاتف</label>
                  <input class="form-control" placeholder="" type="text" name="phone_number">
                </div>
              </div>
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">العنوان</label>
                  <input class="form-control" placeholder="" type="text" name="address_id">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="control-label">البريد الالكتروني</label>
                  <input class="form-control" placeholder="" type="email" name="email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">
                    <input type="checkbox" class="minimal" name="is_die">
                    متوفي 
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
                <button href="#" class="btn btn-primary">اضافة</button>
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
</div>
</template>

<script>

    // import { mapGetters, mapActions } from 'vuex';
    export default {
        mounted() { },
        data(){ return {}},
        methods: {
          // ...mapActions(['addStudent'])
        },
        props: [],
        // computed: { ...mapGetters(['allStudent']) },
        created() {},

    }
</script>