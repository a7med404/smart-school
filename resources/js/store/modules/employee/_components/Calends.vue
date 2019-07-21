<template>
  <div>
  <section class="content-header">
    <h1> لوائح المخالفات <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li class="active">لوائح المخالفات</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">لوائح المخالفات</h3>
        <div class="box-tools pull-right">
          <a type="button" data-toggle="modal" data-target="#popup-add-calend" class="btn btn-info">
            <i class="fa fa-plus"></i> اضافة مخالفة جديد
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
                    <th>اسم المخالفة</th>
                    <th>النسبة من الراتب</th>
                    <th>النسبة من الراتب</th>
                    <th>options</th>
                </tr>
            </thead>  
            <tbody>
                <tr v-for="calend in allCalends" :key="calend.id">
                    <td v-text="calend.id"></td>
                    <td v-text="calend.name"></td>
                    <td v-text="calend.type"></td>
                    <td v-text="calend.discount_percentage"></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                            <a class="btn btn-info" @click.prevent="editCalend(calend)" type="button" data-toggle="modal" data-target="#popup-add-calend"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger confirm" href="#" @click.prevent="deleteCalend(calend.id)"> <i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td v-if="allCalends.length < 1" colspan="6">
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

  </section>


  <!-- Popup  -->
  <div class="modal fade" id="popup-add-calend">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-calend" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات المحطة</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <!-- <form role="form" @submit.prevent = "edit ? updatecalends(calends.id) : createcalends()"> -->
            <form @submit.prevent = "edit ? toUpdateCalend(calend) : createCalend()" role="form">
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">نوع المخالفة </label>
                  <select class="form-control select2" v-model="calend.type">
                    	<option 
                      v-for="(value, index) in calendTypes" 
                      :key="index" :value="index" 
                      v-text="value" 
                      :selected="calend.type == index"> 
                   </option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم المخالفة </label>
                  <input class="form-control" placeholder="" type="text" v-model="calend.name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> نسبة خصم من المرتب </label>
                  <input class="form-control" placeholder="نسبة الخصم من المرتب %" type="text" v-model="calend.discount_percentage">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">حـــفظ</button>
              </div>
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
              </div>
            </div>
          </form>
          <!-- ... end Personal Information Form  -->

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
    import { globalStore } from '../../helper/general.js';

    export default {
      mounted() {
      },
      computed: {
        ...mapGetters(['allCalends'])
      },
      created() {
        let self = this;
        // self.allErrors();
        self.fetchCalends().then(function(){self.loading = false;});
      },
      data(){
        return {
          calendTypes                : globalStore.calendTypes,

          edit: false,
          calend: {
            id                     : '',
            type                   : '',
            name                   : '',  
            discount_percentage    : '',
          },
          loading: true,
        }
      },
      methods:{
        ...mapActions(['fetchCalends', 'addCalend', 'deleteCalend', 'filterCalends', 'updateCalend']),
        createCalend: function() {
          let self = this;
          let params = Object.assign({}, this.calend);
          this.addCalend(params).then(function(){
            self.calend.name = '',
            self.calend.type = '',
            self.calend.discount_percentage = ''        
          });
        },
        editCalend: function(calend) {
          let self = this;
          self.edit = true;
          self.calend.id = calend.id;
          self.calend.name = calend.name;
          self.calend.type = calend.type;
          self.calend.discount_percentage = calend.discount_percentage;
        },

        toUpdateCalend: function(calend) {
          let self = this;
          let params = Object.assign({}, self.calend);
          self.updateCalend(params, calend).then(function(){
            self.edit = false;
            self.calend.name = '',
            self.calend.type = '',
            self.calend.discount_percentage = ''
          });
        },
      }
    }
</script>

