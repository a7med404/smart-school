
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('percent', 'النسبة مئوية', ['class' => 'control-label']) !!}
            {!! Form::text('percent', null, ['id' => 'percent', 'class' => "form-control  {{ $errors->has('percent') ? ' is-invalid' : '' }}", 'value' => "{{ old('percent') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('degree', 'التقدير', ['class' => 'control-label']) !!}
            {!! Form::text('degree', null, ['id' => 'degree', 'class' => "form-control  {{ $errors->has('degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('degree') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

@if(isset($levelInfo))
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
