@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_calends') }}
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
    <h1> لوائح المخالفات <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">لوائح المخالفات </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">لوائح المخالفات</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-calend" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة مخالفة جديدة 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم المخالفة</th>
                            <th> نوع المخالفة</th>
                            <th>النسبة من الراتب</th>
                            <th>option</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                            @forelse($calends as $calend)
                            <tr>
                                <td>{{ $calend->id }}</td>
                                <td>{{ $calend->name }}</td>
                                <td>{{ calendType()[$calend->type] }}</td>
                                <td>{{ $calend->discount_percentage }}</td>
 
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <span class="fa fa-ellipsis-h"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('calends.show',  ['id' => $calend->id]) }}"}}>استعراض</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('calends.edit',  ['id' => $calend->id]) }}">تعديل</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('calends.delete',['id' => $calend->id]) }}">حذف</a></li>
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
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
    @include('employee::calends.add')
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



