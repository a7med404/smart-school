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
    <h1>العمليات المالية <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">العمليات المالية</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">العمليات المالية</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                {{-- <a type="button" data-toggle="modal" data-target="#popup-add-operation" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> دفع رسوم
                </a> --}}
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>نوع العملية</th>
                            <th>الخزنة</th>
                            <th>المستخدم</th>
                            <th>نوع الرسوم</th>
                            <th>القيمة</th>
                            <th>الوقت و التاريخ</th>
                            <th>ملاحظة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($operations as $operation)
                        <tr>
                            <td>{{ $operation->id }}</td>
                            <td>{{ operationStatus()[$operation->status] }}</td>
                            <td>{{ $operation->rscType->name }}</td>
                            <td>{{ $operation->employee->full_name }}</td>
                            {{-- <td>{{ getName('pay_ruls', $operation->operation->pay_rul_id) }}</td> --}}
                            <td>{{ $operation->payRul->name }}</td>
                            <td>{{ $operation->amount }}</td>
                            <td>{{ $operation->created_at }}</td>
                            <td>{{ $operation->note }}</td>
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



