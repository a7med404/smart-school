
  <!-- Popup  -->
  <div class="modal fade" id="popup-add-admins">
        <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-admins" aria-hidden="true">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="title"> الادارة</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['managaments.store'], 'method' => "POST", 'class' => 'form']) !!}
                @include('employee::employees.managaments.management.form')
                {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      <!-- ... end Popup  -->

      <!-- ... end Popup  -->
    
    