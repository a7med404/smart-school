<template>
  <div>
    <section class="content-header">
      <h1>الإجازات الرسمية <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">الإجازات الرسمية</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">الإجازات الرسمية</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>

            <a type="button" data-toggle="modal" data-target="#popup-add-formal" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i> اضافة
            </a>
          </div>
        </div>
        <div class="box-body">
                  
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>اسم المناسبة </th>
                          <th>بداية الآجازة</th>
                          <th>نهاية الآجازة</th>
                          <th>options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td><a href="#" class="">عيد الاضحي</a></td>
                          <td><a href="#" class="">10/10/2019</a></td>
                          <td><a href="#" class="">10/10/2019</a></td>
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
                          <td><a href="#" class=""> عيد الفطر المبارك</a></td>
                          <td><a href="#" class="">10/10/2019</a></td>
                          <td><a href="#" class="">25/10/2019</a></td>
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
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم المناسبة </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="formal_holiday.name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> بداية الآجازة </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="formal_holiday.start">
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> نهاية الآجازة </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="formal_holiday.finish">
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
          </div>
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->


  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        },
         data(){ 
          return {
            edit: false,
           formal_holiday:{
              id                      : '',
              name                    : '',
              start                   : '',
              finish                  : ''
            }    

          }
        },
    }
</script>