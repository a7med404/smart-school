@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_users') }}
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
    <h1>{{ __('home/sidebar.all_users') }} <small>it all starts here</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li class="active"> {{ __('home/sidebar.all_users') }} </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            {{-- <h3 class="box-title">Title</h3> --}}
            <button type="button" data-toggle="modal" data-target="#popup-form" href="#" class="btn btn-info"> <i
                    class="fa fa-user-plus"></i> اضافة دور جديد </button>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
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
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="#" class="{{ toggleOneZeroClass()[$user->status] }}">{{ status()[$user->status] }}</a></td>
                            <td>
                                @foreach ($user->roles as $key => $role)
                                    <a href="{{ route('roles.show',  ['id' => $role->id]) }}" class="label label-info m-r-5">
                                        {{ $role->display_name }}
                                    </a> 
                                @endforeach
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <span class="fa fa-ellipsis-h"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.show',['id' => $user->id]) }}">استعراض</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.edit',  ['id' => $user->id]) }}">تعديل</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('users.delete',['id' => $user->id]) }}">حذف</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="text-center">
                                    <p>لا توجد بيانات في هذا الجدول</p>
                                </div>
                            </td>
                        </tr>   
                        @endforelse
                    </tbody>
                </table>
                {{-- <div style="color: #64d6e2" class="la-line-scale">
                <div></div><div></div><div></div><div></div><div></div>
            </div> --}}
            </div>

            {{-- {!! Form::open(['route' => ['users.store'], 'method' => "POST", 'class' => 'form']) !!}
        @include('user::users.form')
      {!! Form::close() !!} --}}

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
    @include('user::users.add')
</section>
<!-- /.content -->

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
        "order": [
            [0, 'desc']
        ],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,
    });
    $(document).ready(function () {
        /*
            For iCheck =====================================>
        */
        $("input").iCheck({
            checkboxClass: "icheckbox_square-yellow",
            radioClass: "iradio_square-yellow",
            increaseArea: "20%" // optional
        });
    });

</script>
@endsection
