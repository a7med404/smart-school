@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_students') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
<!-- dataTable -->
{!! Html::style(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.css')) !!}
{!! Html::style(asset('modules/master/plugins/datatables/jquery.dataTables.min.css')) !!}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>عرض قائمة الحضور <small>  </small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
                <li><a href="#">شوؤن تعليمية</a></li>
                <li class="active">المراحل التعلمية</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">عرض قائمة الحضور</h3>
                    <div class="box-tools pull-right">

                    </div>

            <div class="box-body">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th> الحالة</th>
                            <th>التاريخ</th>
                       
                            {{-- <th>ملاحظة</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>{{$attendanceInfo->id}}</td>
                    <td>{{$attendanceInfo->student->name}}</td>
                    <td>{{$attendanceInfo->status}}</td>
                    <td>{{$attendanceInfo->date}}</td>






                    </tr>

                    </tbody>
                </table>




            </div>
                </div>

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
    $(function () {
        $('#issue_date').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,
            format: 'yyyy-mm-dd'
        });
        $(".select2").select2();
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



