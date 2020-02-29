     <!-- Popup  -->
     <div class="modal fade" id="popup-add-employee">
        <div class="modal-dialog modal-lg"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-employee" aria-hidden="true">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title">بيانات الموظف</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['employees.store'], 'method' => "POST", 'class' => 'form' ,'files' => true]) !!}
                @include('employee::employees.emp.employees-info.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- ... end Popup  -->
