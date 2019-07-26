<div class="row">
    <div class="col col-lg-8 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has(' employee_id ') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('add_holiday_id', 'نوع الأجازة ', ['class' => 'control-label']) !!}
            {!! Form::select('add_holiday_id', getSelect('add_holidays'), null, ['id' => 'add_holiday_id', 'class' => "select2 form-control  {{ $errors->has('add_holiday_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('add_holiday_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('balance', 'الرصيد', ['class' => 'control-label']) !!}
                {!! Form::text('balance', null, ['id' => 'balance', 'class' => "form-control  {{ $errors->has('balance') ? ' is-invalid' : '' }}", 'value' => "{{ old('balance') }}", 'required', 'autofocus']) !!}
            </div>
        </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('from', 'التاريخ من', ['class' => 'control-label']) !!}
                {!! Form::date('from', null, ['id' => 'from', 'class' => "form-control  {{ $errors->has('from') ? ' is-invalid' : '' }}", 'value' => "{{ old('from') }}", 'required', 'autofocus']) !!}
            </div>
        </div>


    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('to', 'التاريخ الي ', ['class' => 'control-label']) !!}
                {!! Form::date('to', null, ['id' => 'to', 'class' => "form-control  {{ $errors->has('to') ? ' is-invalid' : '' }}", 'value' => "{{ old('to') }}", 'required', 'autofocus']) !!}
            </div>
        </div>


    <div class="col col-lg-12 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('note', 'التاريخ الي ', ['class' => 'control-label']) !!}
                {!! Form::textArea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
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
<div class="row m-t-40">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
