@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_EmpAbsence') }}
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
        <h1>تسجيل غياب الموظفين <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">تسجيل غياب الموظفين</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">تسجيل غياب الموظفين</h3>
            <div class="box-tools pull-right">
              <a type="button" data-toggle="modal" data-target="#popup-add-progenitor" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i>  اضافة
              </a>
            </div>
          </div>
        </div>
        <!-- /.box -->
        <div class="row">
          <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                <tr>
                    <th>#ID</th>
                    <th>اسم الموظف</th>
                    <th> التاريخ من</th>
                    <th> التاريخ الي</th>
                    <th>سبب الغياب</th>
                    <th>options</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($empabsences as $empabsence)


                  <tr>
                    <td>{{$empabsence->id}}</td>
                    <td>{{$empabsence->empolyee_id}}</td>
                    <td>{{$empabsence->absence_from}}</td>
                  <td>{{$empabsence->absence_to}}</td>
                    <td>{{$empabsence->absence_reason}}</td>

                    <td>
                      <div class="btn-group">
                            <form action="{{route('emp-absences.edit' ,['id' => $empabsence->id])}}" method="GET">
                                <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                            </form>

                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                        <form action="{{route('emp-absences.destroy',['id' =>$empabsence->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger confirm"> <i class="fa fa-times"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>    <!-- /.box -->
    @include('employee::employees.EmpAbsence.add')
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

@endsection



