
@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_payruls') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
@endsection
@section('content')
<section class="content-header">
    <h1>{{ __('home/sidebar.all_payruls') }} <small>it all starts here</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ url('\cpanel\payruls') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.all_payruls') }} </a></li>
        <li class="active"> {{ __('home/sidebar.edit_payrul') }} {{ $shows->name }} </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اضافة مسمى خصومات او بدلات</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                    {!! Form::model($shows, ['route' => ['emp-perissions.update', $shows->id], 'method' => "PUT"]) !!}

                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="form-group">
                                {!! Form::label('name', 'اسم الادارة', ['class' => 'control-label']) !!}
                                {!! Form::select('managament_id', getSelect('managaments'), ['id' => 'managament_id', 'class' => "form-control  {{ $errors->has('managament_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('managament_id') }}", 'required', 'autofocus']) !!}

                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('name', 'اسم القسم', ['class' => 'control-label']) !!}
                                    {!! Form::select('department_id', getSelect('managaments'), ['id' => 'department_id', 'class' => "form-control  {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required', 'autofocus']) !!}

                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'اسم الموظف', ['class' => 'control-label']) !!}
                                        {!! Form::select('employee_id', getSelect('managaments'), ['id' => 'employee_id', 'class' => "form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'الاذونات', ['class' => 'control-label']) !!}
                                            {!! Form::select('perission_id', getSelect('managaments'), ['id' => 'perission_id', 'class' => "form-control  {{ $errors->has('perission_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('perission_id') }}", 'required', 'autofocus']) !!}

                                        </div>
                                    </div>
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('name', 'من الساعة', ['class' => 'control-label']) !!}
                                    {!! Form::time('from_hour', null, ['id' => 'from_hour', 'class' => "form-control  {{ $errors->has('from_hour') ? ' is-invalid' : '' }}", 'value' => "{{ old('from_hour') }}", 'required', 'autofocus']) !!}

                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'الى الساعة', ['class' => 'control-label']) !!}
                                        {!! Form::time('to_hour', null, ['id' => 'to_hour', 'class' => "form-control  {{ $errors->has('to_hour') ? ' is-invalid' : '' }}", 'value' => "{{ old('to_hour') }}", 'required', 'autofocus']) !!}

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'التاريخ', ['class' => 'control-label']) !!}
                                            {!! Form::date('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}

                                        </div>
                                    </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-6 col-6">
                            <div class="form-group">
                                {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
                                {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
                            </div>
                        </div>

                    </div>



                    <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                <button href="#" class="btn btn-primary">حـــفظ</button>
                            </div>
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
