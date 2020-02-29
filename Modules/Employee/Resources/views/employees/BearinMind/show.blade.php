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
    <h1> لوائح المخالفات <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">لوائح المخالفات </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">لوائح المخالفات</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-calend" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة مخالفة جديدة
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الموظف</th>
                            <th> التاريخ</th>
                            <th>ملاحظات</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $examinationInfo->id }}</td>
                                <td>{{ $examinationInfo->student->name }}</td>
                                <td>{{ $examinationInfo->subject->name}}</td>
                                <td>{{ $examinationInfo->type }}</td>
                                <td>{{ $examinationInfo->ratio }}</td>
                                <td>{{ $examinationInfo->employee->full_name }}</td>
                                <td>{{ $examinationInfo->part->name }}</td>




                                <td>{{ $examinationInfo->discount_percentage }}</td>

                            </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
    @include('employee::calends.add')
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



