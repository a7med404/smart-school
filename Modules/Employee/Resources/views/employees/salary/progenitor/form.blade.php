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

                                        {!! Form::label('amount', 'المبلغ', ['class' => 'control-label']) !!}
                                        {!! Form::text('amount', null, ['id' => 'amount', 'class' => "form-control"]) !!}

                                    </div>
                                </div>


                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('financial_year', 'السنة المالية', ['class' => 'control-label']) !!}
                                                {!! Form::select('financial_year',  getSelect('employees'), null,['id' => 'financial_year', 'class' => "select2 form-control", 'value' => "{{ old('financial_year') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('safe_id', 'اسم الخزنة', ['class' => 'control-label']) !!}
                                                {!! Form::select('safe_id',  getSelect('employees'), null,['id' => 'safe_id', 'class' => "select2 form-control", 'value' => "{{ old('safe_id') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
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

                                                {!! Form::label('months_number', 'عدد الشهور', ['class' => 'control-label']) !!}
                                                {!! Form::text('months_number', null, ['id' => 'months_number', 'class' => "form-control"]) !!}

                                            </div>
                                        </div>

                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                                {!! Form::label('note', 'ملاحظات', ['class' => 'control-label']) !!}
                                                                {!! Form::textarea('note', '', ['id' => 'note', 'class' => "form-control", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
                                                            </div>
                                                    </div>

                                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                                          <button type="submit" class="btn btn-primary">حـــفظ</button>
                                                          {!! Form::close() !!}

                                                        </div>
                                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                                                        </div>

                            </div>
                        </div>
=======
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('management_id', 'اسم الادارة', ['class' => 'control-label']) !!}
            {!! Form::select('management_id', getSelect('managaments'), null, ['id' => 'management_id', 'class' => "select2 form-control  {{ $errors->has('management_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('management_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('department_id', 'اسم القسم', ['class' => 'control-label']) !!}
            {!! Form::select('department_id', getSelect('departments'), null, ['id' => 'department_id', 'class' => "select2 form-control  {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required']) !!}
        </div>
    </div>

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
                {!! Form::select('calend_id', getSelect('calends'), null, ['id' => 'calend_id', 'class' => "select2 form-control  {{ $errors->has('calend_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('calend_id') }}", 'required']) !!}
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
