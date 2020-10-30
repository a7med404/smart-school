@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_students') }}
@endsection
@section('header')
@endsection
@section('content')
<section class="content-header">
  <h1>
    اضافة طالب يدويا
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active"> اضافة طالب يدويا </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">كل الطلاب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form">
            <p class="title"> اضافة طالب يدويا</p>
            <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <label class="control-label"><i class="fa fa-paperclip"></i> تحمل ملف </label>
                            <input class="form-control" placeholder="" type="file" >
                        </div>
                        <!-- <p class="help-block">Max. 4MB</p> -->
                    </div>
                </div>
              </div>
            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <button class="btn btn-primary btn-md">حفــظ</button>
              </div>
            </div>
          </form>

        </div>
    </div>
</section>
<!-- /.content -->

@stop
@section('footer')
@endsection

