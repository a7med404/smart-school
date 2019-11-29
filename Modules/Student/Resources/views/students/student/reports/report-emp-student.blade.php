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
    <h1>عرض ابناء العاملين <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">عرض ابناء العاملين</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">عرض ابناء العاملين</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form  role="form">
                {!! Form::hidden('filter', null, ['value' => "{{ old('filter') }}"]) !!}
                <div class="row">
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12"> 
                        <div class="form-group">
                            {!! Form::label('employee_id', 'اختر موظف', ['class' => 'control-label']) !!}
                            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}"]) !!}
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-2 col-sm-12 col-12 m-t-25">
                        <button type="submit" class="btn btn-info">بحــــث</button>
                    </div>
                </div>
            </form>
                          
            <!-- Print Buttons -->
            <div class="no-print m-b-10">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="/student/student-reports/report-emp-student/printpage" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                        <a type="button" href="/student/student-reports/report-emp-student" class="btn btn-success" style="margin-right: 5px;">
                            <i class="fa fa-download"></i> انشاء ملف PDF
                        </a>
                        <a href="/student/student-reports/report-emp-student" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                    </div>
                </div>
            </div>
            <!-- End Prints buttons -->
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th>اسم المرحلة التعليمية</th>
                            <th>اسم الصف</th>
                            <th>اسم الفصل</th>
                            <th>النوع</th>
                            <th>{{ __('home/labels.options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $object)
                        <tr>
                            <td>{{ $object->id }}</td>
                            <td>{{ $object->name }}</td>
                            <td>{{ $object->level->name }}</td>
                            <td>{{ $object->classroom->name }}</td>
                            <td>{{ $object->part->name }}</td>
                            <td>{{ gender()[$object->gender] }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <span class="fa fa-ellipsis-h"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">استعراض</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('levels.edit',  ['id' => $object->id]) }}">تعديل</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('levels.delete',['id' => $object->id]) }}">حذف</a></li>
                                    </ul>
                                </div>
                            </td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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



