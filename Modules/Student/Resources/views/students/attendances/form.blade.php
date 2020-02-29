<div class="row">
    <div class="col col-lg-8  col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('student_id', 'اسم الطالب', ['class' => 'control-label']) !!}
            {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-8 col-md-2 col-sm-6 col-6">
        <div class="bootstrap-timepicker">
            <div class="form-group">
                {!! Form::label('date', 'التاريخ', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'autofocus']) !!}
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-8 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::radio('status', 1, 1, ['id' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}"]) !!}
            حضور

            {!! Form::radio('status', 2, null, ['id' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}"]) !!}
            غياب بعذر
            {!! Form::radio('status', 3, null, ['id' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}"]) !!}
            غياب بدون عذر
        </div>
    </div>
</div>





<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
</div>

