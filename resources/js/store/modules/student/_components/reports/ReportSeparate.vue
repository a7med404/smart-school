<template>
  <div>
    <section class="content-header">
      <h1>قرار فصل  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">قرار فصل </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">قرار فصل </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الطالب</label>
                  <select class="form-control select2" v-model="report_separate.student_id">
                        <option value="1">احمد عبد الله احمد علي</option>
                        <option value="0">محمد سيد علي السيد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">ياسر عمار محمد ادم</option>
                        <option value="0">هاني عمار محمد ادم</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> التاريخ من </label>
                  <input class="form-control" placeholder="" type="text" name="" v-model="report_separate.from">
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> التاريخ الي </label>
                  <input class="form-control" placeholder="" type="text" name="" v-model="report_separate.to">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">ملاحظة</label>
                  <textarea class="form-control" placeholder="" v-model="report_separate.note"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">حـــفظ</button>
                <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
              </div>
            </div>

          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="row">
        <div class="row">
              <!-- Print Buttons -->
              <div class="no-print">
                  <div class="col-xs-12">
                  <a href="/student/print-page/report-separates" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                  <a type="button" href="/student/print-page/report-separates" class="btn btn-success" style="margin-right: 5px;">
                      <i class="fa fa-download"></i> انشاء ملف PDF
                  </a>
                  <a href="/student/print-page/report-separates" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                  </div>
              </div>
              <!-- End Prints buttons -->
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم الطالب</th>
                      <th>اسم التقرير</th>
                      <th>من</th>
                      <th>الي</th>
                      <th>ملاحظات</th>
                      <th>العام الدراسي</th>
                      <th>options</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>محمد عبدالقادر علي</td>
                      <td>قرار فصل</td>
                      <td>20-3-2019</td>
                      <td>30-3-209</td>
                      <td>فصل لمدة اسبوع</td>
                      <td><a href="#" class="">2019-2020</a></td>
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
                      <td>علي عبدالقادر علي</td>
                      <td>قرار فصل</td>
                      <td>20-3-2019</td>
                      <td>30-3-2019</td>
                      <td>فصل لمدة اسبوع</td>
                      <td><a href="#" class="">2019-2020</a></td>
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

  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        },
      data(){ 
          return {
            report_separate: {
              id                       : '',  
              student_id               : '',  
              form                     : '',  
              to                       : '',  
              note                     : ''
            }
          }
        }
    }
</script>