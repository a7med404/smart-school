@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_evaluations') }}
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
    <h1>تقييم الطلاب <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">تقييم الطلاب</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">تقييم الطلاب</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <a type="button" data-toggle="modal" data-target="#popup-add-evaluation" href="#" class="btn btn-sm btn-info pull-left">
                <i class="fa fa-plus"></i> اضافة تقييم
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="data" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>الطالب</th>
                            <th>المادة</th>
                            <th>معيار التقييم</th>
                            <th>درجة التقييم</th>
                            <th>اسم المعلم</th>
                            <th>ملاحظة</th>
                            <th>{{ __('home/labels.options') }}</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                    <tfoot>
                          <tr>
                            <th>#ID</th>
                            <th>الطالب</th>
                            <th>المادة</th>
                            <th>معيار التقييم</th>
                            <th>درجة التقييم</th>
                            <th>اسم المعلم</th>
                            <th>ملاحظة</th>
                            <th>{{ __('home/labels.options') }}</th>
                        </tr>
                        
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
    @include('education::evaluations.add')
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
            //Timepicker
        $("#time").timepicker({
            showInputs: false,
            language: 'ar',
        });
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
{{-- @endsection --}}

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
            }
        });

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            select: true,
            ajax: '{!! route("evaluations.dataTabels") !!}',
            columns: [
                { data: 'id', name: 'id', "width": "10%"},
                { data: 'student_id', name: 'student_id', "width": "10%"},
                { data: 'subject_id', name: 'subject_id', "width": "15%"},
                { data: 'for', name: 'for', "width": "20%" },
                { data: 'ratio', name: 'ratio', "width": "15%" },
                { data: 'employee_id', name: 'employee_id', "width": "10%"},
                { data: 'note', name: 'note', "width": "10%"},
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





