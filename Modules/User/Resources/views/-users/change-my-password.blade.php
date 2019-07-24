@extends('cpanel.layouts.master')
@section('title')
    Change Password
@endsection


@section('page-content-header')
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i> Change Password  </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="{{ url('/cpanel') }}">HOME</a></li>
        <li><i class="fa fa-home"></i><a href="{{ url('/cpanel/profile') }}">My Profile</a></li>
        <li><i class="fa fa-laptop"></i>
          <a href="{{ url('/cpanel/users/') }}">
           Change Password
          </a>
        </li>
      </ol>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection


@section('content')
<div class="x_panel">
    <div class="x_title">
      <h2> Change Password </h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a></li>
              <li><a href="#">Settings 2</a></li>
            </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      {!! Form::open(['url' => ['cpanel/users/'.$userInfo->id.'/update-password'], 'method' => "PATCH"]) !!}
      <div class="row">
        <div class="col-md-3 custom-input">
          {!! Form::password('old_password', null, ['id' => 'old_password', 'class' => "form-control  {{ $errors->has('old_password') ? ' is-invalid' : '' }}", 'value' => "{{ old('old_password') }}", 'required', 'autofocus']) !!}
          {!! Form::label('old_password', 'Old Password', ['class' => 'control-label']) !!}
        </div>
      </div>
      </hr>
      <div class="row">
        <div class="col-md-3 custom-input">
          {!! Form::password('password', null, ['id' => 'password', 'class' => "form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
          {!! Form::label('password', 'New Password', ['class' => 'control-label']) !!}
        </div>
        <div class="col-md-3 custom-input">
          {!! Form::password('password_confirmation', null, ['id' => 'password-confirm', 'class' => "form-control  {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}", 'value' => "{{ old('password-confirm') }}", 'required', 'autofocus']) !!}
          {!! Form::label('password_confirm', 'New Password Confirm', ['class' => 'control-label']) !!}
        </div>
      </div>
      <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
          {!! Form::submit('Save', ['class' => "form-control btn btn-primary"]) !!}
        </div>
      </div>
      {!! Form::close() !!}
    </div>
</div>
@endsection
