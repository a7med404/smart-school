@extends('student::layouts.print')

@section('content')
    <!-- title row -->
      <div class="row">
            <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> Smart School, Inc.
                <small class="pull-left">Date: 2/10/2019</small>
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
          <div class="row invoice-info">
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                <div class="pull-right">
                    <img src="{{asset('modules/master/images/school-logo.png')}}"src="" class="img-responsive m-r-40" alt="">
                </div>
            </div>
            <div class="col-sm-6 text-center invoice-col">
                <p class="m-b-10 name-of-allah"> بسم الله الرحمن الرحيم</p>
                <strong>وزاة التربية و التعليم</strong><br>
                <strong>مدرسة العميد</strong><br>
                <div class="m-t-40">
                <strong class="report-title"> تقرير المراحل التعليمية</strong>
                </div>
            </div>
              <!-- /.col -->
            <div class="col-sm-3 invoice-col">
              <div class="pull-left">
                  <img src="{{asset('modules/master/images/school-logo.png')}}"src="" class="img-responsive m-l-40" alt="">
              </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Table row -->
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>اسم المرحلة التعليمية</th>
                        <th>الترتيب</th>
                        <th>مدير المدرسة</th>
                        <th>ناظر المدرسة</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $object)
                    <tr>
                        <td>{{$object->id }}</td>
                        <td>{{ $object->name }}</td>
                        <td>{{ $object->sort }}</td>
                        <td>{{ $object->school_master }}</td>
                        <td>{{ $object->head_master }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
    
@stop