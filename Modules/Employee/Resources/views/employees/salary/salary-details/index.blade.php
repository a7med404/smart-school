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
            @include('employee::employees.salary.salary-details.add')
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
    $('#table_id').DataTable({
        // processing: true,
        // serverSide: true,
        // "columnDefs":[
        //   {
        //     "targets":[1, 3, 7],
        //     "orderable":false,
        //   },
        // ],
        "stateSave": false,
        "responsive": true,
        "order": [
            [0, 'desc']
        ],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,
    });
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



