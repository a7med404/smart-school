<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('type', ' نوع المخالفة  ', ['class' => 'control-label']) !!}
            {!! Form::select('type', calendType(), null, ['id' => 'type', 'class' => "select2 form-control  {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required']) !!}
        </div>
    </div>
        
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('discount_percentage', '    نسبة خصم من المرتب', ['class' => 'control-label']) !!}
            {!! Form::text('discount_percentage', null, ['id' => 'discount_percentage', 'class' => "form-control  {{ $errors->has('discount_percentage') ? ' is-invalid' : '' }}", 'value' => "{{ old('discount_percentage') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('name', '  اسم المخالفة', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>



@if(isset($calendInfo))
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <button href="#" class="btn btn-primary">حـــفظ</button>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
        <a type="button" href="{{route('calends.index')}}" class="btn btn-default pull-left"  data-dismiss="modal">رجوع</a>
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
