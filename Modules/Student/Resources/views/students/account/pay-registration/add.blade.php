<!-- Popup  -->
<div class="modal fade" id="popup-add-PayClass">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title"> البيانات</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['pay-classes.store'], 'method' => "POST", 'class' => 'form']) !!}
                @include('student::students.account.pay-class.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
