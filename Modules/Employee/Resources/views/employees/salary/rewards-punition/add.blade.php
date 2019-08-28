
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
                    {!! Form::open(['route' => ['rewards-punition.store'], 'method' => "POST"]) !!}
                    @include('employee::employees.salary.rewards-punition.form')
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
