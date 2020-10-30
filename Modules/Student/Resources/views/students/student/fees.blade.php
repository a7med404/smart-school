@extends('cpanelAdmin.layouts.master')
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
  <h1> البيانات المالية  <small> {{ $student->name }} </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active">البيانات المالية </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">البيانات المالية </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>

    <div class="box-body">
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

        @forelse($payClasses as $payClass)
        <p>{{ $payClass->payRul->name }} :-</p>
        <div class="table-responsive">
            <table id="" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>#ID</th>
                    <th>الحساب</th>
                    <th>المبلغ المدفوع</th>
                    <th>بواسطة</th>
                    <th>التاريخ</th>
                    <th>ملاحظة</th>
                    <th>{{ __('home/labels.options') }}</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $payed = 0 ;
                    @endphp
                    @forelse($operations as $operation)
                      @if ($operation->pay_class_id == $payClass->id)
                      @php
                          $payed += $operation->transaction->amount
                      @endphp
                        <tr>
                            <td>{{ $operation->id }}</td>
                            <td>{{ $operation->transaction->journal->rscType->name }}</td>
                            <td>{{ $operation->transaction->amount }}</td>
                            <td>{{ $operation->transaction->journal->employee->full_name }}</td>
                            <td>{{ $operation->transaction->journal->date }}</td>
                            <td>{{ $operation->transaction->journal->note }}</td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pay-classes.show',  ['id' => $payClass->id]) }}">استعراض</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pay-classes.edit',  ['id' => $payClass->id]) }}">تعديل</a></li>

                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('pay-classes.delete',['id' => $payClass->id]) }}">حذف</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      @endif
                    @empty
                    <div>
                      <td colspan="7">
                        <div class="text-center">
                          <p>لا توجد بيانات في هذا الجدول</p>
                        </div>
                      </td>
                    </div>
                    @endforelse
                      <tr class="total-bg">
                        <td colspan="2">
                          <div>
                            <p>{{ $payClass->payRul->name .' : '.  $payClass->value }}</p>
                          </div>
                        </td>
                        <td colspan="2">
                          <div>
                            <p>{{ 'المبلغ المدفوع : '.  $payed }}</p>
                          </div>
                        </td>
                        <td colspan="3">
                          <div>
                            <p>{{ 'المبلغ المتبقي : ' }} {{ $payClass->value - $payed }}</p>
                          </div>
                        </td>
                      </tr>
                </tbody>
            </table>
        </div>
        <hr>
        @empty
        <div>
          <td colspan="7">
            <div class="text-center">
              <p>لا توجد بيانات في هذا الجدول</p>
            </div>
          </td>
        </div>
        @endforelse
    </div>
  </div>
  <!-- /.box -->
</section>
<!-- /.content -->

@stop


