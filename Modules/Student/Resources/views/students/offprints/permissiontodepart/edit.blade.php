
@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_permissiontodeparts') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
@endsection
@section('content')
<section class="content-header">
    <h1>{{ __('home/sidebar.all_permissiontodeparts') }} </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanelAdmin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ url('\cpanelAdmin\permissiontodeparts') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.all_permissiontodeparts') }} </a></li>
        <li class="active"> {{ __('home/sidebar.edit_permissiontodepart') }} {{ $permissiontodepartInfo->name }} </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('home/sidebar.edit_permissiontodepart') }}</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" date-widget="collapse" data-toggle="tooltip"
                    title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    {!! Form::model($permissiontodepartInfo, ['route' => ['permissiontodepart.update', $permissiontodepartInfo->id], 'method' => "PUT"]) !!}
                    @include('student::students.offprints.permissiontodepart.form')
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
<script>
    $(function () {
        $('#date').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,

            format: 'yyyy-mm-dd'
        });
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
