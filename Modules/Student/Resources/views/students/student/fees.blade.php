@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_operations') }}
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
  <h1> كل الطلاب <small>  </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active">كل الطلاب</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">كل الطلاب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
            <form  role="form">
              <div class="row">
                {!! Form::hidden('filter', null, ['value' => "{{ old('filter') }}"]) !!}
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12"> 
                  <div class="form-group">
                      {!! Form::label('level_id', 'اختيار المرحلة التعليمية', ['class' => 'control-label']) !!}
                      {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}"]) !!}
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    {!! Form::label('classroom_id', 'اختيار الصف', ['class' => 'control-label']) !!}
                    {!! Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('classroom_id') }}"]) !!}
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    {!! Form::label('part_id', 'اختيار الفصل', ['class' => 'control-label']) !!}
                    {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}"]) !!}
                  </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-6 col-12">
                  <div class="form-group">
                    {!! Form::label('gender', 'النوع', ['class' => 'control-label']) !!}
                    {!! Form::select('gender', getGender(), null, ['id' => 'gender', 'class' => "form-control select2 {{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}"]) !!}
                  </div>
                </div>
                <div class="col col-lg-1 col-md-1 col-sm-12 col-12 m-t-25">
                  <button type="submit" class="btn btn-info">بحــــث</button>
                </div>
              </div>
            </form>
                
            <div class="row">
              <!-- Print Buttons -->
              <div class="no-print">
                  <div class="col-xs-12 m-b-20">
                    <a href="/student/student-reports/operations/printpage" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                    <a type="button" href="/student/student-reports/operations" class="btn btn-success" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> انشاء ملف PDF
                    </a>
                    <a href="/student/student-reports/operations" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                    <a href="/student/student-reports/operations/printpage" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> تصدير اكسل</a>
                  </div>
              </div>
              <!-- End Prints buttons -->
            </div>

            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th>اسم المرحلة التعليمية</th>
                            <th>اسم الصف</th>
                            <th>اسم الفصل</th>
                            <th>الرسوم</th>
                            <th>مدفوع</th>
                            <th>المتبقي</th>
                            <th>{{ __('home/labels.options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($operations as $operation)
                        <tr>
                            {{-- <td>{{ $transaction->id }}</td>
                            <td>{{ transactionStatus()[$transaction->journal->status] }}</td>
                            <td>{{ $transaction->journal->rscType->name }}</td>
                            <td>{{ $transaction->journal->employee->full_name }}</td> 
                            <td>{{ getName('pay_ruls', $transaction->operation->pay_rul_id) }}</td>
                            <td>{{ $transaction->amount }}</td>
                            <td>{{ $transaction->created_at }}</td>
                            <td>{{ $transaction->journal->note }}</td> --}}

                            {{dd($operation->student->level)}}
                          <td>{{ $operation->id }}</td>
                          <td>{{ $operation->student->name }}</td>
                          <td>{{ $operation->student->level->name }}</td>
                          <td>{{ $operation->student->classroom->name }}</td>
                          <td>{{ $operation->student->part->name }}</td>
                          <td>{{ getName('pay_ruls', $operation->pay_rul_id) }}</td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('operations.show',  ['id' => $operation->id]) }}">استعراض</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('operations.edit',  ['id' => $operation->id]) }}">تعديل</a></li>
                                {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('operations.print',  ['id' => $operation->id]) }}">عرض البيانات المالية</a></li> --}}
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('operations.delete',['id' => $operation->id]) }}">حذف</a></li>
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
    {{-- @include('user::operations.add') --}}
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

