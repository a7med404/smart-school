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
<style>
    input[type=text]{
        border:none;
    }
</style>
@section('content')

      <section class="content-header">
        <h1>عرض النتيجة <small>  </small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
          <li class="active">عرض نتجية الطلاب</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">عرض نتيجة الطلاب</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            {{-- <form role="form" action="" method="GET">
              <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">الموظفين</label>
                    <select id="select" class="form-control" name="full_name">

                  @foreach ($examinations as $name)
                @if ($loop->first)
                <option value="">الكل</option>
                @endif
                  <option>{{$name->type}}</option>
                  @endforeach
                    </select>
                  </div>

                </div>
            </div> --}}

            <div class="row">
        <BR><BR>
            @if(count($errors) > 0)

            @foreach ($errors as $item)
            {{$item}}

            @endforeach
            @endif

            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <form action="{{route('student-degree.update',1)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="table-responsive">
            <table id="data" class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                    <th>#ID</th>
                    <th>اسم الطالب</th>
                    <th>المادة</th>
                    <th>الدرجة</th>
                <th>المجموع</th>
                <th>المجموع الكلي</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($ex as $item)
                    <tr>
            <td>
                <table>
                    <tr>
                        @if($loop->first)
                       {{$item->id}}
                       @endif
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        @if($loop->first)
                       {{$item->student->name}}
                       @endif
                    </tr>
                </table>
            </td>
            <td>{{$item->subject->name}}</td>
           <td> {{$item->ratio}}</td>
            <td>
                @if($loop->first)
            <div class="in">

                <input type="text" name="degree" id="" value="{{$ex->sum('ratio')}}" readonly>
            </div>
                @endif
            </td>
        <td>

            @if($loop->first)

            <input type="text" name="fulldeg" id="" value="{{$ful->sum('degree')}}" readonly>

            @endif

        </td>

        </tr>
                    @endforeach

                </tbody>
            </table>
            <!-- @foreach ($ex as $item)

<td>{{$item->ratio}}</td>

@endforeach -->
{{-- <!-- <td>Total {{$ex->sum('ratio')}}</td> --> --}}
<button class="btn btn-primary">معالجة النتيجة</button>
</form>
</div>

          </div>
          <!-- /.box-body -->
        </div>

        <!-- /.box -->
      </section>
@endsection
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(function() {
     $("input").on("keyup", function(){
            $(".in b").text($(this).val());
        });
        $('#level_id').change(function() {
            this.form.submit();
        });

    });

</script>

