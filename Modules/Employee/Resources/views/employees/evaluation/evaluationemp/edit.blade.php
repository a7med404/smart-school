
@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_payClasses') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
@endsection
@section('content')
<section class="content-header">
    <h1>{{ __('home/sidebar.evaluationemp') }} <small>it all starts here</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanelAdmin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ url('\cpanelAdmin\payClass') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.all_payClasses') }} </a></li>
        <li class="active"> {{ __('home/sidebar.evaluationemp') }} {{ $evaluationEmpInfo->name }} </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('home/sidebar.evaluationemp') }}</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    {!! Form::model($evaluationEmpInfo, ['route' => ['emp-evaluation.update', $evaluationEmpInfo->id], 'method' => "PATCH"]) !!}
                    @include('employee::employees.evaluation.evaluationemp.form')
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