
@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.timetableInfo') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
@endsection
@section('content')


<!-- Main content -->
<section class="content">
    <!-- Default box -->

<section class="content-header">
        <h1>بيانات بنود رسوم الطلاب <small>  </small></h1>
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
                <h3 class="box-title">بيانات بنود رسوم الطلاب</h3>
                <div class="box-tools pull-right">

                </div>



        <div class="box-body">

                        <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم المعلم</th>
                                            <th>اليوم</th>
                                            <th>المادة</th>
                                            <th>رقم الحصة</th>
                                            <th>زمن الحصة</th>
                                        <th>الفصل</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{ $timetableInfo->id }}</td>
                                            <td>{{ $timetableInfo->employee->full_name }}</td>
                                            <td>{{ $timetableInfo->day }}</td>
                                            <td>{{ $timetableInfo->subject->name}}</td>
                                            <td>{{ $timetableInfo->subject_number }}</td>
                                            <td>{{ $timetableInfo->time }}</td>
                                            <td>{{ $timetableInfo->part->name }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->

@stop
@section('footer')
<!-- icheck -->
{!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
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
