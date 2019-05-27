@extends('student::layouts.master')

@section('content')
    
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
              @foreach ($levels as $level)
              <tr>
                <td>{{$level->id }}</td>
                <td>{{ $level->name }}</td>
                <td>{{ $level->sort }}</td>
                <td>{{ $level->school_master }}</td>
                <td>{{ $level->head_master }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>

@stop
