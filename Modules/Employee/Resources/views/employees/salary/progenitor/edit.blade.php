
@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_payruls') }}
{{ __('home/sidebar.all_payClasses') }}
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
        <li class="active"> {{ __('home/sidebar.edit_payrul') }} {{ $shows->note }} </li>

    <h1>{{ __('home/sidebar.addcalend') }} <small>it all starts here</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li><a href="{{ url('\cpanel\payClass') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.all_payClasses') }} </a></li>
        <li class="active"> {{ __('home/sidebar.addcalend') }} {{ $AddCalendInfo->name }} </li>
>>>>>>> c6964634269fdc9d17c685d6f4ab9d25edf8ea2a
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">

            <h3 class="box-title">اضافة مسمى خصومات او بدلات</h3>

            <h3 class="box-title">{{ __('home/sidebar.addcalend') }}</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">

                {!! Form::model($shows, ['route' => ['progenitors.update', $shows->id], 'method' => "PUT"]) !!}

                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
                                    {!! Form::select('employee_id',  getSelect('employees'), null,['id' => 'employee_id', 'class' => "select2 form-control", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}

                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        {!! Form::label('amount', 'المبلغ', ['class' => 'control-label']) !!}
                                        {!! Form::text('amount', ' ', ['id' => 'amount', 'class' => "select2 form-control", 'value' => "{{ old('amount') }}", 'required', 'autofocus']) !!}
                                    </div>
                                </div>

                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group">

                            {!! Form::label('financial_year', 'السنة المالية', ['class' => 'control-label']) !!}
                            {!! Form::select('financial_year',  getSelect('managaments'),null, ['id' => 'financial_year', 'class' => "select2 form-control"]) !!}

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
                                    {!! Form::label('months_number', 'عدد الشهر', ['class' => 'control-label']) !!}
                                    {!! Form::text('months_number', '', ['id' => 'months_number', 'class' => "form-control", 'value' => "{{ old('months_number') }}", 'required', 'autofocus']) !!}
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">

                                        {!! Form::label('safe_id', 'اسم الخزنة', ['class' => 'control-label']) !!}
                                        {!! Form::select('safe_id',  getSelect('managaments'),null, ['id' => 'safe_id', 'class' => "select2 form-control"]) !!}

                                    </div>
                                </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                    {!! Form::label('note', 'السبب', ['class' => 'control-label']) !!}
                                                    {!! Form::textarea('note', '', ['id' => 'note', 'class' => "form-control", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
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
            <div class="row">
                <div class="col-md-6">
                    {!! Form::model($AddCalendInfo, ['route' => ['add-calend.update', $AddCalendInfo->id], 'method' => "PATCH"]) !!}
                    @include('employee::employees.calends.form')
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

        $('#date').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,
            startDate: 'toDay',
            format: 'yyyy-mm-dd'
        });


        $("input").iCheck({
            checkboxClass: "icheckbox_square-yellow",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });


</script>
@endsection
</script>
@endsection
