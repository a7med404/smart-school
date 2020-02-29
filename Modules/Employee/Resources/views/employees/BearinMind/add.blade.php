
   <div class="modal fade" id="popup-add-formal">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content modal-content-box">
            <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
              <h4 class="title">بيانات </h4>
            </div>
            <div class="modal-body">


<form role="form" action="{{route('bearinminds.store')}}" method="POST">
    @csrf
        <div class="row">
          <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
              <label class="control-label">اسم الموظف</label>

              <select class="form-control select2" name="employee_id">
                @foreach ($emp as $item)

              <option value="{{$item->id}}">{{$item->full_name}}</option>
              @endforeach

              </select>

            </div>
          </div>
          <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="form-group">
              <label class="control-label"> التاريخ </label>
              <input class="form-control" placeholder="" type="date" name="date" >
            </div>
          </div>
        </div>
         <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label class="control-label">ملاحظة</label>
                <textarea class="form-control" placeholder="" name="note"></textarea>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button href="#" class="btn btn-primary">حـــفظ</button>
          </div>
          <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
          </div>
        </div>
      </form>
    </div>

            </div>
          </div>
        </div>
   </div>








