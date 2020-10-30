@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_calends') }}
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
    <h1> تسجيل غياب الموظفين  <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">تسجيل غياب الموظفين  </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> تسجيل غياب الموظفين</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-empabsence" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم الموظف</th>
                      <th> التاريخ من</th>
                      <th> التاريخ الي</th>
                      <th>سبب الغياب</th>
                      <th>{{ __('home/labels.options') }}</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($empabsences as $empabsence)
                    <tr>
                      <td>{{$empabsence->id}}</td>
                      <td>{{$empabsence->employee->full_name}}</td>
                      <td>{{$empabsence->absence_from}}</td>
                      <td>{{$empabsence->absence_to}}</td>
                      <td>{{$empabsence->absence_reason}}</td>
                      <td>
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                            </a>
                            <ul class="dropdown-menu">
                                {{--  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('emp-absences.show',  ['id' => $empabsence->id]) }}" >استعراض</a></li>  --}}
                                <li ro
                                le="presentation"><a role="menuitem" tabindex="-1" href="{{ route('emp-absences.edit',  ['id' => $empabsence->id]) }}" >تعديل</a></li>
                                {{--  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>  --}}
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('emp-absences.delete',['id' => $empabsence->id]) }}">حذف</a></li>
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
    <!-- /.box -->
    @include('employee::employees.EmpAbsence.add')
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


