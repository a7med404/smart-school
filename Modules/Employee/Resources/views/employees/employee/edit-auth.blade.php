<!-- Popup  -->
<div class="modal fade" id="popup-form-auth">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title"> البيانات</h4>
            </div>
            <div class="modal-body">    
                {!! Form::model($employeeInfo, ['route' => ['employees.edit-auth', $employeeInfo->id], 'method' => "PATCH"]) !!}
                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                {!! Form::label('username', ' اسم المستخدم', ['class' => 'control-label']) !!}
                                {!! Form::text('username', null, ['id' => 'username', 'class' => "form-control  {{ $errors->has('username') ? ' is-invalid' : '' }}", 'value' => "{{ old('username') }}", 'required', 'autofocus']) !!}
                            </div>
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                {!! Form::label('password', ' كلمة السر الجديدة ', ['class' => 'control-label']) !!}
                                {!! Form::password('password', ['id' => 'password', 'class' => "form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
                            </div>
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                {!! Form::label('password_confirmation', ' تاكيد كلمة السر الجديدة ', ['class' => 'control-label']) !!}
                                {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => "form-control  {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}", 'value' => "{{ old('password_confirmation') }}", 'required', 'autofocus']) !!}
                            </div>
                        </div>
                    </div>
        
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
    
                    
