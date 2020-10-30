    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('student_id', 'الطالب', ['class' => 'control-label']) !!}
                {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    {!! Form::label('from', 'التاريخ من ', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        {!! Form::text('from', null, ['id' => 'from', 'class' => "form-control  {{ $errors->has('from') ? ' is-invalid' : '' }}", 'value' => "{{ old('from') }}", 'required', 'autofocus']) !!}
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    {!! Form::label('to', 'التاريخ الي ', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        {!! Form::text('to', null, ['id' => 'to', 'class' => "form-control  {{ $errors->has('to') ? ' is-invalid' : '' }}", 'value' => "{{ old('to') }}", 'required', 'autofocus']) !!}
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
                {!! Form::label('note', 'السبب', ['class' => 'control-label']) !!}
                {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
            </div>
        </div>
    </div>
    @if(isset($reportSeparateInfo))
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