
@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.Infos') }}
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
                                            <th>اسم البند</th>
                                            <th>الحالة</th>
                                            <th>ملاحظات</th>
                                            <th>{{ __('home/labels.options') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{ $Infos->id }}</td>
                                            <td>{{ $Infos->name }}</td>
                                            <td>{{ $Infos->is_mandatary }}</td>
                                            <td>{{ $Infos->note }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                        <span class="fa fa-ellipsis-h"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pay_rules.show',  ['id' => $Infos->id]) }}">استعراض</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pay_rules.edit',  ['id' => $Infos->id]) }}">تعديل</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('pay_rules.destroy',['id' => $Infos->id]) }}">حذف</a></li>
                                                    </ul>
                                                </div>
                                            </td>
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
