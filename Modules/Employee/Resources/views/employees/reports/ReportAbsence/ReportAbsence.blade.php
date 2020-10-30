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
        <h1>تقرير غياب الموظفين <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#">شوؤن تعليمية</a></li>
          <li class="active">تقرير غياب الموظفين</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">تقرير غياب الموظفين</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>

          <div class="box-body">
            <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
<div class="form-group">
{!! Form::open(['route' => ['ReportAbsence'], 'method' => "GET"]) !!}

                    {!! Form::label('value', 'اسم الموظف', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_id',  getSelect('employees'), null,['id' => 'employee_id', 'class' => "select2 form-control", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}
<br />
                            <button class="btn btn-primary" name="submit">عرض</button>
                            {{-- <button class="btn btn-primary">طباعة</button> --}}

                            </div>
            </div>


                    </div>
                @if (isset($_GET['submit']))
                    <div class="table-responsive">
                        <table id="data" class="table table-bordered table-hover table-condensed">
                            <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th> اسم الموظف </th>
                                        <th>الفياب من </th>
                                        <th> الغياب الى  </th>
                                        <th>  سبب الغياب </th>
                                    </tr>
                                </thead>
                              <tfoot>
                                @foreach ($employees as $ab)

                                <tr>

                                    <th> {{$ab->id}} </th>
                                    <th> {{$ab->employee->full_name}} </th>
                                    <th> {{$ab->absence_from}}</th>
                                    <th> {{$ab->absence_to}} </th>
                                    <th>  {{$ab->absence_reason}} </th>
                                </tr>
                            @endforeach

                              </tfoot>
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      @endsection

