<!-- Popup  -->
<div class="modal fade" id="popup-add">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title">بيانات المستخدم</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['offprints.store'], 'method' => "POST", 'class' => 'form']) !!}
                {!! Form::hidden('type', $type, ['id' => 'type', 'class' => "form-control  {{ $errors->has('type') ? ' is-invalid' : '' }}", 'value' => "{{ old('type') }}", 'required', 'autofocus']) !!}
                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                {!! Form::label('student_id', 'اختيار الطالب:', ['class' => 'control-label']) !!}
                                {!! Form::select('student_id', getSelect('students'), null, ['id' => 'student_id', 'class' => "select2 form-control  {{ $errors->has('student_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('student_id') }}", 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-40">
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                            <button href="#" class="btn btn-primary">اضافة</button>
                            <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                            <button type="button" class="btn btn-default pull-left"  data-dismiss="modal">اغلاق</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
@section('footer')
<script>
    $(function () {
        $(".select2").select2();
    });
</script>
@endsection
