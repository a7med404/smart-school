
@if (isset($studentInfo))
    {!! Form::hidden('contactable_type', 'Modules\Student\Entities\Student', ['value' => "{{ old('contactable_type') }}"]) !!}
@else
    {!! Form::hidden('contactable_type', 'Modules\User\Entities\User', ['value' => "{{ old('contactable_type') }}"]) !!}
@endif
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('number_1', 'تلفون الطالب', ['class' => 'control-label']) !!}
            {!! Form::text('number_1', null, ['id' => 'number_1', 'class' => "form-control  {{ $errors->has('number_1') ? ' is-invalid' : '' }}", 'value' => "{{ old('number_1') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('number_2', 'تلفون الطواري ', ['class' => 'control-label']) !!}
            {!! Form::text('number_2', null, ['id' => 'number_2', 'class' => "form-control  {{ $errors->has('number_2') ? ' is-invalid' : '' }}", 'value' => "{{ old('number_2') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('email', ' البريد الالكتروني ', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['id' => 'email', 'class' => "form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'autofocus']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-xl-12 col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
            {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
        </div>
    </div>
</div>

@if(isset($contactInfo))
{!! Form::hidden('contactable_id', null, ['value' => "{{ old('contactable_id') }}"]) !!}
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>
@else
@if (isset($studentInfo))
    {!! Form::hidden('contactable_id', $studentInfo->id, ['value' => "{{ old('contactable_id') }}"]) !!}
@else
    {!! Form::hidden('contactable_id', $userInfo->id, ['value' => "{{ old('contactable_id') }}"]) !!}
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
