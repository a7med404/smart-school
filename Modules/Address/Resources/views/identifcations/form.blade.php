@if (isset($studentInfo))
    {!! Form::hidden('identifcationable_type', 'Modules\Student\Entities\Student', ['value' => "{{ old('identifcationable_type') }}"]) !!}
@else
    {!! Form::hidden('identifcationable_type', 'Modules\User\Entities\User', ['value' => "{{ old('identifcationable_type') }}"]) !!}
@endif
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('type', 'نوع اثبات الشخصية', ['class' => 'control-label']) !!}
            {!! Form::select('type', identifcationTypes(), null, ['id' => 'type', 'class' => "form-control {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required']) !!}
        </div> 
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('identifcation_number', 'رقم اثبات الشخصية ', ['class' => 'control-label']) !!}
            {!! Form::text('identifcation_number', null, ['id' => 'identifcation_number', 'class' => "form-control  {{ $errors->has('identifcation_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('identifcation_number') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('issue_date', 'تاريخ الانتهاء', ['class' => 'control-label']) !!}
            {!! Form::text('issue_date', null, ['id' => 'issue_date', 'class' => "form-control  {{ $errors->has('issue_date') ? ' is-invalid' : '' }}", 'value' => "{{ old('issue_date') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-xl-6 col-lg-6 col-md-6">
        <div class="form-group">
            {!! Form::label('issue_place', 'مكان الاستخراج', ['class' => 'control-label']) !!}
            {!! Form::text('issue_place', null, ['id' => 'issue_place', 'class' => "form-control  {{ $errors->has('issue_place') ? ' is-invalid' : '' }}", 'value' => "{{ old('issue_place') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

@if(isset($identifcationInfo))

{!! Form::hidden('identifcationable_id', null, ['value' => "{{ old('identifcationable_id') }}"]) !!}
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>
@else
@if (isset($studentInfo))
    {!! Form::hidden('identifcationable_id', $studentInfo->id, ['value' => "{{ old('identifcationable_id') }}"]) !!}
@else
    {!! Form::hidden('identifcationable_id', $userInfo->id, ['value' => "{{ old('identifcationable_id') }}"]) !!}
@endif
<div class="row m-t-40">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
