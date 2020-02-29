
    <!-- Popup  -->
    <div class="modal fade" id="popup-add-classroom">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content modal-content-box">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="title">بيانات </h4>
                </div>
                <div class="modal-body">
                        <div class="row">
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'اسم الادارة', ['class' => 'control-label']) !!}
                                        {!! Form::select('managament_id', getSelect('managaments'), ['id' => 'managament_id', 'class' => "form-control  {{ $errors->has('managament_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('managament_id') }}", 'required', 'autofocus']) !!}

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'اسم القسم', ['class' => 'control-label']) !!}
                                            {!! Form::select('department_id', getSelect('departments'), ['id' => 'department_id', 'class' => "form-control  {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required', 'autofocus']) !!}

                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'اسم الموظف', ['class' => 'control-label']) !!}
                                                {!! Form::select('employee_id', getSelect('employees'), ['id' => 'employee_id', 'class' => "form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'الاذونات', ['class' => 'control-label']) !!}
                                                    {!! Form::select('perission_id', getSelect('perission'), ['id' => 'perission_id', 'class' => "form-control  {{ $errors->has('perission_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('perission_id') }}", 'required', 'autofocus']) !!}

                                                </div>
                                            </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'من الساعة', ['class' => 'control-label']) !!}
                                            {!! Form::time('from_hour', null, ['id' => 'from_hour', 'class' => "form-control  {{ $errors->has('from_hour') ? ' is-invalid' : '' }}", 'value' => "{{ old('from_hour') }}", 'required', 'autofocus']) !!}

                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'الى الساعة', ['class' => 'control-label']) !!}
                                                {!! Form::time('to_hour', null, ['id' => 'to_hour', 'class' => "form-control  {{ $errors->has('to_hour') ? ' is-invalid' : '' }}", 'value' => "{{ old('to_hour') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'التاريخ', ['class' => 'control-label']) !!}
                                                    {!! Form::date('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}

                                                </div>
                                            </div>
                            </div>
                            <div class="row">
                                <div class="col col-lg-12 col-md-12 col-sm-6 col-6">
                                    <div class="form-group">
                                        {!! Form::label('note', 'ملاحظة', ['class' => 'control-label']) !!}
                                        {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
                                    </div>
                                </div>

                            </div>



                            @if(isset($payrullInfo))
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

                </div>
              </div>
            </div>
          </div>
          <!-- ... end Popup  -->
