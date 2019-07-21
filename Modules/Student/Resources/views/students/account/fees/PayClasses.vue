<template>
  <div>
    <section class="content-header">
      <h1>رسوم الصفوف  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">رسوم الصفوف </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">رسوم الصفوف </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <a type="button" data-toggle="modal" data-target="#popup-add-formal" href="#" class="btn btn-sm btn-info">
                <i class="fa fa-plus"></i> اضافة
              </a>
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>المرحلة التعليمية</th>
                          <th>اسم الصف</th>
                          <th>انواع الرسوم</th>
                          <th>اجباري </th>
                          <th>القيمة  </th>
                          <th>العام الدراسي</th>
                          <th>options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>اساس</td>
                          <td>الثامن</td>
                          <td>رسوم دراسة</td>
                          <td>اجباري</td>
                          <td>2018-2019</td>
                          <td><a href="#" class="">Description</a></td>
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
                          <td>اساس</td>
                          <td>السابع</td>
                          <td>رسوم زي مدرسي </td>
                          <td>اختياري</td>
                          <td>2018-2019</td>
                          <td><a href="#" class="">Description</a></td>
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
    

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-formal">
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
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">  العام الدراسي </label>
                    <select class="form-control select2" v-model="pay_class.academic_year">
                    <option value="1">الكل</option>
                    <option value="0">2010-2011</option>
                    <option value="0">2011-2012</option>
                    <option value="0">2012-2013</option>
                    <option value="0">2013-2014</option>
                    <option value="0">2014-2015</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اسم المرحلة التعليمية</label>
                      <select class="form-control select2" v-model="pay_class.level_id">
                        <option value="" selected="selected">الكل</option>
                        <option 
                          v-for="level in allLevels" 
                          :key="level.id" :value="level.id" 
                          v-text="level.name">
                        </option>
                      </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اختيار الصف</label>
                    <select class="form-control select2" v-model="pay_class.classroom_id">
                      <option value="" selected="selected">الكل</option>
                      <option 
                        v-for="classroom in allClassrooms" 
                        :key="classroom.id" :value="classroom.id" 
                        v-text="classroom.name">
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">نوع الرسوم</label>
                    <select class="form-control select2" v-model="pay_class.pay_rul_id">
                      <option value="" selected="selected">الكل</option>
                      <option 
                        v-for="pay_rule in allPayRules" 
                        :key="pay_rule.id" :value="pay_rule.id" 
                        v-text="pay_rule.name">
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> القيمة </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="pay_class.value">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">حـــفظ</button>
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
            console.log('Component mounted.')
        },
        data() {
          return {

            pay_class: {
              value               : '',
              pay_rul_id          : '',
              level_id            : '',
              classroom_id        : '',
              academic_year       : ''
            },

            loading: true,
          }
        },

        computed: {
          ...mapGetters(['allPayRules', 'allLevels', 'allClassrooms', 'allStudents'])
        },

        methods: {
          ...mapActions(['fetchPayRules', 'fetchStudents', 'deleteStudent', 'fetchLevels', 'fetchClassrooms']),

        },
        props: [],
        created() {
          let self = this;
          // self.fetchStudents(params).then(function(){self.loading = false;});
          self.fetchLevels();
          self.fetchClassrooms();
          self.fetchPayRules();
        },
    }
</script>