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
          <a type="button" data-toggle="modal" data-target="#popup-add-offprint" href="#" class="btn btn-sm btn-info m-t-0">
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
                          <th>date</th>
                          <th>options</th>
                      </tr>
                  </thead>  
                  <tbody>
                    <tr v-for="offprint in allOffPrints" :key="offprint.id">
                        <td v-text="offprint.id"></td>
                        <td v-text="offprint.student_id"></td>
                        <td v-text="offprint.created_at"></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                <a class="btn btn-info" @click.prevent="editOffPrint(offprint)" type="button" data-toggle="modal" data-target="#popup-add-offprint"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger confirm" href="#" @click.prevent="deleteOffPrint(offprint.id)"> <i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                      <td v-if="allOffPrints.length < 1" colspan="6">
                        <div  class="text-center">
                          <p>لا توجد بيانات في هذا الجدول</p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
              </table>
                <div v-if="loading" style="color: #64d6e2" class="la-line-scale">
                  <div></div><div></div><div></div><div></div><div></div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-offprint">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>

          <div class="modal-body">
            <form @submit.prevent = "edit ? toUpdateOffPrint(offprint) : createOffPrint()" role="form">
              <div class="row">
                <!-- <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
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
                </div> -->
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="title"> اختيار الطالب:</div>
                    <fieldset class="form-group">
                    <select class="form-control select2" v-model="offprint.student_id">
                      <option 
                        v-for="student in allStudents" 
                        :key="student.id" :value="student.id" 
                        v-text="student.name" >
                      </option>
                    </select>
                  </fieldset>
                </div>
              </div>
              <input type="hidden" name="type" v-model="offprint.type">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">اضافة</button>
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
import { globalStore } from '../../../helper/general.js';

export default {
  mounted() {
  },

  data(){ 
    return {
      offprint: {
        student_id               : '',  
        type                     : 1
      },

      edit: false,
      loading: true,        
    }
  },

  computed: {
    ...mapGetters(['allOffPrints', 'allStudents'])
  },

  methods: {
    ...mapActions(['addOffPrint', 'deleteOffPrint', 'updateOffPrint', 'fetchOffPrints', 'fetchStudents']),
    searchStudents: function() {
      let self = this;
      let params = Object.assign({}, self.search);
      self.fetchStudents(params);
    },

    createOffPrint: function() {
      let self = this;
      let params = Object.assign({}, self.offprint);
      this.addOffPrint(params).then(function(){
        self.offprint.student_id = '',
        self.offprint.type = 1      
      });
    },

    editOffPrint: function(offprint) {
      let self = this;
      self.edit = true;
      self.offprint.id = offprint.id;
      self.offprint.student_id = offprint.student_id;
      self.offprint.type = 1;
    },

    toUpdateOffPrint: function(offprint) {
      let self = this;
      let params = Object.assign({}, self.offprint);
      self.updateOffPrint(params, offprint).then(function(){
        self.edit = false;
        self.offprint.student_id = '',
        self.offprint.type = 1  
      });
    },
  },

  props: [],

  created() {
    let self = this;
    self.fetchOffPrints(1).then(function(){self.loading = false;});
    let params = Object.assign({}, self.search)
    self.fetchStudents(params);
  },
}
</script>