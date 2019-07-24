@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_bear-in-mind') }}
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
        <h1>لفت نظر <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">لفت نظر</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">لفت نظر</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>

              <a type="button" data-toggle="modal" data-target="#popup-add-formal" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة
              </a>
            </div>
          </div>
          <div class="box-body">

            <div class="row">
              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الموظف </th>
                            <th>التاريخ</th>
                            <th>ملاحظات</th>
                            <th>options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bearinminds as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="#" class="">{{$item->empolyee_id}}</a></td>
                        <td><a href="#" class="">{{$item->date}}</a></td>
                        <td><a href="#" class="">{{$item->note}}</a></td>
                        <td>
                            <div class="btn-group">
                            <form action="{{route('bearinminds.edit',['id' => $item->id])}}" method="get">
                                <button class="btn btn-info>"><i class="fa fa-pencil"></i></button>
                           </form>
                            <form action="{{route('bearinminds.destroy',['id' => $item->id])}}" method="post">
                                @csrf
                                    @method('DELETE')
                                        <button class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></button>
                                </form>

                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>

    <!-- /.box -->
    @include('employee::employees.BearinMind.add')
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



