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


<section class="content">
    <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            </div>
                    <div class="box-body">
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                          <li class="active"><a href="#department" data-toggle="tab">الادارة</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="department" role="tabpanel" aria-expanded="true">

                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-department" class="btn btn-info m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم الادارة </th>
                                            <th>اسم القسم </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>{{ $departmentInfo->id }}</td>
                                            <td>{{ $departmentInfo->managament_id  }}</td>
                                            <td>{{ $departmentInfo->name  }}</td>
                                          <td>
                                              <div class="dropdown">
                                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                      <span class="fa fa-ellipsis-h"></span>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('departments.show',  ['id' => $departmentInfo->id]) }}"}}>استعراض</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('departments.edit',  ['id' => $departmentInfo->id]) }}">تعديل</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                      <form action="{{ route('departments.destroy',['id' => $departmentInfo->id]) }}" method="post">
                                                          @csrf
                                                          @method('DELETE')
                                                      <button class="btn btn-dsnger btn-xs">حـــذف</button>
                                                      </form>
                                                      </ul>
                                              </div>
                                          </td>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>

                <!-- /.box -->
              </section>

    </div>
    <!-- /.box -->

    @include('employee::employees.managaments.management.add')
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



