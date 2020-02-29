@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_levels') }}
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
    <h1>تقرير قائمةالفصول <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">المراحل التعلمية</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">تقارير قائمة الفصول   </h3>
            <div class="box-tools pull-right">


            </div>
        </div>
<div class="box-body">
<div class="no-print m-b-10">
    <div class="row">
        <div class="form-group col-sm-4">



            {!! Form::open(['route' => ['report-parts'], 'method' => "GET", 'class' => 'form']) !!}


                {!! Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']) !!}
                {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control form-control col-xs-4  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}"]) !!}


                {!! Form::label('department_id', 'اسم القسم', ['class' => 'control-label']) !!}
                {!! Form::select('department_id', getSelect('departments'), null, ['id' => 'department_id', 'class' => "select2 form-control form-control col-xs-4  {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}"]) !!}



                {!! Form::label('classroom_id', 'الفصل', ['class' => 'control-label']) !!}
                {!! Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control form-control col-xs-4  {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('classroom_id') }}"]) !!}

                {!! Form::label('part_id', 'الصف', ['class' => 'control-label']) !!}
                {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control form-control col-xs-4  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}"]) !!}

                {!! Form::label('gender_id', 'النوع', ['class' => 'control-label']) !!}
                {!! Form::select('gender_id', getGender(), null, ['id' => 'gender_id', 'class' => "select2 form-control form-control col-xs-4  {{ $errors->has('gender_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender_id') }}"]) !!}

                    <BR><BR><BR>
                <div class="form-group">

                <button class="btn btn-success" name="submit">عرض</button>
                <button class="btn btn-primary">طباعة</button>
                {!! Form::close() !!}


            </div>

        </div>
        </div>
    </div>
    @if (isset($_GET['submit']))
    <div class="table-responsive">
        <table class="data table table-striped no-margin">
          <thead>
            <tr>
              <th>#ID</th>
              <th>اسم الطالب</th>
              <th>رقم تسلسل الطالب</th>
              <th>العنوان</th>
              <th>تاريخ الميلاد</th>
              <th>تليفون المنزل</th>
              <th>تاريخ انتهاء الرقم القومي</th>
              <th>وقت المتبقى على الانتهاء</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($std as $student)
                <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->classroom_id}}</td>
                <td>{{$student->level_id}}</td>
                <td>{{$student->birthday}}</td>

            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      @endif

    </div>
            <!-- End Prints buttons -->

        </div>
    </div>
    <!-- /.box -->
    @include('student::students.educations.levels.add')
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



