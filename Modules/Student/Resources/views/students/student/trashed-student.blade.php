@extends('cpanelAdmin.layouts.master')
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
  <h1>  الطلاب الذين تم سحب ملفاتهم <small>  </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active"> الطلاب الذين تم سحب ملفاتهم</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"> الطلاب الذين تم سحب ملفاتهم</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
            {{-- <div class="row">
              <!-- Print Buttons -->
              <div class="no-print">
                  <div class="col-xs-12 m-b-20">
                    <a href="/student/student-reports/studentOnlyTrashed/printpage" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                    <a type="button" href="/student/student-reports/students" class="btn btn-success" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> انشاء ملف PDF
                    </a>
                    <a href="/student/student-reports/students" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                    <a href="/student/student-reports/students/printpage" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> تصدير اكسل</a>
                  </div>
              </div>
              <!-- End Prints buttons -->
            </div> --}}

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
                      @forelse($studentTrashed as $student)
                        <tr>
                          <td>{{ $student->id }}</td>
                          <td>{{ $student->name }}</td>
                          <td>{{ $student->level->name }}</td>
                          <td>{{ $student->classroom->name }}</td>
                          <td>{{ $student->part->name }}</td>
                          <td>{{ gender()[$student->gender] }}</td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                              </a>
                              <ul class="dropdown-menu">
                                {{--  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('students.show',  ['id' => $student->id]) }}">استعراض</a></li>  --}}
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('students.restore',  ['id' => $student->id]) }}">استرجاع</a></li>
                                {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li> --}}
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('students.delete',['id' => $student->id]) }}">حذف نهائي</a></li>
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
    <!-- /.box -->
    {{-- @include('user::students.add') --}}
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

