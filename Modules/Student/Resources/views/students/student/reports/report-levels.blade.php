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

                <form action="" method="get">
                    <h5><b>اسم المرحلة التعليمية<b></h5>
                <select class="form-control col-xs-4" name="level">
                    @foreach ($level as $levels)
                    @if ($loop->first)
                    <option>الكل</option>

                    @endif
                    <option value={{$levels->id}}>{{$levels->name}}</option>
                    @endforeach



                </select>


                <h5><b>القسم<b></h5>
                <select class="form-control col-xs-4" name="dept">
                    @foreach ($department as $dept)
                    @if ($loop->first)
                    <option>الكل</option>

                    @endif
                    <option>{{$dept->name}}</option>
                    @endforeach
                </select>


                    <h5><b>النوع<b></h5>

                <select class="form-control col-xs-4" name="gender">

                    <option>الكل</option>

                    <option value="1">ذكر</option>
                    <option value="0">انثى</option>



                </select>
                    <BR><BR><BR>
                <div class="form-group">

                <button name="searching"class="btn btn-success">عرض</button>
                <button class="btn btn-primary">طباعة</button>

            </div>
        </form>
        </div>
        </div>
    </div>
    @if (isset($_GET['searching']))

    <div class="table-responsive">
        <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>النوع</th>
                    <th>اسم القسم</th>
                    <th>اسم الطالب</th>
                    <th>الديانة</th>
                    <th>تاريخ الميلاد</th>
                    <th>اسم الصف</th>
                    <th>اسم الفصل</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $std)
                        <tr>
                        <td>{{$std->id}}</td>
                        <td>{{$std->gender}}</td>
                        <td>{{$std->part->name}}</td>
                        <td>{{$std->name}}</td>
                        <td>{{$std->religion}}</td>
                        <td>{{$std->birthday}}</td>
                        <td>{{$std->classroom->name}}</td>



                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
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



