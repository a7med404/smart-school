                        <div class="row">

                                {!! Form::open(['route' => ['rewards-punition.store'], 'method' => "POST"]) !!}

                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">

                                        {!! Form::label('finance_year', 'السنة المالية', ['class' => 'control-label']) !!}
                                        {!! Form::select('finance_year',  getSelect('managaments'),null, ['id' => 'finance_year', 'class' => "select2 form-control"]) !!}

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">

                                        {!! Form::label('department_id', 'الاقسام', ['class' => 'control-label']) !!}
                                        {!! Form::select('department_id',  getSelect('departments'),null, ['id' => 'department_id', 'class' => "select2 form-control"]) !!}

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">

                                        {!! Form::label('management_id', 'الادارة', ['class' => 'control-label']) !!}
                                        {!! Form::select('management_id',  getSelect('managaments'),null, ['id' => 'management_id', 'class' => "select2 form-control"]) !!}

                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                {!! Form::label('date', 'التاريخ', ['class' => 'control-label']) !!}
                                                <div class="input-group">
                                                    {!! Form::text('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
                                                {!! Form::select('employee_id',  getSelect('employees'), null,['id' => 'employee_id', 'class' => "select2 form-control", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('value', 'القيمة', ['class' => 'control-label']) !!}
                                                    {!! Form::text('value', ' ', ['id' => 'value', 'class' => "form-control", 'value' => "{{ old('value') }}", 'required', 'autofocus']) !!}
                                                </div>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-6 col-6">

                                                    <div class="form-group">
                                                            {!! Form::label('type', 'خصم', ['class' => 'control-label']) !!}
                                                            {!! Form::radio('type', 0, ['id' => 'type', 'class' => "form-control", 'value' => "{{ old('type') }}", 'required', 'autofocus']) !!}
                                                            {!! Form::label('type', 'مكافاة', ['class' => 'control-label']) !!}
                                                            {!! Form::radio('type', 1, ['id' => 'type', 'class' => "form-control", 'value' => "{{ old('type') }}", 'required', 'autofocus']) !!}

                                                        </div>

                                                </div>
                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                                {!! Form::label('reason', 'السبب', ['class' => 'control-label']) !!}
                                                                {!! Form::textarea('reason', '', ['id' => 'reason', 'class' => "form-control", 'value' => "{{ old('reason') }}", 'required', 'autofocus']) !!}
                                                            </div>
                                                    </div>

                                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                                          <button type="submit" class="btn btn-primary">حـــفظ</button>
                                                          {!! Form::close() !!}

                                                        </div>
                                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                                                        </div>

                            </div>
                        </div>
