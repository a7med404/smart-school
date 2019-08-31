<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
            {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('student_id', 'الطالب', ['class' => 'control-label']) !!}
            {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}"]) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('subject_id', 'المادة', ['class' => 'control-label']) !!}
            {!! Form::select('subject_id', getSelect('subjects'), null, ['id' => 'subject_id', 'class' => "form-control select2 {{ $errors->has('subject_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('type', 'نوع الامتحان', ['class' => 'control-label']) !!}
            {!! Form::select('type', examinationType(), null, ['id' => 'type', 'class' => "form-control select2 {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('ratio', ' درجة الطالب', ['class' => 'control-label']) !!}
            {!! Form::text('ratio', null, ['id' => 'ratio', 'class' => "form-control {{ $errors->has('ratio') ? ' is-invalid' : '' }}", 'value' => "{{ old('ratio') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', 'اسم المعلم', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), (Auth::guard('employee')->user()->id) ? Auth::guard('employee')->user()->id : '' , ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}"]) !!}
        </div>
    </div>
</div>
 
@if(isset($examinationInfo))
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
