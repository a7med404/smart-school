<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('absence_from', 'التاريخ من', ['class' => 'control-label']) !!}
            {!! Form::date('absence_from', null, ['id' => 'absence_from', 'class' => "form-control  {{ $errors->has('absence_from') ? ' is-invalid' : '' }}", 'value' => "{{ old('absence_from') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('absence_to', 'التاريخ الى', ['class' => 'control-label']) !!}
            {!! Form::date('absence_to', null, ['id' => 'absence_to', 'class' => "form-control  {{ $errors->has('absence_to') ? ' is-invalid' : '' }}", 'value' => "{{ old('absence_to') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('note', 'سبب الغياب', ['class' => 'control-label']) !!}
            {!! Form::textarea('absence_reason', null, ['id' => 'absence_reason', 'class' => "form-control  {{ $errors->has('absence_reason') ? ' is-invalid' : '' }}", 'value' => "{{ old('absence_reason') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>



@if(isset($empabsence))
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
