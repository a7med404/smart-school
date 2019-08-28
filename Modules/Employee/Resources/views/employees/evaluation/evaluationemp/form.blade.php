<div class="row">

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('level_id', ' اسم المرحلة التعليمية   ', ['class' => 'control-label']) !!}
            {!! Form::select('level_id', getSelect('levels'), null, ['id' => 'level_id', 'type' => "select2 form-control  {{ $errors->has('level_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('level_id') }}", 'required']) !!}
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('department_id', ' اسم القسم  ', ['class' => 'control-label']) !!}
            {!! Form::select('department_id', getSelect('departments'), null, ['id' => 'department_id', 'type' => "select2 form-control  {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('employee_id', ' اسم الموظف  ', ['class' => 'control-label']) !!}
            {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'type' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('item_id', ' عنصر التقييم   ', ['class' => 'control-label']) !!}
            {!! Form::select('item_id', getSelect('evaluation_items'), null, ['id' => 'item_id', 'type' => "select2 form-control  {{ $errors->has('item_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('item_id') }}", 'required']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('real_degree', '  الدرجة الفعلية   ', ['class' => 'control-label']) !!}
            {!! Form::text('real_degree', null, ['id' => 'real_degree', 'class' => "form-control  {{ $errors->has('real_degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('real_degree') }}", 'required', 'autofocus']) !!}
        </div>
    </div>

    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('degree', ' درجة التقييم   ', ['class' => 'control-label']) !!}
            {!! Form::text('degree', null, ['id' => 'degree', 'class' => "form-control  {{ $errors->has('degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('degree') }}", 'required', 'autofocus']) !!}
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
    <div class="row m-t-40">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button href="#" class="btn btn-primary">حـــفظ</button>
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
        </div>
    </div>
    @endif
    