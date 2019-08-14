@extends('cpanel.layouts.master')
@section('title')
{{ __('home/sidebar.all_HOME') }}
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
  <h1>سٌلف الموظفين <small>  </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active">سٌلف الموظفين</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">سٌلف الموظفين</h3>
      <div class="box-tools pull-right">
        <a type="button" data-toggle="modal" data-target="#popup-add-progenitor" href="#" class="btn btn-sm btn-info pull-left">
          <i class="fa fa-plus"></i>  اضافة سٌلفة
        </a>
      </div>
    </div>
  </div>
  <!-- /.box -->
  <div class="row">
    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
        <thead>
          <tr>
              <th>#ID</th>
              <th>اسم الموظف</th>
              <th>المبلغ</th>
              <th>السنة المالية</th>
            <th>اسم الخزنة</th>
            <th>التاريخ</th>
            <th>عدد الشهور</th>
            <th>الملاحظات</th>
              <th>options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($prog as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->employee_id}}</td>
            <td>{{$item->amount}}</td>
            <td>{{$item->financial_year}}</td>
            <td>{{$item->safe_id}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->months_number}}</td>
            <td>{{$item->note}}</td>

                <td>
                        <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                  <span class="caret"></span> خيارات
                                </a>

               
                                <ul class="dropdown-menu">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('progenitors.edit',['id' => $item->id])}}">تعديل</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('progenitors.delete',['id' => $item->id])}}">حذف</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                  <li role="presentation" class="divider"></li>

                                </ul>
                              </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

  <!-- /.box -->
    @include('employee::employees.salary.progenitor.add')

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



