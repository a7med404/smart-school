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
        <h1>تقرير سلف الموظفين  <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">تقرير سلف الموظفين</li>
        </ol>
      </section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">تقرير سلف الموظفين</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <div class="row">
            <div class="col-xs-6">
                <div class="form-group">

                    {!! Form::open(['route' => ['report-warnings.store'], 'method' => "POST", 'class' => 'form']) !!}

                    {!! Form::label('datefrom', 'التاريخ من', ['class' => 'control-label']) !!}
                    {!! Form::date('datefrom', null, ['id' => 'datefrom', 'class' => "form-control  {{ $errors->has('datefrom') ? ' is-invalid' : '' }}", 'value' => "{{ old('datefrom') }}", 'autofocus']) !!}
                    {!! Form::label('dateto', 'التاريخ الى', ['class' => 'control-label']) !!}
                    {!! Form::date('dateto', null, ['id' => 'dateto', 'class' => "form-control  {{ $errors->has('datefrom') ? ' is-invalid' : '' }}", 'value' => "{{ old('dateto') }}", 'autofocus']) !!}
                </div>
            </div>
          </div>
          <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">

                    {!! Form::label('student_id', 'الطالب', ['class' => 'control-label']) !!}
                    {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
                    <BR><BR>
                   {!! Form::submit('بحث',['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
                </div>
            </div>
      <!-- /.box-body -->
          </div>
      </div>
    <!-- /.box -->
  </section>

</div>
@endsection
