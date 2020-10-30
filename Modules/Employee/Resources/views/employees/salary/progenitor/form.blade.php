<div class="row">
    {!! Form::open(['route' => ['progenitors.store'], 'method' => "POST"]) !!}
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id',  getSelect('employees'),null, ['id' => 'employee_id', 'class' => "select2 form-control"]) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('amount', 'الرصيد', ['class' => 'control-label']) !!}
            {!! Form::text('amount', null, ['id' => 'amount', 'class' => "form-control  {{ $errors->has('amount') ? ' is-invalid' : '' }}", 'value' => "{{ old('amount') }}", 'required', 'autofocus']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('date', 'التاريخ من', ['class' => 'control-label']) !!}
            {!! Form::date('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('pay_back_date', 'التاريخ الي ', ['class' => 'control-label']) !!}
            {!! Form::date('pay_back_date', null, ['id' => 'pay_back_date', 'class' => "form-control  {{ $errors->has('to') ? ' is-invalid' : '' }}", 'value' => "{{ old('pay_back_date') }}", 'autofocus']) !!}
        </div>
    </div>
</div>


@if(isset($progenitorInfo))
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

