<template>
  <div>
    <section class="content-header">
      <h1> كل الطلاب <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">كل الطلاب</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">كل الطلاب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form @submit.prevent="searchStudents()" role="form">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12"> 
                <div class="form-group">
                  <label class="control-label">اختيار المرحلة التعليمية</label>
                  <select class="form-control select2" v-model="search.level_id">
                    <option value="" selected="selected">الكل</option>
                    <option 
                      v-for="level in allLevels" 
                      :key="level.id" :value="level.id" 
                      v-text="level.name">
                    </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اختيار الصف</label>
                  <select class="form-control select2" v-model="search.classroom_id">
                    <option value="" selected="selected">الكل</option>
                    <option 
                      v-for="classroom in allClassrooms" 
                      :key="classroom.id" :value="classroom.id" 
                      v-text="classroom.name">
                    </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اختيار الفصل</label>
                  <select class="form-control select2" v-model="search.part_id">
                    <option value="" selected="selected">الكل</option>
                    <option 
                      v-for="part in allParts" 
                      :key="part.id" :value="part.id" 
                      v-text="part.name">
                    </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="form-group">
                  <label class="control-label">النوع</label>
                  <select class="form-control select2"  v-model="search.gender">
                    <option value="" selected="selected">الكل</option>
                    <option
                      v-for="(value, index) in genders" 
                      :key="index" :value="index" 
                      v-text="value">
                    </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <button type="submit" class="btn btn-info">بحــــث</button>
              </div>
            </div>
          </form>
              
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>اسم الطالب</th>
                          <th>اسم المرحلة التعليمية</th>
                          <th>اسم الصف</th>
                          <th>اسم الفصل</th>
                          <th>النوع</th>
                          <th>options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr v-for="student in allStudents" :key="student.id">
                          <td v-text="student.id"></td>
                          <td v-text="student.name"></td>
                          <td v-text="student.level_id"></td>
                          <td v-text="student.classroom_id"></td>
                          <td v-text="student.part_id"></td>
                          <td v-text="student.gender "></td>
                          <td>
                              <div class="btn-group">
                                  <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                  <router-link :to="{name: 'edit-student', params: {id:student.id}}" class="btn btn-info" type="button" data-toggle="modal"><i class="fa fa-pencil"></i></router-link>
                                  <!-- <a class="btn btn-info" @click.prevent="editStusent(student)" type="button" data-toggle="modal"><i class="fa fa-pencil"></i></a> -->
                                  <a class="btn btn-danger confirm" href="#" @click.prevent="deleteStudent(student.id)"> <i class="fa fa-times"></i></a>
                              </div>
                          </td>
                      </tr>
                      <tr>
                        <td v-if="allStudents.length < 1" colspan="7">
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





  </div>
</template>

<script>
    import axios from "axios";
    import { mapGetters, mapActions } from 'vuex';
    import { globalStore } from '../../../helper/general.js';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
          return {
            genders       : globalStore.genders,

            search: {
              level_id      : '',
              classroom_id  : '',
              gender        : '',
              part_id       : ''
            },

            loading: true,
          }
        },

        computed: {
          ...mapGetters(['allLevels', 'allClassrooms', 'allParts', 'allStudents'])
        },

        methods: {
          ...mapActions(['fetchStudents', 'deleteStudent', 'fetchLevels', 'fetchClassrooms', 'fetchParts']),
          searchStudents: function() {
            let self = this;
            self.loading = true;
            let params = Object.assign({}, self.search);
            self.fetchStudents(params).then(function(){self.loading = false;});
          },
        },
        props: [],
        created() {
          let self = this;
          let params = Object.assign({}, self.search)
          self.fetchStudents(params);
          self.fetchLevels();
          self.fetchClassrooms();
          self.fetchParts();
        },
    }
</script>