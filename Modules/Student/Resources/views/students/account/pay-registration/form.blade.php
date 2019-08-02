<div class="row">

    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('education_year', 'العام الدراسي', ['class' => 'control-label']) !!}
            {!! Form::select('education_year', educationYear(), null, ['id' => 'education_year', 'class' => "form-control select2 {{ $errors->has('education_year') ? ' is-invalid' : '' }}", 'value' => "{{ old('education_year') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('level_id', 'اسم المرحلة التعليمية', ['class' => 'control-label']) !!}
            {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'class' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('classroom_id', 'اختيار الصف', ['class' => 'control-label']) !!}
            {!! Form::select('classroom_id', getSelect('classrooms'), null, ['id' => 'classroom_id', 'class' => "select2 form-control  {{ $errors->has('classroom_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('classroom_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('pay_rul_id', 'نوع الرسوم', ['class' => 'control-label']) !!}
            {!! Form::select('pay_rul_id', getSelect('pay_ruls'), null, ['id' => 'pay_rul_id', 'class' => "select2 form-control  {{ $errors->has('pay_rul_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('pay_rul_id') }}", 'required']) !!}
        </div>
    </div>


    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('name', 'القيمة', ['class' => 'control-label']) !!}
            {!! Form::text('value', null, ['id' => 'value', 'class' => "form-control ",'required', 'autofocus']) !!}
        </div>
    </div>
</div>


</div>


@if(isset($PayClassInfo))
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>
    
@else
<div class="row m-t-40">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
