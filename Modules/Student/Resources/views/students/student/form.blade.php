    <p>بيانات عامة:</p>
    <!-- Personal Information Form  -->
    <div class="row">
        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('name', ' اسم الطالب كامل', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('gender', 'النوع', ['class' => 'control-label']) !!}
                {!! Form::select('gender', gender(), null, ['id' => 'gender', 'class' => "form-control select2 {{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('religion', 'الديانة', ['class' => 'control-label']) !!}
                {!! Form::select('religion', religion(), null, ['id' => 'religion', 'class' => "form-control select2 {{ $errors->has('religion') ? ' is-invalid' : '' }}", 'value' => "{{ old('religion') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    {!! Form::label('birthday', 'تاريخ الميلاد', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        {!! Form::text('birthday', null, ['id' => 'birthday', 'class' => "form-control  {{ $errors->has('birthday') ? ' is-invalid' : '' }}", 'value' => "{{ old('birthday') }}", 'required', 'autofocus']) !!}
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    {!! Form::label('start_data', 'تاريخ الالتحاق', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        {!! Form::text('start_data', null, ['id' => 'start_data', 'class' => "form-control  {{ $errors->has('start_data') ? ' is-invalid' : '' }}", 'value' => "{{ old('start_data') }}", 'required', 'autofocus']) !!}
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('education_year', 'العام الدراسي', ['class' => 'control-label']) !!}
                {!! Form::select('education_year', educationYear(), null, ['id' => 'education_year', 'class' => "form-control select2 {{ $errors->has('education_year') ? ' is-invalid' : '' }}", 'value' => "{{ old('education_year') }}", 'required']) !!}
            </div>
        </div>

        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('study_status', 'الحالة الدراسية', ['class' => 'control-label']) !!}
                {!! Form::select('study_status', studyStatus(), null, ['id' => 'study_status', 'class' => "form-control select2 {{ $errors->has('study_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('study_status') }}", 'required']) !!}
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('nationality', 'الجنسية', ['class' => 'control-label']) !!}
                {!! Form::select('nationality', nationality(), null, ['id' => 'nationality', 'class' => "form-control select2 {{ $errors->has('nationality') ? ' is-invalid' : '' }}", 'value' => "{{ old('nationality') }}", 'required']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 custom-label-checkbox-radio">
            <div class="form-group">
                {!! Form::label('is_staff_son', 'من ابناء العاملين' , ['class' => 'control-label']) !!} <br />
                {!! Form::checkbox('is_staff_son', 1, null, ['id' => 'is_staff_son', 'class' => " {{ $errors->has('is_staff_son') ? ' is-invalid' : '' }}", 'value' => "{{ old('is_staff_son') }}"]) !!}
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12"> 
            <div class="form-group">
                {!! Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']) !!}
                {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('classroom_id', 'اسم الصف', ['class' => 'control-label']) !!}
                {!! Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('classroom_id') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
                {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
                {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <button class="btn btn-primary btn-md">حفــظ</button>
        </div>
    </div>
    <!-- ... end Personal Information Form  -->
