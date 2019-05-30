{{-- @extends('student::layouts.print-master')

@section('content') --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
        <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-left">Date: 2/10/2014</small>
        </h2>
        </div>
        <!-- /.col -->
    </div>
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

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>


{{-- @stop --}}
