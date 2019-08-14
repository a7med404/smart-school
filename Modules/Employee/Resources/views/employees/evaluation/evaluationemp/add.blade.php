<!-- Popup  -->
<div class="modal fade" id="popup-add-evaluationemp">
    <div class="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="popup-form" aria-hidden="true">
        <div class="modal-content modal-content-box">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="title">بيانات</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['emp-evaluation.store'], 'method' => "POST", 'class' => 'form']) !!}
                @include('employee::employees.evaluation.evaluationemp.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->

    
    