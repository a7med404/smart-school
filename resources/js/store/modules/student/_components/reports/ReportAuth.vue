<template>
  <div>
    <section class="content-header">
      <h1>عرض بيانات دخول الموقع <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">عرض بيانات دخول الموقع</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">عرض بيانات دخول الموقع</h3>
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
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">بحـــث فـي</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="0">الموظفين</option>
                    <option value="1">اولياء الامر</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">اضافة</button>
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
                    <th>النوع</th>
                    <th>الاسم</th>
                    <th>المستخدم</th>
                    <th>كلمة المرور</th>
                    <th>options</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>ذكر</td>
                      <td>محمد عبد الله </td>
                      <td>mohamed77</td>
                      <td><a href="#" class="">22112012</a></td>
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
                        <td>اثنى</td>
                        <td>رهام كمال الدين عمر</td>
                        <td>reham2</td>
                        <td><a href="#" class="">22321131</a></td>
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
        }
    }
</script>