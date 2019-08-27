@extends('cpanel.layouts.master')
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
    <h1>   طلب اجازة  <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">  طلب اجازة  </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> طلب اجازة </h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-empholiday" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> طلب اجازة
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                            <tr>
                                <th>#ID</th>
                                <th> اسم الموظف </th>
                                <th>التاريخ من </th>
                                <th> التاريخ الي  </th>
                                <th>   نوع الاجازة </th>
                                <th>  ملاحظات </th>
                                <th>option</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $empholidayInfo->id }}</td>
                                    <td>{{ $empholidayInfo->employee_id  }}</td>
                                    <td>{{ $empholidayInfo->from }}</td>
                                    <td>{{ $empholidayInfo->to }}</td>
                                    <td>{{ $empholidayInfo->add_holiday_id  }}</td>
                                    <td>{{ $empholidayInfo->note }}</td>
     
                                    <td>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                <span class="fa fa-ellipsis-h"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('emp-holidays.show',  ['id' => $empholidayInfo->id]) }}"}}>استعراض</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('emp-holidays.edit',  ['id' => $empholidayInfo->id]) }}">تعديل</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                <form action="{{ route('emp-holidays.destroy',['id' => $empholidayInfo->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                <button class="btn btn-dsnger btn-xs">حـــذف</button>
                                                </form>
                                                </ul>
                                        </div>
                                    </td>
                                </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
    @include('employee::employees.calends.add')
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



