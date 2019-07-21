<template>
  <div>
    <section class="content-header">
      <h1>اذونات الموظفين <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">اذونات الموظفين</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">اذونات الموظفين</h3>
          <div class="box-tools pull-right">
            <a type="button" data-toggle="modal" data-target="#popup-add-classroom" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i> اضافة  
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
                  <th>من</th>
                  <th>الي</th>
                  <th>الاذونات</th>
                  <th>خصم</th>
                  <th>ملاحظات</th>
                  <th>options</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>محمد عبد القادر علي</td>
                    <td>20-12-2018</td>
                    <td>20-12-2018</td>
                    <td>23-12-2018</td>
                    <td>اذن مرضي</td>
                    <td>100</td>
                    <td><a href="#" class="">سحب ارنيك مرضي</a></td>
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
                    <td>علي عبد القادر علي</td>
                    <td>20-12-2018</td>
                    <td>20-12-2018</td>
                    <td>23-12-2018</td>
                    <td>اذن مرضي</td>
                    <td>100</td>
                    <td><a href="#" class="">سحب ارنيك مرضي</a></td>
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
                    <label class="control-label">اسم الادارة</label>
                    <select class="form-control select2" name="level_id" v-model="emp_perission.managament_id">
                      <option value="CA">التعلبم</option>
                      <option value="TE">الحسابات</option>
                      <option value="TE">شؤون الموظفين</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم القسم </label>
                    <select class="form-control select2" name="classroom_id" v-model="emp_perission.department_id">
                      <option value="CA">اداري</option>
                      <option value="TE">معلم</option>
                      <option value="TE">عامل</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الموظف </label>
                    <select class="form-control select2" name="level_id" v-model="emp_perission.employee_id">
                    <option value="1">احمد محمد احمد علي</option>
                    <option value="0">عباس الخير عبد الرحمن محمد</option>
                    <option value="1">الفاضل محمد عثمان بلال</option>
                    <option value="0">معتز احمد محمد حنفي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الاذونات </label>
                    <select class="form-control select2" name="classroom_id" v-model="emp_perission.perission_id">
                      <option value="CA">اذن وفاة</option>
                      <option value="TE">اذن مرض</option>
                      <option value="TE">اذن طارئ</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row"> 
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> من الساعة </label>
                    <input class="form-control" placeholder="" value="10" type="text" name="name" v-model="emp_perission.from_hour">
                  </div>
                </div>   
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> الي الساعة </label>
                    <input class="form-control" placeholder="" type="text" name="sort" v-model="emp_perission.to_hour">
                  </div>
                </div> 
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> التاريخ </label>
                    <input class="form-control" placeholder="" type="text" name="max_student_number" v-model="emp_perission.date">
                  </div>
                </div>
              </div>  
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" v-model="emp_perission.note"></textarea>
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
           emp_perission:{
              id                                 : '',
              managament_id                      : '',
              department_id                      : '',
              employee_id                        : '',
              perission_id                       : '',
              from_hour                          : '',
              to_hour                            : '',
              date                               : '',
              note                               : ''
            }    

          }
        },
    }
</script>