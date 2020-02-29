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
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">تقرير اذونات موظف </h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> التاريخ من </label>
                    <input class="form-control" placeholder="" type="date" name="">
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> التاريخ الي </label>
                    <input class="form-control" placeholder="" type="date" name="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الموظفين</label>
                    <select class="form-control select2">
                      <option value="1">احمد محمد احمد علي</option>
                      <option value="0">عباس الخير عبد الرحمن محمد</option>
                      <option value="1">الفاضل محمد عثمان بلال</option>
                      <option value="0">معتز احمد محمد حنفي</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">حـــفظ</button>
                </div>
              </div>
  
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
  
    </div>
    @endsection