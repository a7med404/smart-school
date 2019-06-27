<template>
<div>
  <section class="content-header">
    <h1> اضافة موظف <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li class="active">اضافة موظف</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">اضافة موظف </h3>
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
              <ul class="nav pull-right nav-tabs">
                <li class="active"><a href="#info" data-toggle="tab">بيانات عامة</a></li>
                <li><a href="#salary" data-toggle="tab"> اعدادات  الراتب</a></li>
                <li><a href="#address" data-toggle="tab">عنوان الموظف</a></li>
                <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
                <li><a href="#identifcation" data-toggle="tab">اثبات الشخصية</a></li>
                <li><a href="#certificats" data-toggle="tab"> الشهادات التعليميه</a></li>
                <li><a href="#attachments" data-toggle="tab">مرفقات </a></li>
                <li><a href="#auth" data-toggle="tab"> بيانات الدخول</a></li>
              </ul>
              <div class="tab-content">                                                                                                                                                                      
                <div class="tab-pane active" id="info">
                  <p>بيانات عامة:</p>
                    <!-- Personal Information Form  -->
                    <form role="form">
                      <div class="row">
                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> اسم الموظف كامل </label>
                            <input class="form-control" placeholder="" type="text" v-model="employee.full_name">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">النوع</label>
                            <select class="form-control select2"  v-model="employee.gender">
                              <option 
                                v-for="(value, index) in genders" 
                                :key="index" :value="index" 
                                v-text="value" 
                                :selected="employee.gender == index"> 
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">الديانة</label>
                            <select class="form-control select2" v-model="employee.religion">
                              <option 
                                v-for="(value, index) in religions" 
                                :key="index" :value="index" 
                                v-text="value" 
                                :selected="employee.religion == index"> 
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ الميلاد</label>
                            <input type="text" class="form-control" id="birthday" v-model="employee.birth_date"/>
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">اسم الادارة</label>
                            <select class="form-control select2" v-model="employee.managament_id">
                              <option value="CA">التعلبم</option>
                              <option value="TE">الحسابات</option>
                              <option value="TE">شؤون الموظفين</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">التخصص</label>
                            <select class="form-control select2"  v-model="employee.department_id">
                              <option value="CA">مدرس</option>
                              <option value="TE">موظف</option>
                              <option value="TE">عامل</option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ التعيين</label>
                            <input type="text" class="form-control" id="birthday" v-model="employee.hiring_date"/>
                          </div>
                        </div>
                      </div>
                                            
                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                                <label class="control-label"> المسمي الوظيفي </label>
                                <input class="form-control" placeholder="" type="text" v-model="employee.job_title">
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> الحالة الاجنماعية </label>
                            <select class="form-control select2" name="martial" v-model="employee.martial_status">
                                <option 
                                v-for="(value, index) in martials" 
                                :key="index" :value="index" 
                                v-text="value" 
                                :selected="employee.martial_status == index"> 
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">تاريخ استلام العمل</label>
                            <input type="text" class="form-control" id="birthday" v-model="employee.start_date"/>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">المرحلة الذي الحق به الموظف</label>
                            <select class="form-control select2" v-model="employee.emploee_level">
                              <option value="CA">حضانة</option>
                              <option value="TE">اساس</option>
                              <option value="TE">ثانوي</option>
                            </select>
                          </div>
                        </div>
                          <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">سنة </label>
                            <select class="form-control select2"  v-model="employee.join_year">
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
                                <div class="btn btn-default btn-file">
                                    <label class="control-label"><i class="fa fa-paperclip"></i> الصىورة الشخصية </label>
                                    <input class="form-control" placeholder="" type="file" :change="employee.picture">
                                </div>
                                <p class="help-block">Max. 4MB</p>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label">ملاحظة</label>
                            <textarea class="form-control" placeholder="" v-model="employee.note"></textarea>
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
                          <input class="form-control" placeholder="" type="text" v-model="address.home_number">
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
                          <input class="form-control" placeholder="" type="text" v-model="health.insurance_number">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> تاريخ الانتهاء </label>
                          <input class="form-control" placeholder="" type="text" v-model="health.doctor_name">
                        </div>
                      </div>
                      <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> مكان الاستخراج </label>
                          <input class="form-control" placeholder="" type="text" v-model="health.doctor_number">
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
                          <input class="form-control" placeholder="" type="text" v-model="certificate.name">
                        </div>
                      </div>
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> جهة الحصول علي المؤهل  </label>
                          <input class="form-control" placeholder="" type="text" v-model="certificate.Applicant">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> النوع </label>
                          <select class="form-control select2" v-model="certificate.type" >
                            <option 
                              v-for="(value, index) in certificateTypes" 
                              :key="index" :value="index" 
                              v-text="value" 
                              :selected="certificate.type == index">
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label">التحصص</label>
                          <input class="form-control" placeholder="" type="text" name="insurance_number" v-model="certificate.major">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> التقدير </label>
                          <select class="form-control select2" v-model="certificate.degree">
                           <option 
                              v-for="(value, index) in certificateDegrees" 
                              :key="index" :value="index" 
                              v-text="value" 
                              :selected="certificate.degree == index">
                            </option>
                          </select>
                        </div>
                      </div>
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                            <label class="control-label">تاريخ الحصول المؤهل</label>
                            <input type="text" class="form-control" id="birthday" v-model="certificate.qualification_date"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="form-group">
                          <label class="control-label"> عدد سنوات الخبرة </label>
                          <select class="form-control select2" v-model="certificate.experience_years">
                           <option 
                              v-for="(value, index) in experience_years" 
                              :key="index" :value="index" 
                              v-text="value" 
                              :selected="certificate.experience_years == index">
                            </option>
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
                            <input class="form-control" placeholder="" type="text" v-model="salary.basic_salary">
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
                    <p class="title"> اعدادات  </p>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> اسم المستخدم  </label>
                            <input class="form-control" placeholder="" type="text" >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> كلمة المرور</label>
                            <input class="form-control" placeholder="" type="password" >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="form-group">
                            <label class="control-label"> تاكيد كلمة المرور</label>
                            <input class="form-control" placeholder="" type="password" >
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
                <div class="tab-pane" id="attachments">
                  <form role="form">
                    <p class="title"> مرفقات الموظف</p>
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                    <label class="control-label"><i class="fa fa-paperclip"></i> تحمل مرفقات </label>
                                    <input class="form-control" placeholder="" type="file" :change="attachments">
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

</div>
</template>

<script>

    import { mapGetters, mapActions } from 'vuex';
    import { globalStore } from '../../../helper/general.js';
    export default {
        mounted() { },
        data(){ 
          return {
            genders                : globalStore.genders,
            cities                 : globalStore.cities,
            locals                 : globalStore.locals,
            identifcation_types    : globalStore.identifcation_types,
            blood_types            : globalStore.blood_types,
            mr_ds                  : globalStore.mr_ds,
            religions              : globalStore.religions,
            nationalities          : globalStore.nationalities,
            martials               : globalStore.martials,
            certificateTypes       : globalStore.certificateTypes,
            certificateDegrees     : globalStore.certificateDegrees,    
            experience_years       : globalStore.experience_years,
            locals : [],         
            edit: false,
<<<<<<< HEAD

            attachments: [],
=======
>>>>>>> 67e2e63170d1c2fc91e8ffd6b8ee5b9d8744f07a

            disableLocal: true,
            

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
             employee: {
              full_name:                 '',
              gender:                    '',
              religion:                  '',
              birth_date:                '',
              identification_number:     '',
              managament_id:                 '',
              department_id:                   '',
              hiring_date:               '',
              job_title:                 '',
              martial_status:            '',
              start_date:                '',
              blood_type:                '',
              emploee_level:             '',
              join_year:                 '',
              picture:                   '',
              note:                      ''
            },
            certificate : {
              id                     : '',
              name                   : '',
              Applicant              : '',
              type                   : '',
              major                  : '',
              degree                 : '',
              qualification_date     : '',
              experience_years       : '',
              employee_id            : ''
            },
            salary : {
              basic_salary           : ''
            },

            identifcation: {
              type: '',
              identifcation_number: '',
              issue_date: '',
              issue_place: '',
<<<<<<< HEAD
              identifcationable_id: '',
=======
              identable_id: '',
>>>>>>> 67e2e63170d1c2fc91e8ffd6b8ee5b9d8744f07a
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