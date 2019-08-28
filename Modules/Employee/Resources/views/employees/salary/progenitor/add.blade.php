
        <!-- Popup  -->
        <div class="modal fade" id="popup-add-progenitor">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content modal-content-box">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="title">بيانات </h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => ['progenitors.store'], 'method' => "POST"]) !!}
                    @include('employee::employees.salary.progenitor.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

<!-- ... end Popup  -->
@section('footer')
<!-- icheck -->
<script>
    $(function () {
        $('#date').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,
            startDate: 'toDay',
            format: 'yyyy-mm-dd'
        });

    });

</script>
@endsection
=======
<!-- Popup  -->
<div class="modal fade" id="popup-add-progenitor">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title">بيانات المستخدم</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['progenitor.store'], 'method' => "POST", 'class' => 'form']) !!}
                @include('employee::employees.calends.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
