@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_HOME') }}
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
        <h1>اضافة مسمى خصومات او بدلات <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">اضافة مسمى خصومات او بدلات</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <!-- Default box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اضافة مسمى خصومات او بدلات</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>

                <a type="button" data-toggle="modal" data-target="#popup-add-level" href="#" class="btn btn-sm btn-info pull-left">
                  <i class="fa fa-plus"></i> اضافة
                </a>
              </div>
            </div>
            <div class="box-body">

              <div class="row">
                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                      <thead>
                          <tr>
                              <th>#ID</th>
                              <th>القسم </th>
                              <th>options</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($cuts as $cut)
                          <tr>
                            <td>{{$cut->id}}</td>
                            <td>{{$cut->name}}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <span class="fa fa-ellipsis-h"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('cut-allowances.show',  ['id' => $cut->id]) }}" >استعراض</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('cut-allowances.edit',  ['id' => $cut->id]) }}" >تعديل</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('cut-allowances.delete',['id' => $cut->id]) }}">حذف</a></li>
                                    </ul> 
                                </div>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </section>


    <!-- /.box -->
    @include('employee::employees.cut-allowance.add')
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



