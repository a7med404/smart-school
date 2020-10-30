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
        <h1>تقرير التعريف بالراتب <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">تقرير التعريف بالراتب</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">تقرير التعريف بالراتب</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form role="form" action="" method="GET">
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الموظفين</label>
                    <select id="select" class="form-control" name="full_name">

                  @foreach ($emp as $name)
                @if ($loop->first)
                <option value="">الكل</option>
                @endif
                  <option>{{$name->full_name}}</option>
                  @endforeach
                    </select>
                  </div>

                  @if(isset($_GET['full_name']))
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> التاريخ </label>
                    <input class="form-control" placeholder="" type="date" name="">
                  </div>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12 m-b-20">
                  <button href="#" type="submit" class="btn btn-primary">عرض</button>
                </div>
              </div>

                <div class="row">
                <div class=" col col-lg-12 col-md-12 col-sm-12 col-12">

                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>اسم الموظف</th>
                            <th>الراتب </th>
                            <th>الوظيفة</th>
                            <th>تاريخ الميلاد</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                    <td>{{$employee->full_name}}</td>
                    <td>{{$employee->basic_salary}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->birth_date }}</td>

                </tr>
                    @endforeach

                    </tbody>
                </table>
                @endif

                </div>
              </div>

            </form>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function() {
        $('#select').change(function() {
            this.form.submit();
        });
    });

</script>

