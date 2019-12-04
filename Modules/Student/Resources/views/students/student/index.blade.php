@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_students') }}
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
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    <li class="active">كل الطلاب</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">كل الطلاب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">


            <div class="table-responsive">
                <table id="data" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>اسم الطالب</th>
                            <th>اسم المرحلة التعليمية</th>
                            <th>اسم الصف</th>
                            <th>اسم الفصل</th>
                            <th>النوع</th>
                            <th>{{ __('home/labels.options') }}</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>اسم الطالب</th>
                            <th>اسم المرحلة التعليمية</th>
                            <th>اسم الصف</th>
                            <th>اسم الفصل</th>
                            <th>النوع</th>
                            <th class="noExport">{{ __('home/labels.options') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
    {{-- @include('user::students.add') --}}
</section>
<!-- /.content -->

@stop
{{-- <script>
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

</script> --}}


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
            if($(this).index() < 3 || $(this).index() == 4){
                var classname = $(this).index() == 3  ?  'filter-select' : 'filter-input';
                var title = $(this).html();
                if($(this).index() == 0 ){
                    $(this).html( '<input type="text" style="max-width:70px;" data-column="'+ $(this).index() +'" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" '+title+'" />' );
                }else{
                    $(this).html( '<input type="text" style="max-width:180px;" data-column="'+ $(this).index() +'" class="' + classname + '" data-value="'+ $(this).index() +'"placeholder=" البحث '+title+'" />' );
                }
            }else if($(this).index() == 3){
                $(this).html( '<select data-column="'+ $(this).index() +'" class="filter-select select2 form-control"><option value=""> all </option><option value="{{status()[0]}}"> {{status()[0]}} </option><option value="{{status()[1]}}"> {{status()[1]}} </option></select>' );

            }else if($(this).index() == 5){
                $(this).html( '<select data-column="'+ $(this).index() +'" class="filter-select select2 form-control"><option value=""> all </option><option value="{{getGender()[0]}}"> انثئ </option><option value="{{getGender()[1]}}"> ذكر </option></select>' );
            }
        });

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            select: true,
            ajax: '{!! route("students.dataTables") !!}',
            columns: [
                { data: 'id', name: 'id', "width": "10%"},
                { data: 'name', name: 'name', "width": "20%" },
                { data: 'level_id', name: 'level_id', "width": "15%" },
                { data: 'religion', name: 'religion', "width": "10%"},
                { data: 'classroom_id', name: 'classroom_id', "width": "15%"},
                { data: 'gender', name: 'gender', "width": "15%", orderable: false},
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
