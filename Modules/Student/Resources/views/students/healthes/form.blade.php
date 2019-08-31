@if (isset($studentInfo))
{!! Form::hidden('student_id', $studentInfo->id, ['class' => "form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required', 'autofocus']) !!}
@else
{!! Form::hidden('student_id', $healthInfo->student_id, ['class' => "form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required', 'autofocus']) !!}
@endif
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('doctor_name', ' اسم الطبيب ', ['class' => 'control-label']) !!}
            {!! Form::text('doctor_name', null, ['id' => 'doctor_name', 'class' => "form-control  {{ $errors->has('doctor_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('doctor_name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('doctor_number', ' رقم الطبيب ', ['class' => 'control-label']) !!}
            {!! Form::text('doctor_number', null, ['id' => 'doctor_number', 'class' => "form-control  {{ $errors->has('doctor_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('doctor_number') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('insurance_number', ' رقم التامين ', ['class' => 'control-label']) !!}
            {!! Form::text('insurance_number', null, ['id' => 'insurance_number', 'class' => "form-control  {{ $errors->has('insurance_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('insurance_number') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('blood_type', 'فصيل الدم', ['class' => 'control-label']) !!}
            {!! Form::select('blood_type', bloodType(), null, ['id' => 'blood_type', 'class' => "form-control select2 {{ $errors->has('blood_type') ? ' is-invalid' : '' }}", 'value' => "{{ old('blood_type') }}", 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('health_status', 'الحالة الصحية', ['class' => 'control-label']) !!}
            {!! Form::textarea('health_status', null, ['id' => 'health_status', 'class' => "form-control  {{ $errors->has('health_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('health_status') }}", 'autofocus']) !!}
        </div>
    </div>
</div>



@if(isset($healtheInfo))
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
