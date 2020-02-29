<div class="row">

    <div class="col col-lg-12 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('name', ' الاسم   ', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
            </div>
        </div>

    <div class="col col-lg-12 col-md-6 col-sm-6 col-6">
        <div class="form-group">
            {!! Form::label('degree', ' درجة التقييم   ', ['class' => 'control-label']) !!}
            {!! Form::text('degree', null, ['id' => 'degree', 'class' => "form-control  {{ $errors->has('degree') ? ' is-invalid' : '' }}", 'value' => "{{ old('degree') }}", 'required', 'autofocus']) !!}
        </div>
    </div>


    </div>



    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button href="#" class="btn btn-primary">تعــديل</button>
        </div>
    </div>


