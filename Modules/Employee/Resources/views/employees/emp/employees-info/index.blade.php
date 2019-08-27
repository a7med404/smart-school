@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_HOME') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
<!-- dataTable -->
{!! Html::style(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.css')) !!}
{!! Html::style(asset('modules/master/plugins/datatables/jquery.dataTables.min.css')) !!}
@endsection
@section('content')

<section class="content-header">
        <h1> الموظفيين <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li><a href="#">شوؤن الموظفيين</a></li>
          <li class="active">الموظفيين</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
                <!-- Default box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">الموظفيين</h3>
              <div class="box-tools pull-right">
                <a type="button" data-toggle="modal" data-target="#popup-add-employee" class="btn btn-info">
                  <i class="fa fa-plus"></i>  اضافة موظف امر جديد
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
                          <th>الوظيفة </th>
                          <th>الشعبة </th>
                          <th>المرحلة</th>
                          <th>options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>محمد ابراهيم ابراهيم السيد</td>
                          <td>معلم </td>
                          <td>اللغة العربية</td>
                          <td>الاساس</td>
                          <td>
                              <div class="btn-group">
                                  <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>عبد الله علي حمد النيل</td>
                          <td>معلم</td>
                          <td>التاريخ</td>
                          <td>الثانوية</td>
                          <td>
                              <div class="btn-group">

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



    <!-- /.box -->
    @include('employee::employees.emp.employees-info.add')
</section>
<!-- /.content -->

@stop
@section('footer')
<!-- icheck -->
{!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
<!-- dataTable -->
{!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}
<script>
    $(document).ready(function () {
        /*
            For iCheck =====================================>
        */
        $("input").iCheck({
            checkboxClass: "icheckbox_square-yellow",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });

</script>
@endsection



