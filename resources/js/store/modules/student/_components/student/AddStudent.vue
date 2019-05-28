<template>
<div>
  <section class="content-header">
    <h1> اضافة طالب <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li class="active">اضافة طالب</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">اضافة طالب</h3>
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
                <li><a href="#identifcation" data-toggle="tab">اثبات الشخصية</a></li>
                <li><a href="#dist" data-toggle="tab">توزيع الطالب</a></li>
                <li><a href="#health" data-toggle="tab">الحالة الصحية</a></li>
                <li><a href="#master" data-toggle="tab">بيانات ولي امر الطالب</a></li>
                <li><a href="#attachments" data-toggle="tab">مرفقات الطالب</a></li>
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
                            <input class="form-control" placeholder="" type="text" v-model="student.name">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">النوع</label>
                            <select class="form-control select2"  v-model="student.gender">
                              <option 
                                v-for="(value, index) in genders" 
                                :key="index" :value="index" 
                                v-text="value" 
                                :selected="student.gender == index">
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">الديانة</label>
                            <select class="form-control select2" v-model="student.religion">
                              <option 
                                v-for="(value, index) in religions" 
                                :key="index" :value="index" 
                                v-text="value" 
                                :selected="student.religion == index"> 
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ الميلاد</label>
                            <input type="text" class="form-control" id="birthday" v-model="student.birthday"/>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ الالتحاق</label>
                            <input type="text" class="form-control" id="start_data" v-model="student.start_data"/>
                          </div>
                          </div>
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">العام الدراسي </label>
                            <select class="form-control select2"  v-model="student.start_year">
                              <option value="CA">2013/2014</option>
                              <option value="TE">2014/2015</option>
                              <option value="TE">2015/2016</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label class="control-label">
                              <input type="checkbox" class="minimal" v-model="student.is_staff_son">
                              من ابناء العاملين 
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">ملاحظة</label>
                            <textarea class="form-control" placeholder="" v-model="student.note"></textarea>
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
                    <p class="title"> عنوان الطالب</p>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">الشارع 1 </label>
                          <input class="form-control" placeholder="" type="text" v-model="address.street_1">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">الشارع 2 </label>
                          <input class="form-control" placeholder="" type="text" v-model="address.street_2">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">المدينة</label>
                          <select class="form-control select2" @change="getLocals($event)">
                            <option 
                              v-for="(value, index) in cities" 
                              :key="index" :value="index" 
                              v-text="value" 
                              :selected="address.local == index">
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">المحلية</label>
                          <select class="form-control select2" v-model="address.local" :disabled="disableLocal">
                            <option 
                              v-for="(value, index) in locals" 
                              :key="index" :value="index" 
                              v-text="value" 
                              :selected="address.local == index">
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">رقم المنزل </label>
                          <input class="form-control" placeholder="" type="text" name="home_number" v-model="address.home_number">
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
                    <p class="title"> بيانات الاتصال</p>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">تلفون الطالب </label>
                          <input class="form-control" placeholder="" type="text" v-model="contact.number_1">
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">تلفون الطواري </label>
                          <input class="form-control" placeholder="" type="text" v-model="contact.number_2">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> البريد الالكتروني </label>
                          <input class="form-control" placeholder="" type="text" v-model="contact.email">
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
                <div class="tab-pane" id="identifcation">
                  <form role="form">
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">نوع اثبات الشخصية</label>
                          <select class="form-control select2" v-model="identifcation.type">
                            <option 
                              v-for="(value, index) in identifcation_types" 
                              :key="index" :value="index" 
                              v-text="value" 
                              :selected="identifcation.type == index">
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">رقم اثبات الشخصية </label>
                          <input class="form-control" placeholder="" type="text" name="insurance_number" v-model="identifcation.identifcation_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> تاريخ الانتهاء </label>
                          <input class="form-control" placeholder="" type="text" v-model="identifcation.issue_date">
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> مكان الاستخراج </label>
                          <input class="form-control" placeholder="" type="text" v-model="identifcation.issue_place">
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
                          <label class="control-label">المرحلة التعليمية</label>
                          <select class="form-control select2" name="level_id" v-model="student.level_id">
                            <option value="1">حضانة </option>
                            <option value="0">اساس</option>
                            <option value="0">ثانوي</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">اسم الصف</label>
                          <select class="form-control select2" name="classroom_id" v-model="student.classroom_id">
                            <option value="1">حضانة</option>
                            <option value="0">الاول</option>
                            <option value="1">الثاني</option>
                            <option value="0">الاول</option>
                            <option value="1">الثاني</option>
                            <option value="0">الثالث</option>
                            <option value="1">الرابع</option>
                            <option value="0">الخامس</option>
                            <option value="0">السادس</option>
                            <option value="1">السابع</option>
                            <option value="0">الثامن</option>
                            <option value="0">الاول</option>
                            <option value="1">الثاني</option>
                            <option value="0">الثالث</option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> اسم الفصل</label>
                          <select class="form-control select2" name="part_id" v-model="student.part_id">
                            <option value="1">ابوبكر</option>
                            <option value="0">عمر</option>
                            <option value="1">علي</option>
                            <option value="0">عثمان</option>
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
                          <input class="form-control" placeholder="" type="text" v-model="health.doctor_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> رقم الطبيب </label>
                          <input class="form-control" placeholder="" type="text" v-model="health.doctor_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">فصيل الدم</label>
                          <select class="form-control select2" v-model="health.blood_type">
                            <option 
                                v-for="(value, index) in blood_types" 
                                :key="index" :value="index" 
                                v-text="value" 
                                :selected="health.blood_type == index">
                              </option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">رقم التامين </label>
                          <input class="form-control" placeholder="" type="text" name="insurance_number" v-model="health.insurance_number">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">الحالة الصحية</label>
                          <textarea class="form-control" placeholder="" name="health_status" v-model="health.health_status"></textarea>
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
                                  <option value="1">عباس احمد محمد طاهر</option>
                                  <option value="0">عوض الله عامر محمد الحسن</option>
                                  <option value="1">تامر محمد هاني تمار</option>
                                  <option value="0">شريف عمر ربيع قدورة</option>
                                  <option value="1">ياسر عامر محمد خميس</option>
                                  <option value="0">كمال هاني صديق رؤوف</option>
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
                                  <option value="1">فرحة احمد محمد طاهر</option>
                                  <option value="0">ربا عامر محمد الحسن</option>
                                  <option value="1">روعة محمد هاني تمار</option>
                                  <option value="0">ثويبة عمر ربيع قدورة</option>
                                  <option value="1">فتحية عامر محمد خميس</option>
                                  <option value="0">مرام هاني صديق رؤوف</option>
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

                <div class="tab-pane" id="attachments">
                  <form role="form">
                    <p class="title"> مرفقات الطالب</p>
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                    <label class="control-label"><i class="fa fa-paperclip"></i> تحمل مرفقات </label>
                                    <input class="form-control" placeholder="" type="file" :change="student.name">
                                </div>
                                <p class="help-block">Max. 4MB</p>
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
                  <select class="form-control select2" name="mr_d" v-model="studentparent.mr_d">
                   <option 
                      v-for="(value, index) in mr_ds" 
                      :key="index" :value="index" 
                      v-text="value" 
                      :selected="studentparent.mr_d == index"> 
                   </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-9 col-md-9 col-sm-9 col-9">
                <div class="form-group">
                  <label class="control-label"> الاسم </label>
                  <input class="form-control" placeholder="" type="text" name="name" v-model="studentparent.name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الديانة</label>
                  <select class="form-control select2" name="religion" v-model="studentparent.religion">
                    <option 
                      v-for="(value, index) in religions" 
                      :key="index" :value="index" 
                      v-text="value" 
                      :selected="studentparent.religion == index"> 
                   </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الجنسية</label>
                  <select class="form-control select2" name="nationality" v-model="studentparent.nationality">
                    <option 
                      v-for="(value, index) in nationalities" 
                      :key="index" :value="index" 
                      v-text="value" 
                      :selected="studentparent.nationality == index"> 
                   </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                  <label class="control-label">الرقم الوطني ل ولي الامر</label>
                  <input class="form-control" placeholder="" type="text" name="identifcation_number" v-model="studentparent.identifcation_id">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">موهل الوالد </label>
                  <input class="form-control" placeholder="" type="text" name="qualification" v-model="studentparent.qualification">
                </div>
              </div>
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">الوظيفة</label>
                  <input class="form-control" placeholder="" type="text" name="job" v-model="studentparent.job">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">مكان العمل </label>
                  <input class="form-control" placeholder="" type="text" name="work_place" v-model="studentparent.work_place">
                </div>
              </div>
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label"> الحالة الاجنماعية </label>
                  <select class="form-control select2" name="martial" v-model="studentparent.martial">
                    <option 
                      v-for="(value, index) in martials" 
                      :key="index" :value="index" 
                      v-text="value" 
                      :selected="studentparent.martial == index"> 
                   </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">رقم الهاتف</label>
                  <input class="form-control" placeholder="" type="text" name="phone_number" v-model="studentparent.phone_number">
                </div>
              </div>
              <div class="col col-xl-6 col-lg-6 col-md-6">
                <div class="form-group">
                  <label class="control-label">العنوان</label>
                  <input class="form-control" placeholder="" type="text" name="address_id" v-model="studentparent.address_id">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="control-label">البريد الالكتروني</label>
                  <input class="form-control" placeholder="" type="email" name="email" v-model="studentparent.email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">
                    <input type="checkbox" class="minimal" name="is_die" v-model="studentparent.is_die">
                    متوفي 
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">ملاحظة</label>
                  <textarea class="form-control" placeholder="" name="note" v-model="studentparent.note"></textarea>
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

    import axios from "axios";
    import { mapGetters, mapActions } from 'vuex';
    import { globalStore } from '../../../helper/general.js';
    export default {
        mounted() { },
        computed: {
        },
        data(){ 
          return {
            genders       : globalStore.genders,
            cities        : globalStore.cities,
            religions     : globalStore.religions,
            blood_types   : globalStore.blood_types,
            identifcation_types : globalStore.identifcation_types,
            martials            : globalStore.martials,
            locals : [],

            disableLocal: true,
            city_id: '',
            student: {
              id                     : '',
              name                   : '',  
              gender                 : '',  
              religion               : '',  
              is_partner_son         : '',  
              is_staff_son           : '',  
              birthday               : '',  
              start_data             : '', 
              start_from             : '',
              start_year             : '', 
              note                   : '',
              student_parent_id      : '',
              address_id             : '',
              contact_id             : '',
              level_id               : '',
              classroom_id           : '',
              part_id                : '',
              health_id              : ''
            },

            address: {
              street_1      : '',
              street_2      : '',
              city          : '',
              local         : '',
              home_number   :''
            },

            contact: {
              number_1: '',
              number_2: '',
              email:    ''
            },

            identifcation: {
              type: '',
              identifcation_number: '',
              issue_date: '',
              issue_place: '',
              identable_id: '',
            },

            health: {
              doctor_name: '',
              doctor_number: '',
              blood_type: '',
              insurance_number: '',
              health_status: ''
            },

            studentparent : {
              mr_d                    : '',
              name                    : '',
              religion                : '',     
              relation                : '',     
              nationality             : '',
              identifcation_id        : '',
              qualification           : '', 
              job                     : '',    
              work_place              : '',  
              martial                 : '',
              phone_number            : '',
              address_id              : '',
              email                   : '',
              is_die                  : '',
              note                    : ''
            },
            
          }
        },
        methods: {
          // ...mapActions(['addStudent'])
          getLocals: function(e){
            var self = this;
            self.city_id = e.target.options[e.target.options.selectedIndex].value;
            
            axios.get(`/api/address/loacls/${self.city_id}`)
            .then(function(response){
                self.disableLocal = false,
                self.locals = response.data;
            })
            .catch(function(error){
              self.disableLocal = true,
              console.log(error);
            });
                
          }
        },
        props: [],
        // computed: { ...mapGetters(['allStudent']) },
        created() {
        },

    }
</script>