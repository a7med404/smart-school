    <div class="row">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('managament_id', ' اسم الادارة ', ['class' => 'control-label']) !!}
                {!! Form::select('managament_id', getSelect('managaments'), null, ['id' => 'managament_id', 'class' => "form-control select2  {{ $errors->has('managament_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('managament_id') }}", 'required']) !!}
            </div>
        </div>

        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
                {!! Form::label('name', 'اسم القسم', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
            </div>
        </div>
    </div>
    @if(isset($ManagamentInfo))
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
    