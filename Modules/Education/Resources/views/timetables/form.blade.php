
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('subject_id', 'المادة', ['class' => 'control-label']) !!}
            {!! Form::select('subject_id', getSelect('subjects'), null, ['id' => 'subject_id', 'class' => "form-control select2 {{ $errors->has('subject_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('day', 'اليوم', ['class' => 'control-label']) !!}
            {!! Form::select('day', daysOfTheWeak(), null, ['id' => 'day', 'class' => "form-control select2 {{ $errors->has('day') ? ' is-invalid' : '' }}", 'value' => "{{ old('day') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('subject_number', 'رقم الحصة', ['class' => 'control-label']) !!}
            {!! Form::select('subject_number', subjectNumber(), null, ['id' => 'subject_number', 'class' => "form-control select2 {{ $errors->has('subject_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_number') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('time', 'زمن الحصة', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('time', null, ['id' => 'time', 'class' => "form-control  {{ $errors->has('time') ? ' is-invalid' : '' }}", 'value' => "{{ old('time') }}", 'required', 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', 'معلم المادة', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}"]) !!}
        </div>
    </div>
    <tr>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
            {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
        </div>
    </div>
</div> 

 
@if(isset($timetableInfo))
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
