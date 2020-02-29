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
        <h1>اضافة درجات الامتحانات <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">اضافة درجات الامتحانات</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">اضافة درجات الامتحانات</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            {{-- <form role="form" action="" method="GET">
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الموظفين</label>
                    <select id="select" class="form-control" name="full_name">

                  @foreach ($examinations as $name)
                @if ($loop->first)
                <option value="">الكل</option>
                @endif
                  <option>{{$name->type}}</option>
                  @endforeach
                    </select>
                  </div>

                </div>
            </div> --}}
            <div class="row">

               <form action="" method="get">
            <div class="col col-lg-4 col-md-6 col-sm-6 col-6">

                <div class="form-group">
                    {!! Form::label('level_id', 'اسم الفصل', ['class' => 'control-label']) !!}
                    {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}", 'required']) !!}
                </div>
            </div>
        </form>

                {!! Form::open(['route' => ['examinations.store'], 'method' => "POST", 'class' => 'form']) !!}


                        <div class="col col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="form-group">
                                {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
                                {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
                            </div>
                        </div>
                                    <div class="col col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('subject_id', 'المادة', ['class' => 'control-label']) !!}
                                            {!! Form::select('subject_id', getSelect('subjects'), null, ['id' => 'subject_id', 'class' => "form-control select2 {{ $errors->has('subject_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_id') }}", 'required']) !!}
                                        </div>
                                    </div>
                                              <div class="col col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('type', 'نوع الامتحان', ['class' => 'control-label']) !!}
                                                    {!! Form::select('type', examinationType(), null, ['id' => 'type', 'class' => "form-control select2 {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required']) !!}
                                                </div>
                                            </div>


                                            <div class="col col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('employee_id', 'اسم المعلم', ['class' => 'control-label']) !!}
                                                    {!! Form::select('employee_id', getSelect('employees'), (Auth::guard('employee')->user()->id) ? Auth::guard('employee')->user()->id : '' , ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}"]) !!}
                                                </div>
                                            </div>




    @if(isset($_GET['level_id']))

        <div class="row">
        <div class=" col col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>اسم الطالب</th>
                    <th>الدرجة </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
            <tr>
            <td>{{$student->name}}<input type="hidden" name="student_id[]" id=""value="{{$student->id}}" readonly></td>

            <td><input type="text" name="ratio[]" id="ratio" placeholder="درجة الطالب"></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <input class="btn btn-primary" type="submit" value="اضافة درجات">

        @endif

        </div>
        </div>

        {!! Form::close() !!}


    </div>
    <!-- /.box-body -->
</div>

        <!-- /.box -->
      </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function() {
        $('#level_id').change(function() {
            this.form.submit();
        });
    });

</script>

