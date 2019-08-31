<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('name', 'اسم الخزنة ', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 custom-label-checkbox-radio m-t-30">
        <div class="form-group">
            {{-- {!! Form::label('deletable', 'قابل للحذف' , ['class' => 'control-label']) !!} <br /> --}}
            {!! Form::checkbox('deletable', null, false, ['id' => 'deletable', 'class' => " {{ $errors->has('deletable') ? ' is-invalid' : '' }}", 'value' => "{{ old('deletable') }}"]) !!} قابل للحذف 
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
            {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
        </div>
    </div>
</div>
    
@if(isset($rscTypeInfo))
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
