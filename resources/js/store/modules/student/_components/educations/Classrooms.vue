<template>
  <div>
    <section class="content-header">
      <h1>الصفوف التعلمية <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active"> الصفوف التعلمية</li>
      </ol>
    </section>

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
                <li><router-link :to="{name: 'education-levels'}"> <i class="fa fa-envelope-o"></i>المراحل التعلمية <span class="label label-primary pull-left">12</span></router-link></li>
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
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <!-- Default box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">الصفوف التعلمية</h3>
              <div class="box-tools pull-right">
                <a type="button" data-toggle="modal" data-target="#popup-add-classroom" href="#" class="btn btn-sm btn-info pull-left">
                  <i class="fa fa-plus"></i>  اضافة صف 
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
                          <th>الترتيب</th>
                          <th>options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr v-for="classroom in allClassrooms" :key="classroom.id">
                          <td v-text="classroom.id"></td>
                          <td v-text="classroom.level_id"></td>
                          <td v-text="classroom.name"></td>
                          <td v-text="classroom.sort"></td>
                          <td>
                              <div class="btn-group">
                                  <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                  <a class="btn btn-info" @click.prevent="editClassroom(classroom)" type="button" data-toggle="modal" data-target="#popup-add-classroom"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#" @click.prevent="deleteClassroom(classroom.id)"> <i class="fa fa-times"></i></a>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form @submit.prevent = "edit ? toUpdateClassroom(classroom) : createClassroom()" role="form"> 
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <select class="form-control select2" v-model="classroom.level_id">
                      <option 
                        v-for="level in allLevels" 
                        :key="level.id" :value="level.id"  :title="level.name + level.id"
                        v-text="level.name" 
                        :selected="classroom.level_id == level.id">
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الترتيب </label>
                    <input class="form-control" placeholder="" type="text" v-model="classroom.sort">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <input class="form-control" placeholder="" type="text" v-model="classroom.name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#"  class="btn btn-primary">اضافة</button>
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
          classroom : {
            id:  '',
            name:  '',
            sort: '',
            level_id: '',
          },
          edit: false,
        }
      },
      mounted() {
          console.log('Component mounted.')
      },

      computed: {
        ...mapGetters(['allLevels', 'allClassrooms'])
      },
      created() {
        let self = this;
        console.log(self.allLevels);
        self.fetchLevels();
        self.fetchClassrooms();
      },
      methods:{
        ...mapActions(['fetchLevels', 'fetchClassrooms', 'addClassroom', 'updateClassroom', 'deleteClassroom']),
        createClassroom: function() {
          let self = this;
          let params = Object.assign({}, self.classroom);
          this.addClassroom(params).then(function(){
            self.classroom.name = '',
            self.classroom.sort = '',
            self.classroom.level_id = ''
          });
        },

        editClassroom: function(classroom) {
          let self = this;
          self.edit = true;
          self.classroom.id = classroom.id;
          self.classroom.name = classroom.name;
          self.classroom.sort = classroom.sort;
          self.classroom.level_id = classroom.level_id;
        },

        toUpdateClassroom: function(classroom) {
          let self = this;
          let params = Object.assign({}, self.classroom);
          self.updateClassroom(params, classroom).then(function(){
            self.edit = false;
            self.classroom.name = '',
            self.classroom.sort = '',
            self.classroom.level_id = ''
          });
        },
      }
    }
</script>