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
        <h1>بحث الموظفين <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#">شوؤن تعليمية</a></li>
          <li class="active">بحث الموظفين</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">بحث الموظفين</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
          <form role="form" action="{{route('employee-search')}}" method="GET">
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الموظفين</label>
                    <select class="form-control select2" name="full_name">
                      @foreach ($emp as $employee)
                      <option>{{$employee->full_name}}</option>
                      @endforeach

                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button name="ok" class="btn btn-primary">بحث</button>
                </div>
              </div>

            </form>

            <hr>
            @if (isset($_GET['ok']))
            <div class="table-hover">
                <table id="table_id" class="table table-bordered table-hover">
                    <thead>
                            <tr>

                                <th> اسم الموظف </th>
                                <th> النوع </th>
                                <th> تاريخ الميلاد </th>
                                <th> الحالة الاجتماعي </th>
                                <th> الوظيفة </th>
                                <th>الادارة</th>
                                <th>القسم</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($employees as $employee)
                                <tr>
                                <td>{{$employee->full_name}}</td>
                                <td>{{gender()[1]}}</td>
                                <td>{{$employee->birth_date}}</td>
                                <td>{{martial()[1]}}</td>
                                <td>{{$employee->job_title}}</td>
                                <td>{{$employee->managament->name}}</td>
                                <td>{{$employee->department->name}}</td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
                <button class="btn btn-default">طباعة</button>
                @endif

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      @endsection
