@if (isset($studentInfo))
    {!! Form::hidden('addressable_type', 'Modules\Student\Entities\Student', ['value' => "{{ old('addressable_type') }}"]) !!}
@else
    {!! Form::hidden('addressable_type', 'Modules\User\Entities\User', ['value' => "{{ old('addressable_type') }}"]) !!}
@endif
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('street_1', 'الشارع', ['class' => 'control-label']) !!}
            {!! Form::text('street_1', null, ['id' => 'street_1', 'class' => "form-control  {{ $errors->has('street_1') ? ' is-invalid' : '' }}", 'value' => "{{ old('street_1') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('street_2', 'الشارع 2', ['class' => 'control-label']) !!}
            {!! Form::text('street_2', null, ['id' => 'street_2', 'class' => "form-control  {{ $errors->has('street_2') ? ' is-invalid' : '' }}", 'value' => "{{ old('street_2') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('city', 'المدينة', ['class' => 'control-label']) !!}
            {!! Form::select('city', getCity(), null, ['id' => 'city', 'class' => "form-control {{ $errors->has('city') ? ' is-invalid' : '' }}", 'value' => "{{ old('city') }}", 'required']) !!}
        </div> 
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('local', 'المحلية', ['class' => 'control-label']) !!}
            {!! Form::select('local', getLocal(), null, ['id' => 'local', 'class' => "form-control {{ $errors->has('local') ? ' is-invalid' : '' }}", 'value' => "{{ old('local') }}", 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('home_number', 'رقم المنزل ', ['class' => 'control-label']) !!}
            {!! Form::text('home_number', null, ['id' => 'home_number', 'class' => "form-control  {{ $errors->has('home_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('home_number') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
@if(isset($addressInfo))

{!! Form::hidden('addressable_id', null, ['value' => "{{ old('addressable_id') }}"]) !!}
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>
@else
@if (isset($studentInfo))
    {!! Form::hidden('addressable_id', $studentInfo->id, ['value' => "{{ old('addressable_id') }}"]) !!}
@else
    {!! Form::hidden('addressable_id', $userInfo->id, ['value' => "{{ old('addressable_id') }}"]) !!}
@endif
<div class="row m-t-20">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
