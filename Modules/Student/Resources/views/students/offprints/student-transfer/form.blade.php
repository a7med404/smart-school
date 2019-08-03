<div class="row">  
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('student_id', 'اختيار الطالب', ['class' => 'control-label']) !!}
            {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "form-control select2 {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('transfer_to', 'الجهة المحول لها ', ['class' => 'control-label']) !!}
            {!! Form::text('transfer_to', null, ['id' => 'transfer_to', 'class' => "form-control  {{ $errors->has('transfer_to') ? ' is-invalid' : '' }}", 'value' => "{{ old('transfer_to') }}", 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('payment_status', 'موقفه من سداد الرسوم', ['class' => 'control-label']) !!}
            {!! Form::select('payment_status', payment_status(), null, ['id' => 'payment_status', 'class' => "form-control select2 {{ $errors->has('payment_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('payment_status') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('duration', 'مدة بقائه في المدرسة ', ['class' => 'control-label']) !!}
            {!! Form::text('duration', null, ['id' => 'duration', 'class' => "form-control  {{ $errors->has('duration') ? ' is-invalid' : '' }}", 'value' => "{{ old('duration') }}", 'autofocus']) !!}
        </div>
    </div>
</div>
@if(isset($studentTransferInfo))
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
