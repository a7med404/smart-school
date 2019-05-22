<template>
  <div>
    <section class="content-header">
      <h1>
        طلب تحويل طالب
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"> طلب تحويل طالب </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">طلب تحويل طالب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a type="button" data-toggle="modal" data-target="#popup-add-permission" href="#" class="btn btn-sm btn-info m-t-0 m-b-20">
            <i class="fa fa-check"></i>
            طلب تحويل طالب
          </a>
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>اسم الطالب</th>
                          <th> الجهة المحول لها</th>
                          <th> التاريخ</th>
                          <th>options </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>احمد عبد الله احمد علي</td>
                          <td>مدرسة ابوبكر</td>
                          <td>25/03/2019</td>
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
                          <td> عبد الله احمد علي</td>
                          <td>مدرسة المستقبل</td>
                          <td>25/03/2019</td>
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
    <!-- /.content -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-permission">
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
                  <div class="title"> اختيار الطالب:</div>
                  <fieldset class="form-group">
                    <select class="form-control select2" name="parent" v-model="student_transfer.student_id">
                        <option value="1">احمد عبد الله احمد علي</option>
                        <option value="0">محمد سيد علي السيد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">ياسر عمار محمد ادم</option>
                        <option value="0">هاني عمار محمد ادم</option>
                    </select>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الجهة المحول لها </label>
                    <input name="date" type="text" class="form-control" v-model="student_transfer.transfer_to" />
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">مدة بقائه في المدرسة </label>
                    <input name="date" type="text" class="form-control" v-model="student_transfer.duration" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">موقفه من سداد الرسوم </label>
                    <input name="date" type="text" class="form-control" v-model="student_transfer.payment_status" />
                  </div>
                </div>
              </div>
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

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){ 
          return {
            student_transfer: {
              student_id                      : '',  
              transfer_to                     : '',  
              duration                        : '',
              payment_status                  : ''
            }
          }
        }
    }
</script>