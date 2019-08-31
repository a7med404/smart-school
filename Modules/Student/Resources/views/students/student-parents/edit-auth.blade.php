
@extends('cpanel.layouts.master')
@section('title')
بيانات ولي الامر
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
@endsection
@section('content')
<section class="content-header">
    <h1>بيانات ولي الامر <small>{{ $studentParentInfo->name }}</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ route('student-parents.index') }}"><i class="fa fa-dashboard"></i> بيانات ولي الامر </a></li>
        <li class="active"> {{ __('home/sidebar.edit_studentParent') }} {{ $studentParentInfo->name }} </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- Default box -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">تعديل بيانات الدخول</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                            title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <!-- form start -->
                    {!! Form::model($studentParentInfo, ['route' => ['student-parents.edit-auth', $studentParentInfo->id], 'method' => "PATCH"]) !!}
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    {!! Form::label('username', ' اسم المستخدم', ['class' => 'control-label']) !!}
                                    {!! Form::text('username', null, ['id' => 'username', 'class' => "form-control  {{ $errors->has('username') ? ' is-invalid' : '' }}", 'value' => "{{ old('username') }}", 'required', 'autofocus']) !!}
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    {!! Form::label('password', ' كلمة السر الجديدة ', ['class' => 'control-label']) !!}
                                    {!! Form::password('password', ['id' => 'password', 'class' => "form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    {!! Form::label('password_confirmation', ' تاكيد كلمة السر الجديدة ', ['class' => 'control-label']) !!}
                                    {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => "form-control  {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}", 'value' => "{{ old('password_confirmation') }}", 'required', 'autofocus']) !!}
                                </div>
                            </div>
                        </div>
            
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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