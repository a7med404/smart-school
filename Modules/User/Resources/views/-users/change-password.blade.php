@extends('admin.layouts.layout')

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
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                        
                    {!! Form::open(['url' => ['cpanel/users/'.$userInfo->id.'/update-password'], 'method' => "PATCH"]) !!}


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    {!! Form::password('password', ['id' => 'password', 'class' => "form-control form-control {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'placeholder' => 'Password', 'required']) !!}
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    {!! Form::password('password_confirmation', ['id' => 'password-confirm', 'class' => "form-control form-control {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'placeholder' => 'Confirm Password', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>

                    {!! Form::close() !!}             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection