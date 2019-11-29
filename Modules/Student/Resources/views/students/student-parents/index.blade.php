@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_studentParents') }}
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
  <h1> اولياء الامور <small>  </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active">اولياء الامور</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">اولياء الامور</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i>
            </button>
            <a type="button" data-toggle="modal" data-target="#popup-add-studentParents" href="#" class="btn btn-sm btn-info pull-left">
              <i class="fa fa-plus"></i> اضافة ولي امر جديد
            </a>
          </div>
        </div>

        <div class="box-body">
            <div class="row">
              <!-- Print Buttons -->
              <div class="no-print">
                  <div class="col-xs-12 m-b-20">
                    <a href="/studentParent/print-page/studentParents/printpage" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                    <a type="button" href="/studentParent/print-page/studentParents" class="btn btn-success" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> انشاء ملف PDF
                    </a>
                    <a href="/studentParent/print-page/studentParents" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                    <a href="/studentParent/print-page/studentParents/printpage" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> تصدير اكسل</a>
                  </div>
              </div>
              <!-- End Prints buttons -->
            </div>

            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>الاسم</th>
                            <th>رقم الهاتف</th>
                            <th>الجنسية</th>
                            <th>عدد الطلاب</th>
                            <th>{{ __('home/labels.options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($studentParents as $studentParent)
                        <tr>
                          <td>{{ $studentParent->id }}</td>
                          <td>{{ $studentParent->name }}</td>
                          <td>{{ $studentParent->phone_number }}</td>
                          <td>{{ nationality()[$studentParent->nationality] }}</td>
                          <td>{{ $studentParent->students->count() }}</td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('student-parents.show',  ['id' => $studentParent->id]) }}">استعراض</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('student-parents.edit',  ['id' => $studentParent->id]) }}">تعديل</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('student-parents.edit-auth',['id' => $studentParent->id]) }}">تعديل بيانات الدخول</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('student-parents.delete',['id' => $studentParent->id]) }}">حذف</a></li>
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
    @include('student::students.student-parents.add')
    {{-- @include('student::students.student-parents.add-auth') --}}
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

