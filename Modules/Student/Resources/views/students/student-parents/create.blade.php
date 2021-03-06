
@extends('cpanelAdmin.layouts.master')
@section('title')
كل الطلاب
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
    <h1>كل الطلاب </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanelAdmin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ route('students.index') }}"><i class="fa fa-dashboard"></i> كل الطلاب </a></li>
        <li class="active"> {{ __('home/sidebar.edit_student') }} </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('home/sidebar.edit_student') }}</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(['route' => ['students.store'], 'method' => "POST", 'class' => 'form']) !!}
                    @include('student::students.student.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
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
        $('#start_data').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,

            format: 'yyyy-mm-dd'
        });
        $('#birthday').datepicker({
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
