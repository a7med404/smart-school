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
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $empholidayInfo->id }}</td>
                                    <td>{{ $empholidayInfo->employee->full_name}}</td>
                                    <td>{{ $empholidayInfo->from }}</td>
                                    <td>{{ $empholidayInfo->to }}</td>
                                    <td>{{ $empholidayInfo->add_holiday_id  }}</td>
                                    <td>{{ $empholidayInfo->note }}</td>
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



