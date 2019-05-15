<template>
<div>
  <section class="content-header">
    <h1> الموظفيين <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li><a href="#">شوؤن الموظفيين</a></li>
      <li class="active">الموظفيين</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
            <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">الموظفيين</h3>
          <div class="box-tools pull-right">
            <a type="button" data-toggle="modal" data-target="#popup-add-employee" class="btn btn-info">
              <i class="fa fa-plus"></i>  اضافة موظف امر جديد
            </a>
          </div>
        </div>
      </div>
      <!-- /.box -->
      <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم الموظف</th>
                      <th>الوظيفة </th>
                      <th>الشعبة </th>
                      <th>المرحلة</th>
                      <th>options</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>محمد ابراهيم ابراهيم السيد</td>
                      <td>معلم </td>
                      <td>اللغة العربية</td>
                      <td>الاساس</td>
                      <td>
                          <div class="btn-group">
                              <router-link :to="{name: 'view-employee', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                              <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>عبد الله علي حمد النيل</td>
                      <td>معلم</td>
                      <td>التاريخ</td>
                      <td>الثانوية</td>
                      <td>
                          <div class="btn-group">
                              <router-link :to="{name: 'view-employee', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                              <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                          </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>

  </section>



  <!-- Popup  -->
  <div class="modal fade" id="popup-add-employee">
    <div class="modal-dialog modal-lg"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-employee" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات الموظف</h4>
        </div>
        <div class="modal-body">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#info" data-toggle="tab">بيانات عامة</a></li>
                <li><a href="#salary" data-toggle="tab"> اعدادات  الراتب</a></li>
                <li><a href="#address" data-toggle="tab">عنوان الموظف</a></li>
                <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
                <li><a href="#certificats" data-toggle="tab"> الشهادات التعليميه</a></li>
                <li><a href="#auth" data-toggle="tab"> بيانات الدخول</a></li>
              </ul>
              <div class="tab-content">                                                                                                                                                                      
                <div class="tab-pane active" id="info">
                  <p>بيانات عامة:</p>
                    <!-- Personal Information Form  -->
                    <form role="form">
                      <div class="row">
                        <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> اسم الموظف كامل </label>
                            <input class="form-control" placeholder="" type="text" v-model="student.name">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">النوع</label>
                            <select class="form-control select2"  v-model="student.gender">
                              <option value="1">ذكر</option>
                              <option value="0">انثي</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">الديانة</label>
                            <select class="form-control select2" v-model="student.religion">
                              <option value="CA">الاسلام</option>
                              <option value="TE">المسيحية</option>
                              <option value="TE">اخرى</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ الميلاد</label>
                            <input type="text" class="form-control" id="birthday" v-model="student.birthday"/>
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> الرقم القومي / رقم الهوية </label>
                            <input class="form-control" placeholder="" type="text" value="" v-model="student.identifcation_number">
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ انتهاء الرقم القومي / رقم الهوية</label>
                            <input type="text" class="form-control" id="identifcation_expire" v-model="student.identifcation_expire"/>
                          </div>
                        </div>
                      </div>
                  
                      <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">اسم الادارة</label>
                            <select class="form-control select2" v-model="student.start_from">
                              <option value="CA">التعلبم</option>
                              <option value="TE">الحسابات</option>
                              <option value="TE">شؤون الموظفين</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">التخصص</label>
                            <select class="form-control select2"  v-model="student.start_year">
                              <option value="CA">مدرس</option>
                              <option value="TE">موظف</option>
                              <option value="TE">عامل</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ التعيين</label>
                            <input type="text" class="form-control" id="birthday" v-model="student.birthday"/>
                          </div>
                        </div>
                      </div>
                                            
                      <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                                <label class="control-label"> المسمي الوظيفي </label>
                                <input class="form-control" placeholder="" type="text" v-model="student.name">
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> الحالة الاجنماعية </label>
                            <select class="form-control select2" name="martial">
                                <option value="CA">عازب</option>
                                <option value="TE">متزوج</option>
                                <option value="TE">مطلق</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ استلام العمل</label>
                            <input type="text" class="form-control" id="birthday" v-model="student.birthday"/>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">المرحلة الذي الحق به الموظف</label>
                            <select class="form-control select2" v-model="student.start_from">
                              <option value="CA">حضانة</option>
                              <option value="TE">اساس</option>
                              <option value="TE">ثانوي</option>
                            </select>
                          </div>
                        </div>
                          <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">سنة </label>
                            <select class="form-control select2"  v-model="student.start_year">
                              <option value="CA">2013/2014</option>
                              <option value="TE">2014/2015</option>
                              <option value="TE">2015/2016</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                    <label class="control-label"><i class="fa fa-paperclip"></i> الصىورة الشخصية </label>
                                    <input class="form-control" placeholder="" type="file" :change="student.name">
                                </div>
                                <p class="help-block">Max. 4MB</p>
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
                    <p class="title"> عنوان الموظف</p>
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
                          <select class="form-control select2" v-model="address.city">
                            <option value="1">الخرطوم</option>
                            <option value="0">بحري</option>
                            <option value="0">امدرمان</option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">المحلية</label>
                          <select class="form-control select2" v-model="address.local">
                            <option value="1">الخرطوم</option>
                            <option value="0">جبل اولياء</option>
                            <option value="1">شرق النيل</option>
                            <option value="0">امدرمان</option>
                            <option value="0">كرري</option>
                            <option value="0">الثورة</option>
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
                    <p class="title"> بيانات الاتصال</p>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">تلفون الموظف </label>
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
                <div class="tab-pane" id="certificats">
                  <form role="form">
                    <p class="title"> الشهادات التعليميه</p>
                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> اسم المؤهل </label>
                          <input class="form-control" placeholder="" type="text" v-model="health.doctor_name">
                        </div>
                      </div>
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> جهة الحصول علي المؤهل  </label>
                          <input class="form-control" placeholder="" type="text" v-model="health.doctor_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> النوع </label>
                          <select class="form-control select2" v-model="health.blood_type">
                            <option value="1">بكالوريوس</option>
                            <option value="0">دبلوم</option>
                            <option value="1">بكالوريوس شرف</option>
                            <option value="0"> دبلوم عالي</option>
                            <option value="1"> ماجستير</option>
                            <option value="0"> دكتوراة </option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">التحصص</label>
                          <input class="form-control" placeholder="" type="text" name="insurance_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> التقدير </label>
                          <select class="form-control select2" v-model="health.blood_type">
                            <option value="1">امتياز</option>
                            <option value="0">جيد جدا</option>
                            <option value="1">جيد</option>
                            <option value="0">مقبول </option>
                          </select>
                        </div>
                      </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                            <label class="control-label">تاريخ الحصول المؤهل</label>
                            <input type="text" class="form-control" id="birthday" v-model="student.birthday"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> عدد سنوات الخبرة </label>
                          <select class="form-control select2" v-model="health.blood_type">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="1">3</option>
                            <option value="2">اكثر</option>
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
                <div class="tab-pane" id="salary">
                  <form role="form">
                    <p class="title"> اعدادات  الراتب</p>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">  الراتب الاساسي  </label>
                            <input class="form-control" placeholder="" type="text" v-model="student.name">
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
                <div class="tab-pane" id="auth">
                  <form role="form">
                    <p class="title"> بيانات الدخول</p>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> اسم المستخدم  </label>
                            <input class="form-control" placeholder="" type="text" v-model="student.name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> كلمة المرور</label>
                            <input class="form-control" placeholder="" type="password" v-model="student.name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> تاكيد كلمة المرور</label>
                            <input class="form-control" placeholder="" type="password" v-model="student.name">
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
      </div>
    </div>
  </div>
  <!-- ... end Popup  -->
</div>
</template>

<script>

    import { mapGetters, mapActions } from 'vuex';
    export default {
        mounted() { },
        data(){ 
          return {
            student: {
              name                   : '',  
              religion               : '',  
              gender                 : '',  
              study_lang             : '',  
              is_partner_son         : '',  
              is_staff_son           : '',  
              identifcation_number   : '',  
              identifcation_expire   : '',  
              birthday               : '',  
              start_data             : '', 
              start_from             : '',
              start_year             : '', 
              note                   : '',
              student_parent_id      : '',
              study_language_id      : '',
              address_id             : '',
              contact_id             : '',
              level_id               : '',
              classroom_id           : '',
              part_id                : ''
            },

            address: {
              street_1 : '',
              street_2 : '',
              city : '',
              local : ''
            },

            contact: {
              number_1: '',
              number_2: '',
              email: ''
            },

            health: {
              doctor_name: '',
              doctor_number: '',
              blood_type: '',
              insurance_number: '',
              health_status: ''
            },
            
          }
        },
        methods: {
          // ...mapActions(['addStudent'])
        },
        props: [],
        // computed: { ...mapGetters(['allStudent']) },
        created() {},

    }
</script>