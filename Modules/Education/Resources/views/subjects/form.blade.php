<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('name', 'اسم المادة', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('part_id', 'اسم الفصل', ['class' => 'control-label']) !!}
            {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
        </div>
    </div>
</div> 
<div class="row">
    <div class="col col-lg-4 col-md-4 col-sm-4 col-6">
        <div class="form-group">
            {!! Form::label('education_year', 'العام الدراسي', ['class' => 'control-label']) !!}
            {!! Form::select('education_year', educationYear(), null, ['id' => 'education_year', 'class' => "form-control select2 {{ $errors->has('education_year') ? ' is-invalid' : '' }}", 'value' => "{{ old('education_year') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-4 col-6">
        <div class="form-group">
            {!! Form::label('degree', 'الدرجة الكاملة', ['class' => 'control-label']) !!}
            {!! Form::text('degree', null, ['id' => 'degree', 'class' => "form-control  {{ $errors->has('degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('degree') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-4 col-6">
        <div class="form-group">
            {!! Form::label('pass_degree', 'درجة النجاح', ['class' => 'control-label']) !!}
            {!! Form::text('pass_degree', null, ['id' => 'pass_degree', 'class' => "form-control  {{ $errors->has('pass_degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('pass_degree') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
 

 
@if(isset($subjectInfo))
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
