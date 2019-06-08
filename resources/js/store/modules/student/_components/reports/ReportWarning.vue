<template>
  <div>
    <section class="content-header">
      <h1>انذار فصل <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">انذار فصل</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">انذار فصل</h3>
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
                  <select class="form-control select2" v-model="report_warning.student_id">
                        <option value="1">الكل</option>
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
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">ملاحظة</label>
                  <textarea class="form-control" placeholder="" v-model="report_warning.note"></textarea>
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
              <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم الطالب</th>
                      <th>اسم التقرير</th>
                      <th>العام الدراسي</th>
                      <th>ملاحظات</th>
                      <th>options</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>عبد الرحمن محمد عادل</td>
                      <td>انذار فصل</td>
                      <td>2019-2020</td>
                      <td><a href="#" class="">انذار فصل</a></td>
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
                      <td>عمر  محمد عادل</td>
                      <td>انذار فصل</td>
2019-2020                      <td><a href="#" class="">انذار فصل</a></td>
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
      <!-- /.box -->
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
            report_warning: {
              id                       : '',  
              student_id               : '',    
              date                     : ''
            }
          }
        }
    }
</script>