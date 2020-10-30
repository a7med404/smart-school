<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('name', 'اسم المؤهل ', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}

        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('major', 'التحصص ', ['class' => 'control-label']) !!}
            {!! Form::text('major', null, ['id' => 'major', 'class' => "form-control  {{ $errors->has('major') ? ' is-invalid' : '' }}", 'value' => "{{ old('major') }}", 'required', 'autofocus']) !!}

        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('Applicant', 'جهة الحصول علي المؤهل', ['class' => 'control-label']) !!}
            {!! Form::text('Applicant', null, ['id' => 'Applicant', 'class' => "form-control  {{ $errors->has('Applicant') ? ' is-invalid' : '' }}", 'value' => "{{ old('Applicant') }}", 'required', 'autofocus']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('experience_years', 'عدد سنوات الخبرة ', ['class' => 'control-label']) !!}
            {!! Form::text('experience_years', null, ['id' => 'experience_years', 'class' => "form-control  {{ $errors->has('experience_years') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('type', 'نوع الؤهل', ['class' => 'control-label']) !!}
            {!! Form::select('type', certificateType(), null, ['id' => 'type', 'class' => "form-control select2 {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('degree', 'التقدير', ['class' => 'control-label']) !!}
            {!! Form::select('degree', certificateDegree(), null, ['id' => 'degree', 'class' => "form-control select2 {{ $errors->has('degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('degree') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('qualification_date', ' تاريخ الحصول المؤهل', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('qualification_date', null, ['id' => 'qualification_date', 'class' => "form-control  {{ $errors->has('qualification_date') ? ' is-invalid' : '' }}", 'value' => "{{ old('qualification_date') }}", 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(!isset($certificateInfo))
{!! Form::hidden('employee_id', $employeeInfo->id, ['value' => "{{ old('employee_id') }}"]) !!}
@endif


@if(isset($certificateInfo))
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
