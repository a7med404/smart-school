
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
