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
    <h1> طلب اخلاء طرف   <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"> طلب اخلاء طرف </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> طلب اخلاء طرف</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-Trashed" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i>  طلب اخلاء طرف
                </a>
            </div>
        </div>
        <div class="box-body">
            <table id="table_id" class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th> اسم الموظف </th>
                        <th> الادارة </th>
                        <th> القسم </th>
                        <th> عنوان الوضيفة </th>
                        <th>{{ __('home/labels.options') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($employeeTrashed as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->full_name  }}</td>
                        <td>{{ $employee->managament->name  }}</td>
                        <td>{{ $employee->department->name  }}</td>
                        <td>{{ $employee->job_title }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span class="fa fa-ellipsis-h"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('employees.show',  ['id' => $employee->id]) }}">استعراض</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('employees.restore',  ['id' => $employee->id]) }}">استرجاع</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('employees.delete',['id' => $employee->id]) }}">حذف نهائي</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">
                            <div class="text-center">
                                <p>لا توجد بيانات في هذا الجدول</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @include('employee::employees.employee.trashed-employees.add')
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



