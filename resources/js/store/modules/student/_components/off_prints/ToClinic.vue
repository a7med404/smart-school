<template>
  <div>
    <section class="content-header">
      <h1>
        تحويل للمركز الطبي
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"> تحويل للمركز الطبي </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تحويل للمركز الطبي</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a type="button" data-toggle="modal" data-target="#popup-add-permission" href="#" class="btn btn-sm btn-info m-t-0 m-b-20">
            <i class="fa fa-check"></i>
            تحويل للمركز الطبي
          </a>
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>اسم الطالب</th>
                          <th>المستخدم</th>
                          <th>options </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>هاني عمار محمد ادم</td>
                          <td><a href="#" class="">ahmed</a></td>
                          <td>
                              <div class="btn-group">
                                  <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                  <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>ياسر عمار محمد ادم</td>
                          <td><a href="#" class="">shahab</a></td>
                          <td>
                              <div class="btn-group">
                                  <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                  <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                              </div>
                          </td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-permission">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>

          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <fieldset class="form-group">
                    <label class="control-label">اختيار المرحلة التعليمية </label>
                    <select class="form-control select2" name="level_id">
                      <option value="1">رياض اطفال</option>
                      <option value="0">أساس</option>
                      <option value="0">ثانوي</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <fieldset class="form-group">
                    <label class="control-label">اختيار الصف </label>
                    <select class="form-control select2" name="class_id">
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
                  </fieldset>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <fieldset class="form-group">
                    <label class="control-label">اختيار الفصل </label>
                    <select class="form-control select2" name="part_id">
                      <option value="1">ابوبكر</option>
                      <option value="0">عمر</option>
                      <option value="1">علي</option>
                      <option value="0">عثمان</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="title"> اختيار الطالب:</div>
                  <fieldset class="form-group">
                    <select class="form-control select2" name="parent" v-model="off_print.student_id">
                      <option value="1">احمد عبد الله احمد علي</option>
                      <option value="0">محمد سيد علي السيد</option>
                      <option value="1">الفاضل محمد عثمان بلال</option>
                      <option value="0">ياسر عمار محمد ادم</option>
                      <option value="0">هاني عمار محمد ادم</option>
                    </select>
                  </fieldset>
                </div>
              </div>
              <input type="hidden" name="type" value="0" v-model="off_print.type">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
<<<<<<< HEAD
                  <button href="#" class="btn btn-primary">حـــفظ</button>
=======
                  <button href="#" class="btn btn-primary">اضافة</button>
>>>>>>> 67e2e63170d1c2fc91e8ffd6b8ee5b9d8744f07a
                  <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    export default {
        mounted() {
        },
        data(){ 
          return {
            off_print: {
              student_id               : '',  
              employee_id              : '',  
              type                     : ''
            },

            edit: false,
            loading: true,
          }
        },
        computed: {
          ...mapGetters(['allRecords'])
        },
        created() {
          let self = this;
          self.fetchRecords().then(function(){self.loading = false;});
        },
        methods: {
          ...mapActions(['fetchRecords', 'addRecord']),
          createRecord: function() {
          let self = this;
          let params = Object.assign({}, this.record);
          this.addRecord(params).then(function(){
            self.record.student_id = '',
            self.record.employee_id = '',
            self.record.type = ''
          });
        },
        }
    }
</script>