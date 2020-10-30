
<div class="row">
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('evaluation_item_id', ' عنصر التقييم   ', ['class' => 'control-label ']) !!}
            {!! Form::select('evaluation_item_id', getSelect('evaluation_items'), null, ['id' => 'evaluation_item_id', 'class' => "select2 form-control  {{ $errors->has('evaluation_item_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('evaluation_item_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('real_degree', '  الدرجة التقييم   ', ['class' => 'control-label']) !!}
            {!! Form::text('real_degree', null, ['id' => 'real_degree', 'class' => "form-control  {{ $errors->has('real_degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('real_degree') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('date', '  التاريخ   ', ['class' => 'control-label']) !!}
            {!! Form::date('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
        </div>
    </div>


</div>



    @if(isset($evaluationIitemInfo))
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button href="#" class="btn btn-primary">تعــديل</button>
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
