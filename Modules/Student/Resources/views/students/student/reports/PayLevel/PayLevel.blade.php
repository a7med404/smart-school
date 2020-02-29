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
    <h1>تقرير المدفوعات <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">قرار فصل</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">تقرير المدفوعات حسب المراحل</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-report_separate" href="#" class="btn btn-sm btn-info pull-left">
                    <i class="fa fa-plus"></i> اضافة مرحلة تعليمية
                </a>
            </div>
        </div>
        <div class="box-body">
            <!-- Print Buttons -->
            <div class="no-print m-b-10">
                <div class="row">
                    <div class="form-group col-sm-4">


                        <h5><b>اسم السمتخدم<b></h5>
                    <select class="form-control col-xs-4">
                        @foreach ($role as $rol)
                        <option>{{$rol->name}}</option>
                        @endforeach
                    </select>


                    <h5><b>التاريخ من<b></h5>
                    <input type="date" name="date" class="form-control col-xs-4" >
                    <h5><b>التاريخ الى<b></h5>
                        <input type="date" name="" class="form-control col-xs-4" >


                    <BR><BR><BR>
                <div class="form-group">

                <button class="btn btn-success">عرض</button>
                <button class="btn btn-primary">طباعة</button>

            </div>

        </div>
                </div>
            </div>
            <!-- End Prints buttons -->

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
    $(function () {
        $('#from').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,
            format: 'yyyy-mm-dd'
        });
        $('#to').datepicker({
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



