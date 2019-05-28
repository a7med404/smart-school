<template>
  <div>
    <section class="content-header">
      <h1>الفصول التعلمية <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">الفصول التعلمية</li>
      </ol>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="mailbox.html" class="btn btn-primary btn-block margin-bottom">شوؤن تعليمية</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">شوؤن تعليمية</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">


                <li><router-link :to="{name: 'education-classrooms'}"> <i class="fa fa-envelope-o"></i>المراحل التعلمية <span class="label label-primary pull-left">12</span></router-link></li>
                <li><router-link :to="{name: 'classrooms'}"> <i class="fa fa-filter"></i> الصفوف التعلمية</router-link></li>
                <li><router-link :to="{name: 'part-rooms'}"> <i class="fa fa-envelope-o"></i> الفصول التعلمية <span class="label label-primary pull-left">12</span></router-link></li>
                <li><router-link :to="{name: 'dist-students'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب علي الفصول</router-link></li>
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div> -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <!-- Default box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">الفصول التعليمية (1)</h3>
              <div class="box-tools pull-right">
                <a type="button" data-toggle="modal" data-target="#popup-add-classroom" href="#" class="btn btn-sm btn-info pull-left">
                  <i class="fa fa-plus"></i>  اضافة فصل 
                </a>
              </div>
            </div>
          </div>
          <!-- /.box -->
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width" id="table_id">
                <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم المرحلة التعليمية</th>
                      <th>اسم الصف</th>
                      <th>اسم الفصل</th>
                      <th>عدد الطلاب</th>
                      <th>الترتيب</th>
                      <th>options</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="part in allParts" :key="part.id">
                    <td v-text="part.id"></td>
                    <td v-text="part.level_id"></td>
                    <td v-text="part.classroom_id"></td>
                    <td v-text="part.name"></td>
                    <td v-text="part.max_student_number"></td>
                    <td v-text="part.sort"></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                            <a class="btn btn-info" @click.prevent="editLevel(part.id)" type="button" data-toggle="modal" data-target="#popup-add-level"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger confirm" href="#" @click.prevent="deleteLevel(part.id)"> <i class="fa fa-times"></i></a>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-classroom">
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
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <select class="form-control select2" name="part.level_id" v-model="part.level_id">
                      <option 
                        v-for="level in allLevels" 
                        :key="level.id" :value="level.id" 
                        v-text="level.name" 
                        :selected="part.level_id == level.id">
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <select class="form-control select2" name="part.classroom_id" v-model="part.classroom_id">
                      <option 
                        v-for="classroom in allClassrooms" 
                        :key="classroom.id" :value="classroom.id" 
                        v-text="classroom.name" 
                        :selected="part.classroom_id == classroom.id">
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الفصل </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="part.name">
                  </div>
                </div> 
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> عدد الطلاب </label>
                    <input class="form-control" placeholder="" type="text" name="max_student_number" v-model="part.max_student_number">
                  </div>
                </div>   
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الترتيب </label>
                    <input class="form-control" placeholder="" type="text" name="sort" v-model="part.sort">
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
    export default {
      data() {
        return {
          part : {
            id:  '',
            name:  '',
            sort: '',
            max_student_number: '',
            level_id: '',
            classroom_id: '',
          }
        }
      },
      mounted() {
          console.log('Component mounted.')
      },

      computed: {
        ...mapGetters(['allLevels', 'allClassrooms', 'allParts'])
      },
      created() {
        let self = this;
        self.fetchLevels();
        self.fetchClassrooms();
        self.fetchParts();
      },
      methods:{
        ...mapActions(['fetchLevels', 'fetchClassrooms', 'fetchParts']),
      }
    }
</script>