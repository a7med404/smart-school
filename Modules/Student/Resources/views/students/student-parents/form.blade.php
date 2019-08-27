    <p>بيانات عامة:</p>
    <!-- Personal Information Form  -->
    <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="form-group">
                {!! Form::label('mr_d', ' التمييز', ['class' => 'control-label']) !!}
                {!! Form::select('mr_d', mr_d(), null, ['id' => 'mr_d', 'class' => "form-control select2 {{ $errors->has('mr_d') ? ' is-invalid' : '' }}", 'value' => "{{ old('mr_d') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-9 col-md-9 col-sm-9 col-12">
            <div class="form-group">
                {!! Form::label('name', ' الاسم', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
    </div>
    'address_id', 

    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12"> 
            <div class="form-group">
                {!! Form::label('phone_number', 'رقم الهاتف', ['class' => 'control-label']) !!}
                {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => "form-control  {{ $errors->has('phone_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone_number') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12"> 
            <div class="form-group">
                {!! Form::label('email', 'البريد الالكتروني ', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['id' => 'email', 'class' => "form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('religion', 'الديانة', ['class' => 'control-label']) !!}
                {!! Form::select('religion', religion(), null, ['id' => 'religion', 'class' => "form-control select2 {{ $errors->has('religion') ? ' is-invalid' : '' }}", 'value' => "{{ old('religion') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('relation', 'صلة القرابة', ['class' => 'control-label']) !!}
                {!! Form::select('relation', relation(), null, ['id' => 'relation', 'class' => "form-control select2 {{ $errors->has('relation') ? ' is-invalid' : '' }}", 'value' => "{{ old('relation') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('nationality', 'الجنسية', ['class' => 'control-label']) !!}
                {!! Form::select('nationality', nationality(), null, ['id' => 'nationality', 'class' => "form-control select2 {{ $errors->has('nationality') ? ' is-invalid' : '' }}", 'value' => "{{ old('nationality') }}", 'required']) !!}
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12"> 
            <div class="form-group">
                {!! Form::label('martial', 'الحالة الاجنماعية ', ['class' => 'control-label']) !!}
                {!! Form::select('martial', martial(), null, ['id' => 'martial', 'class' => "select2 form-control  {{ $errors->has('martial') ? ' is-invalid' : '' }}", 'value' => "{{ old('martial') }}", 'required']) !!}
            </div>
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12"> 
            <div class="form-group">
                {!! Form::label('qualification', 'موهل الوالد ', ['class' => 'control-label']) !!}
                {!! Form::select('qualification', getSelect('levels'), null, ['id' => 'qualification', 'class' => "select2 form-control  {{ $errors->has('qualification') ? ' is-invalid' : '' }}", 'value' => "{{ old('qualification') }}", 'required']) !!}
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('job', ' الوظيفة', ['class' => 'control-label']) !!}
                {!! Form::text('job', null, ['id' => 'job', 'class' => "form-control  {{ $errors->has('job') ? ' is-invalid' : '' }}", 'value' => "{{ old('job') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('work_place', ' مكان العمل ', ['class' => 'control-label']) !!}
                {!! Form::text('work_place', null, ['id' => 'work_place', 'class' => "form-control  {{ $errors->has('work_place') ? ' is-invalid' : '' }}", 'value' => "{{ old('work_place') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
                {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-12 custom-label-checkbox-radio">
            <div class="form-group">
                {!! Form::label('mr_d', ' متوفي' , ['class' => 'control-label']) !!} <br />
                {!! Form::checkbox('mr_d', 1, null, ['id' => 'mr_d', 'class' => " {{ $errors->has('mr_d') ? ' is-invalid' : '' }}", 'value' => "{{ old('mr_d') }}"]) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <button class="btn btn-primary btn-md">حفــظ</button>
        </div>
    </div>
    <!-- ... end Personal Information Form  -->
