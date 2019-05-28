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
                    <th>اسم المخالفة</th>
                    <th>النسبة من الراتب</th>
                    <th>options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>افشاء اسرار المنشأة مما يؤدي احداث اضرار</td>
                  <td>5 %</td>
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
                  <td>عدم إطاعة الأوامر العادية الخاصة بالعمل أو عدم تنفيذ التعليمات الخاصة بالعمل والمعلقة في مكان ظاهر</td>
                  <td>10 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>التواجد دون مبرر في غير مكان العمل أثناء وقت الدوام</td>
                  <td>15 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>التحريض على مخالفة الأوامر والتعليمات الخطية الخاصة بالعمل</td>
                  <td>10 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>	الإهمال أو التهاون في العمل الذي قد ينشأ عنه ضرر في صحة العمال أو سلامتهم أو في المواد أو الأدوات والأجهزة</td>
                  <td>15 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>التشاجر مع الزملاء أو إحداث مشاغبات في محل العمل</td>
                  <td>5 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>مخالفة التعليمات الصحية المعلقة بأمكنة العمل</td>
                  <td>15 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>جمع إعانات أو نقود بدون إذن</td>
                  <td>15 %</td>
                  <td>
                    <div class="btn-group">
                      <router-link :to="{name: 'view-calends', params: {id:23}}" class="btn btn-default"><i class="fa fa-arrows-alt"></i></router-link>
                      <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-calends"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>ترك العمل او الانصراف قبل المواعيد المحددة بدون اذن</td>
                  <td>15 %</td>
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
                  <td>الغياب بدون مبرر مشروع اكثر رمن 20 يوم متقطعه خلال العام او 3 ايام متصلة</td>
                  <td>15 %</td>
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
          <h4 class="title">بيانات المحطة</h4>
        </div>
        <div class="modal-body">
          <!-- Personal Information Form  -->
          <!-- <form role="form" @submit.prevent = "edit ? updatecalends(calends.id) : createcalends()"> -->
          <form role="form">

            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">نوع المخالفة </label>
                  <select class="form-control select2" v-model="calend.type">
                    	<option value="0">--اختر--</option>
                      <option value="1">مخالفات متعلقة بنظام العمل</option>
                      <option value="2">مخالفات متعلقة بسلوك العمل </option>
                      <option value="3">مخالفات متعلقة بمواعيد العمل</option>
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
                <button href="#" class="btn btn-primary">اضافة</button>
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
            calend: {
              id                     : '',
              type                   : '',
              name                   : '',  
              discount_percentage    : '' 
            },

          }
        },
        // methods() {
        //   function onSubmit() {
        //     alert("fghjkl");
        //     let self = this;
        //     let params = Object.assign({}, self.calends);
        //   }
        // }
    }
</script>

