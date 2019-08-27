<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('how', 'How', ['class' => 'form-label']) !!}
        {!! Form::text('how', null, ['id' => 'how', 'class' => "form-control  {{ $errors->has('how') ? ' is-invalid' : '' }}", 'value' => "{{ old('how') }}", 'required', 'autofocus']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 custom-label-checkbox-radio">
        {!! Form::label('status', 'Status', ['class' => 'custom-label']) !!} <br />
        <span>Active</span>
        {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <br>
        <span>Disable</span> 
        {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} 
    </div>
</div>
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('text', 'Text', ['class' => 'control-label']) !!}
            {!! Form::textarea('text', null, ['id' => 'text', 'class' => "form-control  {{ $errors->has('text') ? ' is-invalid' : '' }}", 'value' => "{{ old('text') }}", 'autofocus']) !!}
        </div>
    </div>
</div>
@if(isset($testimonialInfo))
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
