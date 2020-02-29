                        <div class="row">

                                {!! Form::open(['route' => ['progenitors.store'], 'method' => "POST"]) !!}

                                <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">

                                        {!! Form::label('employee_id', 'اسم الموظف', ['class' => 'control-label']) !!}
                                        {!! Form::select('employee_id',  getSelect('employees'),null, ['id' => 'employee_id', 'class' => "select2 form-control"]) !!}

                                    </div>
                                </div>
                                {{-- <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">

                                        {!! Form::label('amount', 'المبلغ', ['class' => 'control-label']) !!}
                                        {!! Form::text('amount', null, ['id' => 'amount', 'class' => "form-control"]) !!}

                                    </div>
                                </div> --}}


                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">

                                                {!! Form::label('transaction_id', 'عدد الشهور', ['class' => 'control-label']) !!}
                                                {!! Form::text('transaction_id', null, ['id' => 'transaction_id', 'class' => "form-control"]) !!}

                                            </div>
                                        </div>

                                                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                                                          <button type="submit" class="btn btn-primary">حـــفظ</button>
                                                          {!! Form::close() !!}

                                                        </div>
                                                    

                            </div>
                        </div>

