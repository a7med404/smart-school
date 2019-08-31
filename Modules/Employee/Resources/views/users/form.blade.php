
<div class="row">
    <div class="ccol col-xl-12 col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('phone_number', 'Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => "form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone_number') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
            {!! Form::text('email', null, ['id' => 'email', 'class' => "form-control {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('username', 'User Name', ['class' => 'control-label']) !!}
            {!! Form::text('username', null, ['id' => 'username', 'class' => "form-control  {{ $errors->has('username') ? ' is-invalid' : '' }}", 'value' => "{{ old('username') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div> 
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('note', 'Note', ['class' => 'control-label']) !!}
            {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="row">
    @foreach($roles as $role)
        <div class="col-md-3 custom-label-checkbox-radio">
            <div class="form-group">
                {!! Form::label($role->name, $role->display_name, ['class' => 'control-label']) !!} <br />
                {!! Form::checkbox('roles[]', $role->id, null, ['id' => $role->name, 'class' => " {{ $errors->has('role') ? ' is-invalid' : '' }}", 'value' => "{{ old('role') }}"]) !!}
            </div>
        </div>
    @endforeach
</div>

@if(!isset($userInfo))
<div class="row">
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('password', 'password', ['class' => 'control-label']) !!}
            {!! Form::password('password', null, ['id' => 'password', 'class' => "form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="ccol col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('password-confirm', 'Password Confirm', ['class' => 'control-label']) !!}
            {!! Form::password('password_confirmation', null, ['id' => 'password-confirm', 'class' => "form-control {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}", 'value' => "{{ old('password-confirm') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

@endif
<div class="row">
    <div class="col-md-3 custom-label-checkbox-radio">
        <div class="form-group">
            {!! Form::label('status', 'Status', ['class' => 'control-label']) !!} <br />
            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span> <br>
            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span> 
        </div>
    </div>
</div>
@if(isset($roleInfo))
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>
@else
<div class="row m-t-20">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
