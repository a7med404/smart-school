
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Role Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('display_name', 'Display Name', ['class' => 'control-label']) !!}
            {!! Form::text('display_name', null, ['id' => 'display_name', 'class' => "form-control  {{ $errors->has('display_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('display_name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div> 
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['id' => 'description', 'class' => "form-control  {{ $errors->has('description') ? ' is-invalid' : '' }}", 'value' => "{{ old('description') }}", 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="row">
    @foreach($permissions as $permission)
    <div class="col-md-6 control-label-checkbox-radio">
        {!! Form::checkbox('permissions[]', $permission->id, null, ['id' => $permission->name, 'class' => "form-control  {{ $errors->has('permission') ? ' is-invalid' : '' }}", 'value' => "{{ old('permission') }}"]) !!}
        {!! Form::label($permission->name, $permission->display_name, ['class' => 'control-label']) !!}
    </div>
    @endforeach
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
