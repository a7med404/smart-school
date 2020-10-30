<p>بيانات عامة:</p>
<!-- Personal Information Form  -->
<div class="row">
    <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('full_name', '  اسم الموظف', ['class' => 'control-label']) !!}
            {!! Form::text('full_name', null, ['id' => 'full_name', 'class' => "form-control  {{ $errors->has('full_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('full_name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('gender', 'النوع', ['class' => 'control-label']) !!}
            {!! Form::select('gender', gender(), null, ['id' => 'gender', 'class' => "form-control select2 {{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('birth_date', 'تاريخ الميلاد', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('birth_date', null, ['id' => 'birth_date', 'class' => "form-control  {{ $errors->has('birth_date') ? ' is-invalid' : '' }}", 'value' => "{{ old('birth_date') }}", 'required', 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12"> 
        <div class="form-group">
            {!! Form::label('martial_status', 'الحالة الاجنماعية ', ['class' => 'control-label']) !!}
            {!! Form::select('martial_status', martial(), null, ['id' => 'martial_status', 'class' => "select2 form-control  {{ $errors->has('martial_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('martial_status') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('religion', 'الديانة', ['class' => 'control-label']) !!}
            {!! Form::select('religion', religion(), null, ['id' => 'religion', 'class' => "form-control select2 {{ $errors->has('religion') ? ' is-invalid' : '' }}", 'value' => "{{ old('religion') }}", 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('managament_id', 'الادارة', ['class' => 'control-label']) !!}
            {!! Form::select('managament_id', getSelect('managaments'), null, ['id' => 'managament_id', 'class' => "form-control select2 {{ $errors->has('managament_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('managament_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('department_id', 'القسم', ['class' => 'control-label']) !!}
            {!! Form::select('department_id', getSelect('departments'), null, ['id' => 'department_id', 'class' => "form-control select2 {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('job_title', ' عنوان الوضيفة', ['class' => 'control-label']) !!}
            {!! Form::text('job_title', null, ['id' => 'job_title', 'class' => "form-control  {{ $errors->has('job_title') ? ' is-invalid' : '' }}", 'value' => "{{ old('job_title') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
 
<div class="row">
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('hiring_date', 'تاريخ التعيين', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('hiring_date', null, ['id' => 'hiring_date', 'class' => "form-control  {{ $errors->has('hiring_date') ? ' is-invalid' : '' }}", 'value' => "{{ old('hiring_date') }}", 'required', 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('start_date', 'تاريخ مزاولة العمل', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('start_date', null, ['id' => 'start_date', 'class' => "form-control  {{ $errors->has('start_date') ? ' is-invalid' : '' }}", 'value' => "{{ old('start_date') }}", 'required', 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('basic_salary', 'الراتب الاساسي', ['class' => 'control-label']) !!}
            {!! Form::text('basic_salary', null, ['id' => 'basic_salary', 'class' => "form-control  {{ $errors->has('basic_salary') ? ' is-invalid' : '' }}", 'value' => "{{ old('basic_salary') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>


@if(!isset($employeeInfo))
<hr>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('username', ' اسم المستخدم', ['class' => 'control-label']) !!}
            {!! Form::text('username', null, ['id' => 'username', 'class' => "form-control  {{ $errors->has('username') ? ' is-invalid' : '' }}", 'value' => "{{ old('username') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('password', ' كلمة السر ', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['id' => 'password', 'class' => "form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('password_confirmation', ' تاكيد كلمة السر ', ['class' => 'control-label']) !!}
            {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => "form-control  {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}", 'value' => "{{ old('password_confirmation') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12 custom-label-checkbox-radio">
        <div class="form-group">
            {!! Form::label('picture', ' الصورة الشخصية )اختياري(' , ['class' => 'control-label']) !!} <br />
            {!! Form::file('picture', null, ['id' => 'picture', 'class' => " {{ $errors->has('picture') ? ' is-invalid' : '' }}", 'value' => "{{ old('picture') }}"]) !!}
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

    
@if(isset($employeeInfo))
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
