@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_examinations') }}
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
    <h1>الامتحانات <small>  </small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">درجات الطلاب</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">درجات الطلاب</h3>

        </div>
        <div class="box-body">
            <h4>البحث عن طريق المادة</h4>
            <div class="row">
                <div class="col col-xs-4">
                    <div class="form-group">
                        {!! Form::open(['route' => ['Semester.index'], 'method' => "GET", 'class' => 'form']) !!}
                        {!! Form::label('from', 'الدرجة من', ['class' => 'control-label']) !!}
                        {!! Form::text('from', null, ['id' => 'from', 'class' => "form-control  {{ $errors->has('from') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_id') }}", 'required']) !!}
                        {!! Form::label('to', 'الدرجة الى', ['class' => 'control-label']) !!}
                        {!! Form::text('to', null, ['id' => 'from', 'class' => "form-control  {{ $errors->has('to') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_id') }}", 'required']) !!}
                        {!! Form::label('deg', 'الدرجة', ['class' => 'control-label']) !!}
                        {!! Form::text('deg', null, ['id' => 'from', 'class' => "form-control  {{ $errors->has('deg') ? ' is-invalid' : '' }}", 'value' => "{{ old('subject_id') }}", 'required']) !!}

                        <BR><BR>
                        {!! Form::submit('اضافة', ['class' => 'btn btn-primary', 'name' => 'submit']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
            @if (isset($_GET{'submit'}))
            <div class="table-responsive">
                <table id="data" class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>الطالب</th>
                            <th>المادة</th>
                            <th>نوع الامتحان</th>
                            <th>درجة الطالب</th>
                            <th>اسم المعلم</th>
                            <th>الفصل</th>
                        </tr>
                    </thead>
                    <body>

                        @foreach ($exam as $item)
                        <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->student->name}}</td>
                       <td>{{$item->subject->name}}</td>
                       <td>{{$item->type}}</td>
                       <td>{{$item->ratio}}</td>
                       <td>{{$item->employee->full_name}}</td>

                       <td>{{$item->part_id}}</td>

                        </tr>
                       @endforeach
                    </body>
                </table>
            </div>
            @endif
        </div>
    </div>
    <!-- /.box -->
    @include('education::examinations.add')
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
{{-- <script type="text/javascript">

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
            ajax: '{!! route("Semester.dataTable") !!}',
            columns: [
                { data: 'id', name: 'id', "width": "10%"},
                { data: 'student_id', name: 'student_id', "width": "10%"},
                { data: 'subject_id', name: 'subject_id', "width": "15%"},
                { data: 'type', name: 'type', "width": "20%" },
                { data: 'ratio', name: 'ratio', "width": "15%" },
                { data: 'employee_id', name: 'employee_id', "width": "10%"},
                { data: 'part_id', name: 'part_id', "width": "15%"},
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
</script> --}}
@endsection








