<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('date', 'التاريخ', ['class' => 'control-label']) !!}
            {!! Form::date('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('type', 'نوع المخالفة', ['class' => 'control-label']) !!}
            {!! Form::select('type', calendType(), null, ['id' => 'type', 'class' => "select2 form-control  {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('', 'اسم المخالفة', ['class' => 'control-label']) !!}
            {!! Form::select('add_calend_id', getSelect('calends'), null, ['id' => 'add_calend_id', 'class' => "select2 form-control  {{ $errors->has('add_calend_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('add_calend_id') }}", 'required']) !!}
        </div>
    </div>
</div>

@if(isset($calendInfo))
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
