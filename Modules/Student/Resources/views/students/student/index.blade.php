@extends('cpanel.layouts.master')
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
  <h1> كل الطلاب <small>  </small></h1>
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
            <form  role="form">
              <div class="row">
                {{-- <div class="col col-lg-3 col-md-3 col-sm-12 col-12"> 
                  <div class="form-group">
                    <label class="control-label">اختيار المرحلة التعليمية</label>
                    <select class="form-control select2" v-model="search.level_id">
                      <option value="" selected="selected">الكل</option>
                      <option 
                        v-for="level in allLevels" 
                        :key="level.id" :value="level.id" 
                        v-text="level.name">
                      </option>
                    </select>
                  </div>
                </div> --}}
                {{-- <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اختيار الصف</label>
                    <select class="form-control select2" v-model="search.classroom_id">
                      <option value="" selected="selected">الكل</option>
                      <option 
                        v-for="classroom in allClassrooms" 
                        :key="classroom.id" :value="classroom.id" 
                        v-text="classroom.name">
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> اختيار الفصل</label>
                    <select class="form-control select2" v-model="search.part_id">
                      <option value="" selected="selected">الكل</option>
                      <option 
                        v-for="part in allParts" 
                        :key="part.id" :value="part.id" 
                        v-text="part.name">
                      </option>
                    </select>
                  </div>
                </div> --}}
                <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                  <div class="form-group">
                    {!! Form::label('gender', 'النوع', ['class' => 'control-label']) !!}
                    {!! Form::select('gender', getGender(), null, ['id' => 'gender', 'class' => "form-control select2 {{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!}
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <button type="submit" class="btn btn-info">بحــــث</button>
                </div>
              </div>
            </form>
                
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered table-hover table-condensed">
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
                    <tbody>
                      @forelse($students as $student)
                        <tr>
                          <td>{{ $student->id }}</td>
                          <td>{{ $student->name }}</td>
                          <td>{{ $student->level_id }}</td>
                          <td>{{ $student->classroom_id }}</td>
                          <td>{{ $student->part_id }}</td>
                          <td>{{ $student->gender }}</td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="fa fa-ellipsis-h"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">استعراض</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('students.edit',  ['id' => $student->id]) }}">تعديل</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route('students.delete',['id' => $student->id]) }}">حذف</a></li>
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
            </div>
        </div>
    </div>
    <!-- /.box -->
    {{-- @include('user::students.add') --}}
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

