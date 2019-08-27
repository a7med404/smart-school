@extends('cpanel.layouts.master')
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
                          <li class="active"><a href="#admins" data-toggle="tab">الادارة</a></li>
                          <li><a href="#department" data-toggle="tab">الاقسام</a></li>
                          {{-- <li><a href="#specialty" data-toggle="tab">التخصصات</a></li> --}}
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="admins" role="tabpanel" aria-expanded="true">
          
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-admins" class="btn btn-info m-t-20 m-b-10">
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
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($managaments as $managament)
                                        <tr class="text-center">
                                            <td>{{ $managament->id }}</td>
                                            <td>{{ $managament->name  }}</td>
                                          <td>
                                              <div class="dropdown">
                                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                      <span class="fa fa-ellipsis-h"></span>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('managaments.show',  ['id' => $managament->id]) }}"}}>استعراض</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('managaments.edit',  ['id' => $managament->id]) }}">تعديل</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                      <form action="{{ route('managaments.destroy',['id' => $managament->id]) }}" method="post">
                                                          @csrf
                                                          @method('DELETE')
                                                      <button class="btn btn-dsnger btn-xs">حـــذف</button>
                                                      </form>
                                                      </ul>
                                              </div>
                                          </td>
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
                                    </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="department" role="tabpanel" aria-expanded="true">
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-department" class="btn btn-info m--20 m-t-20 m-b-10">
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
                                        @forelse($departments as $department)
                                        <tr class="text-center">
                                            <td>{{ $department->id }}</td>
                                            <td>{{ $department->managament_id }}</td>
                                            <td>{{ $department->name  }}</td>
                                          <td>
                                              <div class="dropdown">
                                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                      <span class="fa fa-ellipsis-h"></span>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('departments.show',  ['id' => $department->id]) }}"}}>استعراض</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('departments.edit',  ['id' => $department->id]) }}">تعديل</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                                      <form action="{{ route('departments.destroy',['id' => $department->id]) }}" method="post">
                                                          @csrf
                                                          @method('DELETE')
                                                      <button class="btn btn-dsnger btn-xs">حـــذف</button>
                                                      </form>
                                                      </ul>
                                              </div>
                                          </td>
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
                                    </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
          
                          <div class="tab-pane" id="specialty" role="tabpanel" aria-expanded="true">
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-specialty" class="btn btn-info m-t-20 m-b-10">
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
                                            <th>اسم التخصص </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>مدرس انجليزى</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>وكيل مالى وإدارى</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>وكيل شئون مالية وحسابات</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>مشرف رياض أطفال</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>
          
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.box -->
              </section>
          
    </div>
    <!-- /.box -->
    
    @include('employee::employees.managaments.management.add')
    @include('employee::employees.managaments.department.add')


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



