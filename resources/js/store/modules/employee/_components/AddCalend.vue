<template>
  <div>
  <section class="content-header">
    <h1> اضافة مخالفةالى موظف <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li class="active">اضافة مخالفةالى موظف</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">اضافة مخالفةالى موظف</h3>
        <div class="box-tools pull-right">
          <a type="button" data-toggle="modal" data-target="#popup-add-calends" class="btn btn-info">
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
                    <th>اسم الموظف</th>
                    <th>التاريخ</th>
                    <th>نوع المخالفة</th>
                    <th>options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>محمد ابراهيم ابراهيم السيد</td>
                  <td>22/5/2012</td>
                  <td>التواجد دون مبرر في غير مكان العمل أثناء وقت الدوام</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Description</td>
                  <td>Description</td>
                  <td>Description</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
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
  <div class="modal fade" id="popup-add-calends">
    <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-calends" aria-hidden="true">
      <div class="modal-content modal-content-box">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="title">بيانات </h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <form role="form" @submit.prevent = "edit ? updatecalends(empcalendid) : createcalends()">

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الادارة  </label>
                  <select class="form-control select2" v-model="empcalendroute_id">
                    	<option value="0">الادارة المدرسية</option>
                      <option value="1">الاداره التعليميه</option>
                      <option value="2">ادارة الحسابات </option>
                      <option value="3">مخالفات متعلقة بمواعيد العمل</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم القسم </label>
                  <select class="form-control select2" v-model="empcalendroute_id">
                    	<option value="0">المعلمين</option>
                      <option value="1">مخالفات متعلقة بنظام العمل</option>
                      <option value="2">مخالفات متعلقة بسلوك العمل </option>
                      <option value="3">مخالفات متعلقة بمواعيد العمل</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">نوع المخالفة </label>
                  <select class="form-control select2" v-model="empcalendroute_id">
                    	<option value="0">--اختر--</option>
                      <option value="1">مخالفات متعلقة بنظام العمل</option>
                      <option value="2">مخالفات متعلقة بسلوك العمل </option>
                      <option value="3">مخالفات متعلقة بمواعيد العمل</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> التاريخ </label>
                  <input class="form-control" placeholder="" type="text" v-model="empcalendname">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">
                    <input type="checkbox" class="minimal">
                    التحريض على مخالفة الأوامر والتعليمات الخطية الخاصة بالعمل
                  </label>
                  <label class="control-label">
                    <input type="checkbox" class="minimal">
                    التدخين في الأماكن المحظورة والمعلن عنها للمحافظة على سلامة العمال والمنشأة
                  </label>
                  <label class="control-label">
                    <input type="checkbox" class="minimal">
                    افشاء اسرار المنشأة مما يؤدي احداث اضرار
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary" v-click="onSubmit">اضافة</button>
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
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
        data(){ 
          return {
            edit: false,
            calends: {
              name                   : '',  
              route_id               : '',  
              cost                 : '',  
              study_lang             : '',  
              is_partner_son         : '',  

            },

          }
        },
    }
</script>

