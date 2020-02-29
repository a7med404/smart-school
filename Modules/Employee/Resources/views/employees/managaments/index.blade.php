@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_calends') }}
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('modules/master/plugins/icheck-1.x/all.css')) !!}
<!-- dataTable -->
{!! Html::style(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.css')) !!}
{!! Html::style(asset('modules/master/plugins/datatables/jquery.dataTables.min.css')) !!}
@endsection
@section('content')


        <section class="content">
                <!-- Default box -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
                  </div>
                    <div class="box-body">
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                          <li class="active"><a href="#admins" data-toggle="tab">الادارة</a></li>
                          <li><a href="#department" data-toggle="tab">الاقسام</a></li>
                          {{-- <li><a href="#specialty" data-toggle="tab">التخصصات</a></li> --}}
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="admins" role="tabpanel" aria-expanded="true">

                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-admins" class="btn btn-info m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="data">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم الادارة </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                 <tfoot>
                                     <tr>
                                        <th>#ID</th>
                                    <th>اسم الادارة </th>
                                    <th>options</th>
                                </tr>

                                 </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="department" role="tabpanel" aria-expanded="true">
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-department" class="btn btn-info m--20 m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table id="datas" class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم القسم </th>
                                            <th>الادارة</th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                              <tbody>
                            @foreach ($departments as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->managament_id}}</td>
                                <td>{{$item->name}}</td>
                                <th></th>


                            </tr>
                            @endforeach


                              </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="tab-pane" id="specialty" role="tabpanel" aria-expanded="true">
                            <div class="box-tools">
                              <a type="button" data-toggle="modal" data-target="#popup-add-specialty" class="btn btn-info m-t-20 m-b-10">
                                <i class="fa fa-plus"></i>  اضافة جديد
                              </a>
                            </div>
                            <!-- /.box -->
                            <div class="row">
                              <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>اسم التخصص </th>
                                            <th>options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>مدرس انجليزى</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>وكيل مالى وإدارى</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>وكيل شئون مالية وحسابات</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>مشرف رياض أطفال</td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-info" type="button" data-toggle="modal" data-target="#popup-add-vehicle"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                            </div>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.box -->
              </section>

    </div>
    <!-- /.box -->

    @include('employee::employees.managaments.management.add')
    @include('employee::employees.managaments.department.add')


</section>
<!-- /.content -->

@stop
{{-- @section('footer')
<!-- icheck -->
{!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
<!-- dataTable -->
{!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}
<script>

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
@endsection --}}


@section('footer')
<!-- icheck -->
{!! Html::script(asset('modules/master/plugins/icheck.min.js')) !!}
<!-- dataTable -->
{!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}
{{-- {!! Html::script('https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js') !!}
{!! Html::script('https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') !!}
{!! Html::script('https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js') !!}
{!! Html::script('https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js') !!} --}}

<script type="text/javascript">

    var lastIdx = null;

        $('#data tfoot th').each( function () {
            if($(this).index() < 5 ){
                var classname = $(this).index() == 5  ?  'filter-select' : 'filter-input';
                var title = $(this).html();
                if($(this).index() == 0 ){
                    $(this).html( '<input type="text" style="max-width:70px;" data-column="'+ $(this).index() +'" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" '+title+'" />' );
                }else{
                    $(this).html( '<input type="text" style="max-width:180px;" data-column="'+ $(this).index() +'" class="' + classname + '" data-value="'+ $(this).index() +'"placeholder=" البحث '+title+'" />' );
                }
            }else if($(this).index() == 5){
                $(this).html( '<select data-column="'+ $(this).index() +'" class="filter-select select2 form-control"><option value=""> all </option><option value="{{getGender()[0]}}"> انثئ </option><option value="{{getGender()[1]}}"> ذكر </option></select>' );
            }
        });

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            select: true,
            ajax: '{!! route("managaments.dataTable") !!}',
            columns: [
                { data: 'id', name: 'id', "width": "10%"},
                { data: 'name', name: 'name', "width": "20%" },
                { data: 'options', name: 'options', orderable: false, "width": "10%"},
            ],
            "language": {
                "url": "{{ asset('modules/master/data/Arabic.json') }}"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            'searchDelay' : 350,
            bAutoWidth: false,
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 10,
            fixedHeader: true,
            dom: 'Blfrtip',
            buttons: [
                {
                    extend: 'pdf',
                    title: 'Test Data export',
                    exportOptions: {columns: "thead th:not(.noExport)"}
                },
                {
                    extend: 'excel',
                    title: 'Test Data export',
                    exportOptions: {columns: "thead th:not(.noExport)"}
                },
                {
                    extend: 'print',
                    title: 'Test Data export',
                    exportOptions: {columns: "thead th:not(.noExport)"}

                },
                {
                    extend: 'csv',
                    title: 'Test Data export',
                    exportOptions: {columns: "thead th:not(.noExport)"}
                },
                {
                    extend: 'copy',
                    title: 'Test copy export',
                    exportOptions: {columns: "thead th:not(.noExport)"}
                }
            ],
            initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });


        // $('.filter-select').change(function(){
        //     // setTimeout(function(table) {
        //         // delaySuccess(
        //             table.column($(this).data('column'))
        //             .search($(this).val())
        //             .draw();
        //         // );
        //     // }, 2000);

        // });


        $('.filter-select').change(function(){
            table.column($(this).data('column'))
            .search($(this).val())
            .draw();

        });

        $('.filter-input').keyup(function(){
            table.column($(this).data('column'))
            .search($(this).val())
            .draw();
        });


        $('#data tbody').on( 'mouseover', 'td', function () {
            var colIdx = table.cell(this).index().column;
            if ( colIdx !== lastIdx ) {
                $( table.cells().nodes() ).removeClass( 'highlight' );
                $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
            }
        })
        .on( 'mouseleave', function () {
            $( table.cells().nodes() ).removeClass( 'highlight' );
        });
</script>
@endsection

