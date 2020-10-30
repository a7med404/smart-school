<div class="row">
    {{-- <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('status', 'نوع العملية', ['class' => 'control-label']) !!}
            {!! Form::select('status', operationStatus(), null, ['id' => 'status', 'class' => "form-control select2 {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}
        </div>
    </div> --}}
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('student_id', 'الطالب', ['class' => 'control-label']) !!}
            {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('rsc_type_id', 'الخزنة', ['class' => 'control-label']) !!}
            {!! Form::select('rsc_type_id', getSelect('rsc_types'), null, ['id' => 'rsc_type_id', 'class' => "select2 form-control  {{ $errors->has('rsc_type_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('rsc_type_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('date', 'التاريخ', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
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
            {!! Form::label('amount', 'القيمة', ['class' => 'control-label']) !!}
            {!! Form::text('amount', null, ['id' => 'amount', 'class' => "form-control ",'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
            {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
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
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
