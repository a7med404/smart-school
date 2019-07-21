<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('name', 'اسم المرحلة التعليمية', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('sort', 'الترتيب', ['class' => 'control-label']) !!}
            {!! Form::text('sort', null, ['id' => 'sort', 'class' => "forp-control  {{ $errors->has('sort') ? ' is-invalid' : '' }}", 'value' => "{{ old('sort') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('head_master', 'مدير المدرسة', ['class' => 'control-label']) !!}
            {!! Form::text('head_master', null, ['id' => 'head_master', 'class' => "form-control  {{ $errors->has('head_master') ? ' is-invalid' : '' }}", 'value' => "{{ old('head_master') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('school_master', ' ناظر المدرسة', ['class' => 'control-label']) !!}
            {!! Form::text('school_master', null, ['id' => 'school_master', 'class' => "form-control  {{ $errors->has('school_master') ? ' is-invalid' : '' }}", 'value' => "{{ old('school_master') }}", 'required', 'autofocus']) !!}
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
<div class="row m-t-40">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
    </div>
</div>
@endif
