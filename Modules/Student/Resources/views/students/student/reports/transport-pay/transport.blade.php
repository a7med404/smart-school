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
    <h1>قرار فصل <small>  </small></h1>
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
            <h3 class="box-title">قرار فصل</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>

            </div>
        </div>
        <div class="box-body">
            <!-- Print Buttons -->
            <div class="no-print m-b-10">
                <div class="row">
                    <div class="modal-body">
                        {{-- {!! Form::open(['route' => ['report-warnings.store'], 'method' => "POST", 'class' => 'form']) !!}
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                {!! Form::label('student_id', 'الطالب', ['class' => 'control-label']) !!}
                                {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
                                {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
                            </div>
                        </div>
                    </div>
                    @if(isset($reportWarningInfo))
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                            <button href="#" class="btn btn-primary">حـــفظ</button>
                        </div>
                    </div>

                    @else
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                            <button href="#" class="btn btn-primary">حـــفظ</button>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                            <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div> --}}
            <!-- End Prints buttons -->
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th>اسم التقرير</th>
                            <th>العام الدراسي</th>
                            <th>ملاحظات</th>
                        </tr>
                    </thead>
                    <tbody>

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



