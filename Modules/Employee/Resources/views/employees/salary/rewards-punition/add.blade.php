
    <!-- Popup  -->
    <div class="modal fade" id="popup-add-rewards">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content modal-content-box">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="title">بيانات </h4>
                </div>
                <div class="modal-body">
                        <div class="row">
                                {!! Form::open(['route' => ['rewards-punition.store'], 'method' => "POST"]) !!}

                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">


                                        {!! Form::label('name', 'السنة المالية', ['class' => 'control-label']) !!}
                                        {!! Form::select('finance_year',  getSelect('managaments'), ['id' => 'date', 'class' => "form-control"]) !!}

                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'التاريخ', ['class' => 'control-label']) !!}
                                            {!! Form::date('date', '' , ['id' => 'department_id', 'class' => "form-control", 'value' => "{{ old('department_id') }}", 'required', 'autofocus']) !!}

                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'اسم الادارة', ['class' => 'control-label']) !!}
                                                {!! Form::select('management_id', getSelect('managaments'), ['id' => 'employee_id', 'class' => "form-control", 'value' => "{{ old('employee_id') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'اسم القسم', ['class' => 'control-label']) !!}
                                                    {!! Form::select('department_id', getSelect('managaments'), ['id' => 'perission_id', 'class' => "form-control", 'value' => "{{ old('perission_id') }}", 'required', 'autofocus']) !!}

                                                </div>
                                            </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'خصم', ['class' => 'control-label']) !!}
                                            {!! Form::checkbox('type', ' ', ['id' => 'from_hour', 'class' => "form-control", 'value' => "{{ old('from_hour') }}", 'required', 'autofocus']) !!}

                                            {!! Form::label('name', 'مكافاة', ['class' => 'control-label']) !!}
                                            {!! Form::checkbox('type', ' ', ['id' => 'type', 'class' => "form-control", 'value' => "{{ old('from_hour') }}", 'required', 'autofocus']) !!}

                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'اسم الموظف', ['class' => 'control-label']) !!}
                                                {!! Form::select('employee_id',  getSelect('employees'), ['id' => 'employee_id', 'class' => "form-control", 'value' => "{{ old('to_hour') }}", 'required', 'autofocus']) !!}

                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'القيمة', ['class' => 'control-label']) !!}
                                                    {!! Form::text('value', ' ', ['id' => 'value', 'class' => "form-control", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}

                                                </div>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-6 col-6">
                                                    <div class="form-group">
                                                        {!! Form::label('note', 'السبب', ['class' => 'control-label']) !!}
                                                        {!! Form::textarea('reason', ' ', ['id' => 'reason', 'class' => "form-control", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
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
              </div>
            </div>
          </div>
          <!-- ... end Popup  -->

