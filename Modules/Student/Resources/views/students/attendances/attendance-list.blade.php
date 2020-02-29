@extends('cpanelAdmin.layouts.master')
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
        <h1> قائمة الحضور <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li><a href="#">شوؤن الموظفيين</a></li>
          <li class="active">قائمة الحضور</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
                <!-- Default box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">قائمة الحضور</h3>
              <div class="box-tools pull-right">

              </div>
            </div>


          <!-- /.box -->
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table id="data" class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>اسم الطالب</th>
                          <th>الحالة </th>
                          <th>التاريخ </th>
                          <th>الخيارات</th>
                      </tr>
                  </thead>
                <tfoot>
                 <tr>
                        <th>#ID</th>
                        <th>اسم الطالب</th>
                        <th>الحالة </th>
                        <th>التاريخ </th>
                        <th>الخيارات</th>
                 </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </section>



    <!-- /.box -->
    @include('employee::employees.emp.employees-info.add')
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
@endsection
 --}}



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
             ajax: '{!! route("attendances.dataTables") !!}',
             columns: [
                 { data: 'id', name: 'id', "width": "10%"},
                 { data: 'student_id', name: 'student_id', "width": "20%" },
                 { data: 'status', name: 'status', "width": "15%" },
                 { data: 'date', name: 'date', "width": "10%"},

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
