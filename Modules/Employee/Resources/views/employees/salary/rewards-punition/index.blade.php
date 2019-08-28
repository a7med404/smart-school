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
                              <th>السنة التمويلية </th>
                              <th>التاريخ</th>
                              <th>النوع </th>
                              <th>اسم الموظف </th>
                              <th>القيمة </th>
                              <th>السبب</th>
                              <th>الخيارات</th>

                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($rewards as $item)
                          <tr>
                          <td>{{$item->id}}</td>
                              <td> {{$item->finance_year}}</td>
                          <td>{{$item->date}}</td>
                              <td>{{$item->type}}</td>
                              <td>{{$item->employee_id}}</td>
                              <td>{{$item->value}}</td>
                              <td>{{$item->reason}}</td>
                              <td>
                                  <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                          <span class="caret"></span> خيارات
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('rewards-punition.edit',['id' => $item->id])}}">تعديل</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('rewards.delete',['id' => $item->id])}}">حذف</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                          <li role="presentation" class="divider"></li>
                                        </ul>
                                      </div>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                  </table>
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </section>

  <!-- /.box -->
    @include('employee::employees.salary.rewards-punition.add')

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



