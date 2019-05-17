<template>
  <div>
    <section class="content-header">
      <h1>طلب اجازة <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">طلب اجازة</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">طلب اجازة</h3>
          <div class="box-tools pull-right">
            <a type="button" data-toggle="modal" data-target="#popup-add-classroom" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i> طلب اجازة  
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
                <th>التاريخ من</th>
                <th>التاريخ الي</th>
                <th>نوع الاجازة </th>
                <th>ملاحظات</th>
                <th>options</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td> علي اسامة</td>
                  <td>30/03/2019</td>
                  <td>29/03/2019</td>
                  <td>أجازة الحج والعمرة</td>
                  <td><a href="#" class="">لا يوجد</a></td>
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
                  <td>محمد علي اسامة</td>
                  <td>29/03/2019</td>
                  <td>30/03/2019</td>
                  <td>أجازة الحج</td>
                  <td><a href="#" class="">لا يوجد</a></td>
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
    </section>

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
                    <label class="control-label"> اسم الموظف </label>
                    <select class="form-control select2" name="level_id" v-model="emp_holiday.employee_id">
                    <option value="1">احمد محمد احمد علي</option>
                    <option value="0">عباس الخير عبد الرحمن محمد</option>
                    <option value="1">الفاضل محمد عثمان بلال</option>
                    <option value="0">معتز احمد محمد حنفي</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> نوع الأجازة </label>
                    <select class="form-control select2" name="classroom_id" v-model="emp_holiday.holiday_id">
                      <option value="CA">سنوية</option>
                      <option value="TE">مرضية</option>
                      <option value="TE">طارئة</option>
                      <option value="TE">سفر</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label">الرصيد </label>
                    <input class="form-control" placeholder="" disabled value="10" type="text" name="name_ar" v-model="emp_holiday.balance">
                  </div>
                </div> 
              </div>
              <div class="row"> 
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> التاريخ من  </label>
                    <input class="form-control" placeholder="" value="" type="text" name="name_ar" v-model="emp_holiday.from">
                  </div>
                </div>   
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label">التاريخ الي </label>
                    <input class="form-control" placeholder="" type="text" name="sort" v-model="emp_holiday.to">
                  </div>
                </div> 
              </div>  
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" v-model="emp_holiday.note"></textarea>
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

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){ 
          return {
            edit: false,
           emp_holiday:{
              employee_id                    : '',
              holiday_id                : '',
              balance                   : '',
              from                      : '',
              to                        : '',
              note                      : ''
            }    

          }
        },
    }
</script>