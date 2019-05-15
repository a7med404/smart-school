<template>
  <div>
    <section class="content-header">
      <h1>المكافآت والخصومات <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">المكافآت والخصومات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">المكافآت والخصومات</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
                    
            <a type="button" data-toggle="modal" data-target="#popup-add-rewards" href="#" class="btn btn-sm btn-info m-b-20">
              <i class="fa fa-plus"></i> اضافة 
            </a>
            <div class="row">
              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>الادارة </th>
                            <th>اسم القسم </th>
                            <th>اسم الموظف </th>
                            <th>التاريخ </th>
                            <th>القيمة </th>
                            <th>النوع </th>
                            <th>السبب</th>
                            <th>options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ادارة التعليم</td>
                            <td>معلم</td>
                            <td>محمد عبد القادر علي</td>
                            <td>20-12-2018</td>
                            <td>200</td>
                            <td>مكافأة</td>
                            <td>عمل اضافي</td>
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
                            <td>ادارة التعليم</td>
                            <td>معلم</td>
                            <td>علي عبد القادر علي</td>
                            <td>20-12-2018</td>
                            <td>200</td>
                            <td>مكافأة</td>
                            <td>عمل اضافي</td>
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
    <div class="modal fade" id="popup-add-rewards">
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
                    <label class="control-label"> السنة المالية </label>
                    <select class="form-control select2" name="level_id" v-model="rewards_punition.finance_year">
                      <option value="CA">2010</option>
                      <option value="TE">2011</option>
                      <option value="TE">2012</option>
                      <option value="CA">2013</option>
                      <option value="TE">2014</option>
                      <option value="TE">2015</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> التاريخ </label>
                    <input class="form-control" placeholder="" type="text" name="max_student_number" v-model="rewards_punition.date">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الادارة </label>
                    <select class="form-control select2" name="level_id" v-model="rewards_punition.manage_id">
                      <option value="CA">التعلبم</option>
                      <option value="TE">الحسابات</option>
                      <option value="TE">شؤون الموظفين</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم القسم </label>
                    <select class="form-control select2" name="rewards_id" v-model="rewards_punition.dept_id">
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
                    <label class="control-label"> النوع </label>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="type" class="flat-red" v-model="rewards_punition.type" checked> مكافاة
                      </label>
                      <label>
                        <input type="radio" name="type" class="flat-red"> خصم
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> اسم الموظف </label>
                    <select class="form-control select2" name="level_id" v-model="rewards_punition.emp_id">
                      <option value="1">احمد محمد احمد علي</option>
                    <option value="0">عباس الخير عبد الرحمن محمد</option>
                    <option value="1">الفاضل محمد عثمان بلال</option>
                    <option value="0">معتز احمد محمد حنفي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <label class="control-label"> القيمة </label>
                    <input class="form-control" placeholder="" type="text" name="max_student_number" v-model="rewards_punition.value">
                  </div>
                </div> 
              </div>    

              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">السبب</label>
                    <textarea class="form-control" placeholder="" v-model="rewards_punition.reason"></textarea>
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
           rewards_punition:{
              finance_year              : '',
              date                      : '',
              manage_id                 : '',
              dept_id                   : '',
              type                      : '',
              emp_id                    : '',
              value                     : '',
              reason                    : ''
            }    

          }
        },
    }
</script>