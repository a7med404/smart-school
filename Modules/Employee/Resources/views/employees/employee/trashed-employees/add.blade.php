<!-- Popup  -->
<div class="modal fade" id="popup-add-Trashed">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title"> البيانات</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['employees.trashedestroy'], 'method' => "POST", 'class' => 'form']) !!}
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="form-group">
                                {!! Form::label('employee_id', ' اسم الموظف  ', ['class' => 'control-label']) !!}
                                {!! Form::select('employee_id', getSelect('employees'), null, ['id' => 'employee_id', 'class' => "select2 form-control  {{ $errors->has('employee_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('employee_id') }}", 'required']) !!}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                            <button href="#" class="btn btn-primary">اخلاء طرف</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
