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
               <form action="" method="get">
            <div class="col col-lg-4 col-md-6 col-sm-6 col-6">

                <div class="form-group">
                    {!! Form::label('part_id', 'المرحلة', ['class' => 'control-label']) !!}
                    {!! Form::select('part_id', getSelect('parts'), null, ['id' => 'part_id', 'class' => "select2 form-control  {{ $errors->has('part_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('part_id') }}", 'required']) !!}
                </div>
            </div>
        </form>
        <BR><BR>
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">

        @if (isset($_GET['part_id']))


        <div class="table-responsive">
            <table id="data" class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>نوع</th>
                        <th>اسم الطالب</th>
                        <th>اسم الفصل</th>
                        <th>{{ __('home/labels.options') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($studentuniq as $item)
                    <tr>
                    <td>{{$item->student_id}}</td>
                    <td>{{examinationType()[111]}}</td>
                    <td>{{$item->student->name}}</td>
                    <td>{{$item->part->name}}</td>

                    <td><a href="{{route('student-degree.show',$item->student_id)}}">عرض النتيجة</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        @endif




          </div>
          <!-- /.box-body -->
        </div>

        <!-- /.box -->
      </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function() {
        $('#part_id').change(function() {
            this.form.submit();
        });
    });

</script>

