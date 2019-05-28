<template>
  <div>
    <section class="content-header">
      <h1>المراحل التعلمية <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">المراحل التعلمية</li>
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
                <li><router-link :to="{name: 'test'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب علي الفصول</router-link></li>
                
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
            <h3 class="box-title">المراحل التعلمية</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>

              <a type="button" data-toggle="modal" data-target="#popup-add-level" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة مرحلة تعليمية
              </a>
            </div>
          </div>
          <div class="box-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <select class="form-control select2" @change="filterLevels($event)">
                      <option value="1">1</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم المرحلة التعليمية</th>
                            <th>الترتيب</th>
                            <th>مدير المدرسة</th>
                            <th>ناظر المدرسة</th>
                            <th>options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="level in allLevels" :key="level.id">
                            <td v-text="level.id"></td>
                            <td v-text="level.name"></td>
                            <td v-text="level.sort"></td>
                            <td v-text="level.school_master"></td>
                            <td v-text="level.head_master"><a href="#" class=""></a></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                    <a class="btn btn-info" @click.prevent="editLevel(level)" type="button" data-toggle="modal" data-target="#popup-add-level"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger confirm" href="#" @click.prevent="deleteLevel(level.id)"> <i class="fa fa-times"></i></a>
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
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-level">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form @submit.prevent = "edit ? toUpdateLevel(level) : createLevel()" role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المرحلة التعليمية </label>
                    <input class="form-control" placeholder="" type="text" v-model="level.name">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الترتيب </label>
                    <input class="form-control" placeholder="" type="text" v-model="level.sort">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> مدير المدرسة </label>
                    <input class="form-control" placeholder="" type="text" v-model="level.head_master">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> ناظر المدرسة </label>
                    <input class="form-control" placeholder="" type="text" v-model="level.school_master">
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
      mounted() {
      },
      computed: {
        ...mapGetters(['allLevels'])
      },
      created() {
        let self = this;
        self.fetchLevels();
      },
      data(){
        return {
          level: {
            id:  '',
            name:  '',
            sort: '',
            head_master: '',
            school_master: ''
          },
          edit: false,
        }
      },
      methods:{
        ...mapActions(['fetchLevels', 'addLevel', 'deleteLevel', 'filterLevels', 'updateLevel']),
        createLevel: function() {
          let self = this;
          let params = Object.assign({}, this.level);
          this.addLevel(params).then(function(){
            self.level.name = '',
            self.level.sort = '',
            self.level.head_master = '',            
            self.level.school_master = ''
          });
        },
        editLevel: function(level) {
          let self = this;
          self.edit = true;
          self.level.id = level.id;
          self.level.name = level.name;
          self.level.sort = level.sort;
          self.level.head_master = level.head_master;
          self.level.school_master = level.school_master;
        },

        toUpdateLevel: function(level) {
          let self = this;
          let params = Object.assign({}, self.level);
          self.updateLevel(params, level).then(function(){
          self.edit = false;
            self.level.name = '',
            self.level.sort = '',
            self.level.head_master = '',            
            self.level.school_master = ''
          });
        },
      }
  }
</script>