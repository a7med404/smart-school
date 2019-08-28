@extends('cpanel.layouts.master')
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
<section class="content-header">
    <h1>المراحل التعلمية <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">المراحل التعلمية</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-info">
        <div class="box-body">
            {!! Form::open(['route' => ['attendances.list-show'], 'method' => "get", 'class' => 'form']) !!}
            <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="form-group">
                        {!! Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']) !!}
                        {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}", 'required']) !!}
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="form-group">
                        {!! Form::label('classroom_id', 'اسم الصف', ['class' => 'control-label']) !!}
                        {!! Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('classroom_id') }}", 'required']) !!}
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="form-group">
                        {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
                        {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
                    </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            {!! Form::label('date', 'التاريخ', ['class' => 'control-label']) !!}
                            <div class="input-group">
                                {!! Form::text('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'autofocus']) !!}
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-1 col-md-1 col-sm-1 col-12 m-t-25">
                    <button href="#" class="btn btn-primary">عــرض</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!-- Default box -->
    @if ($students)
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">المراحل التعلمية</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">{{dd($students)}}
            <div class="table-responsive">
                {!! Form::open(['route' => ['attendances.store'], 'method' => "POST", 'class' => 'form']) !!}
                {!! Form::hidden('date', $date, ['id' => 'date', 'class' => " {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}"]) !!}   
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th>حضور</th>
                            {{-- <th>غياب بعذر</th>
                            <th>غياب بدون عذر</th> --}}
                            <th>الصف</th>
                            <th>الفصل</th>
                            {{-- <th>ملاحظة</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>
                                {!! Form::radio("status[$student->id]", 1, 1, ['id' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}"]) !!}   
                                حضور 
                                {{-- {!! Form::label("$student->id", 'حضور', ['class' => 'control-label']) !!} --}}
                            </td>
                            {{-- <td>
                                {!! Form::radio("status[$student->id]", 2, null, ['id' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}"]) !!}   
                                غياب بعذر --}}
                                {{-- {!! Form::label("$student->id", 'غياب بعذر', ['class' => 'control-label']) !!}  --}}
                            {{-- </td> --}}
                            {{-- <td>
                                {!! Form::radio("status[$student->id]", 3, null, ['id' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}"]) !!}   
                                غياب بدون عذر --}}
                                {{-- {!! Form::label("$student->id", 'غياب بدون عذر', ['class' => 'control-label']) !!}  --}}
                            {{-- </td> --}}
                            <td>{{ $student->classroom->name }}</td>
                            <td>{{ $student->part->name }}</td>
                            {{-- <td>{{ $student->note }}</td> --}}
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="text-center">
                                    <p>لا توجد بيانات في هذا الجدول</p>
                                </div>
                            </td>
                        </tr>   
                        @endforelse
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                        <input type="submit" value="حـــفظ" class="btn btn-primary">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {!! Form::close() !!}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
    <!-- /.box -->
    {{-- @include('student::students.students.add') --}}
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
        $('#date').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,
            format: 'yyyy-mm-dd'
        });
        $(".select2").select2();
    });
    $(document).ready(function () {
        $("input").iCheck({
            checkboxClass: "icheckbox_square-yellow",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });

</script>
@endsection



