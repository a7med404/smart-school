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
    <h1>المراحل التعلمية <small>  </small></h1>
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
            <h3 class="box-title">تقارير مرحلة تعليمية</h3>
            <div class="box-tools pull-right">
            
               
            </div>
        </div>
<div class="box-body">
<div class="no-print m-b-10">
    <div class="row">
        <div class="form-group col-sm-4">

                
                        <h5><b>اسم المرحلة التعليمية<b></h5>
                    <select class="form-control col-xs-4">
                        <option>three</option>
                        <option>three</option>
                        <option>three</option>
        
                    </select>
                
                
                    <h5><b>اسم الصف<b></h5>
                    <select class="form-control col-xs-4">
                        <option>three</option>
                        <option>three</option>
                        <option>three</option>
        
                    </select>
               

                        <h5><b>اسم القسم<b></h5>
                    <select class="form-control col-xs-4">
                        <option>three</option>
                        <option>three</option>
                        <option>three</option>
        
                    </select>
                    
                    <h5><b>الفصول<b></h5>
                        <select class="form-control col-xs-4">
                            <option>three</option>
                            <option>three</option>
                            <option>three</option>
            
                        </select>
                        
                        <h5><b>النوع<b></h5>
                            <select class="form-control col-xs-4">
                                <option>three</option>
                                <option>three</option>
                                <option>three</option>
                
                            </select>
                    <BR><BR><BR>
                <div class="form-group">
                
                <button class="btn btn-success">عرض</button>
                <button class="btn btn-primary">طباعة</button>

            </div>
    
        </div>
        </div>
    </div>
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



