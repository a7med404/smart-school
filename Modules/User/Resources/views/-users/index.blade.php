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
      {{-- <h3 class="box-title">Title</h3> --}}
      <button type="button" data-toggle="modal" data-target="#popup-form" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة مستخدم جديد </button>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <user-table></user-table>

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

{{-- <add-user-form></add-user-form> --}}

{{-- <tr v-for="user in allUsers" :key="user.id">
    <td v-text="user.id"></td>
    <td v-text="user.name"></td>
    <td v-text="user.phone_number"></td>
    <td v-text="user.email"></td>
    <td v-text="user.status"></td>
    <td>
        <div class="btn-group">
            <a class="btn btn-default btn-sm" href="{{ route('users.show',  ['id' => $user->id]) }}"><i class="fa fa-arrows-alt"></i></a>
            <a class="btn btn-info    btn-sm" href="{{ route('users.edit',  ['id' => $user->id]) }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger  btn-sm confirm" href="{{ route('users.delete',['id' => $user->id]) }}"> <i class="fa fa-times"></i></a>
          </div>
        <div class="btn-group">
            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
            <router-link :to="{name: 'edit-user', params: {id:user.id}}" class="btn btn-info" type="button" data-toggle="modal"><i class="fa fa-pencil"></i></router-link>
            <!-- <a class="btn btn-info" @click.prevent="editStusent(user)" type="button" data-toggle="modal"><i class="fa fa-pencil"></i></a> -->
            <a class="btn btn-danger confirm" href="#" @click.prevent="deleteUser(user.id)"> <i class="fa fa-times"></i></a>
        </div>
    </td>
</tr> --}}

@stop
@section('footer')
  <!-- icheck -->
  {!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
  <!-- dataTable -->
  {!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
  {!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}
  <script>
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
