@extends('cpanel.layouts.master')
@section('title')
  All Users
@endsection
@section('header')
  <!-- icheck -->
  {!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
  <!-- dataTable -->
  {!! Html::style(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.css')) !!}
  {!! Html::style(asset('modules/master/plugins/datatables/jquery.dataTables.min.css')) !!}
@endsection
@section('content')
  <section class="content-header">
    <h1>Blank page <small>it all starts here</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <button type="button" data-toggle="modal" data-target="#popup-add-father" href="#" class="btn btn-sm btn-info m-t-0 m-b-20"><i class="fa fa-check"></i>
            طلب سحب ملف الطالب
          </button>
        <table id="table_id" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>#ID</th>
              <th>Name</th>
              <th>Phone</th>
              <th>E-Mail</th>
              <th>Status</th>
              <th>Roles</th>
              <th>{{ __('home/labels.options') }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->email }}</td>
              <td><a href="{{-- route('search',['status' => $user->status]) --}}" class="{{ toggleOneZeroClass()[$user->status] }}">{{ status()[$user->status] }}</a></td>
              <td>
                @foreach ($user->roles as $key => $role)
                  <a href="{{ route('roles.show',  ['id' => $role->id]) }}" class="label label-success">
                    {{ $role->display_name }}
                  </a>
                @endforeach
              </td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-default btn-sm" href="{{ route('users.show',  ['id' => $user->id]) }}"><i class="fa fa-arrows-alt"></i></a>
                  <a class="btn btn-info    btn-sm" href="{{ route('users.edit',  ['id' => $user->id]) }}"><i class="fa fa-pencil"></i></a>
                  <a class="btn btn-danger  btn-sm confirm" href="{{ route('users.delete',['id' => $user->id]) }}"> <i class="fa fa-times"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
          Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->



  <!-- Popup  -->
  <div class="modal fade" id="popup-add-father">
      <div class="modal-dialog"  tabindex="-1" role="dialog"  aria-labelledby="popup-add-father" aria-hidden="true">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات الوالد</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-3">
                  <div class="form-group">
                    <label class="control-label">التمييز</label>
                    <select class="form-control select2" name="mr_d" v-model="studentparent.mr_d">
                     <option 
                        v-for="(value, index) in mr_ds" 
                        :key="index" :value="index" 
                        v-text="value" 
                        :selected="studentparent.mr_d == index"> 
                     </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-9 col-md-9 col-sm-9 col-9">
                  <div class="form-group">
                    <label class="control-label"> الاسم </label>
                    <input class="form-control" placeholder="" type="text" name="name" v-model="studentparent.name">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الديانة</label>
                    <select class="form-control select2" name="religion" v-model="studentparent.religion">
                      <option 
                        v-for="(value, index) in religions" 
                        :key="index" :value="index" 
                        v-text="value" 
                        :selected="studentparent.religion == index"> 
                     </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الجنسية</label>
                    <select class="form-control select2" name="nationality" v-model="studentparent.nationality">
                      <option 
                        v-for="(value, index) in nationalities" 
                        :key="index" :value="index" 
                        v-text="value" 
                        :selected="studentparent.nationality == index"> 
                     </option>
                    </select>
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-xl-12 col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="control-label">الرقم الوطني ل ولي الامر</label>
                    <input class="form-control" placeholder="" type="text" name="identifcation_number" v-model="studentparent.identifcation_id">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">موهل الوالد </label>
                    <input class="form-control" placeholder="" type="text" name="qualification" v-model="studentparent.qualification">
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">الوظيفة</label>
                    <input class="form-control" placeholder="" type="text" name="job" v-model="studentparent.job">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">مكان العمل </label>
                    <input class="form-control" placeholder="" type="text" name="work_place" v-model="studentparent.work_place">
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label"> الحالة الاجنماعية </label>
                    <select class="form-control select2" name="martial" v-model="studentparent.martial">
                      <option 
                        v-for="(value, index) in martials" 
                        :key="index" :value="index" 
                        v-text="value" 
                        :selected="studentparent.martial == index"> 
                     </option>
                    </select>
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">رقم الهاتف</label>
                    <input class="form-control" placeholder="" type="text" name="phone_number" v-model="studentparent.phone_number">
                  </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">العنوان</label>
                    <input class="form-control" placeholder="" type="text" name="address_id" v-model="studentparent.address_id">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="control-label">البريد الالكتروني</label>
                    <input class="form-control" placeholder="" type="email" name="email" v-model="studentparent.email">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">
                      <input type="checkbox" class="minimal" name="is_die" v-model="studentparent.is_die">
                      متوفي 
                    </label>
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">ملاحظة</label>
                    <textarea class="form-control" placeholder="" name="note" v-model="studentparent.note"></textarea>
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
    <!-- ... end Popup  -->
   
  
@stop
@section('footer')
  <!-- icheck -->
  {!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
  <!-- dataTable -->
  {!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
  {!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
    
    $('#table_id').DataTable({
      // processing: true,
      // serverSide: true,
      // "columnDefs":[
      //   {
      //     "targets":[1, 3, 7],
      //     "orderable":false,
      //   },
      // ],
      "stateSave": false,
      "responsive": true,
      "order": [[0, 'desc']],
      "pagingType": "full_numbers",
      aLengthMenu: [
        [10, 25, 50, 100, 200, -1],
        [10, 25, 50, 100, 200, "All"]
      ],
      iDisplayLength: 25,
      fixedHeader: true,
    });
  </script>
@endsection
