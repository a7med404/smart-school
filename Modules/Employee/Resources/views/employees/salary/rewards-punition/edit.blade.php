
@extends('cpanelAdmin.layouts.master')
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
        <li><a href="{{ url('\cpanelAdmin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ url('\cpanelAdmin\payruls') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.all_payruls') }} </a></li>
        <li class="active"> {{ __('home/sidebar.edit_payrul') }} {{ $rewards->reason }} </li>
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

                {!! Form::model($rewards, ['route' => ['emp-perissions.update', $rewards->id], 'method' => "PUT"]) !!}


                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group">

                            {!! Form::label('finance_year', 'السنة المالية', ['class' => 'control-label']) !!}
                            {!! Form::select('finance_year',  getSelect('managaments'),null, ['id' => 'finance_year', 'class' => "select2 form-control"]) !!}

                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    {!! Form::label('date', 'التاريخ', ['class' => 'control-label']) !!}
                                    <div class="input-group">
                                        {!! Form::text('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
                                    {!! Form::select('employee_id',  getSelect('employees'), null,['id' => 'employee_id', 'class' => "select2 form-control", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}

                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        {!! Form::label('value', 'القيمة', ['class' => 'control-label']) !!}
                                        {!! Form::text('value', 'value', ['id' => 'value', 'class' => "select2 form-control", 'value' => "{{ old('value') }}", 'required', 'autofocus']) !!}
                                    </div>
                                </div>
                                <div class="col col-lg-12 col-md-12 col-sm-6 col-6">

                                        <div class="form-group">
                                                {!! Form::label('type', 'خصم', ['class' => 'control-label']) !!}
                                                {!! Form::radio('type', 0, ['id' => 'type', 'class' => "form-control", 'value' => "{{ old('type') }}", 'required', 'autofocus']) !!}
                                                {!! Form::label('type', 'مكافاة', ['class' => 'control-label']) !!}
                                                {!! Form::radio('type', 1, ['id' => 'type', 'class' => "form-control", 'value' => "{{ old('type') }}", 'required', 'autofocus']) !!}

                                            </div>

                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                    {!! Form::label('reason', 'السبب', ['class' => 'control-label']) !!}
                                                    {!! Form::textarea('reason', '', ['id' => 'reason', 'class' => "form-control", 'value' => "{{ old('reason') }}", 'required', 'autofocus']) !!}
                                                </div>
                                        </div>

                                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                              <button type="submit" class="btn btn-primary">حـــفظ</button>
                                              {!! Form::close() !!}

                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                                            </div>
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
