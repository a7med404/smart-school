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
    <h1>{{ __('home/sidebar.all_students') }} <small>it all starts here</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanelAdmin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li class="active"> {{ __('home/sidebar.all_students') }} </li>
    </ol>
</section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
          <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="{{ asset('modules/master/images/user.png')}}" alt="User profile picture">

                  <h3 class="text-center">{{ relation()[$studentParentInfo->mr_d] }}</h3>
                  <p class="text-muted text-center">{{ mr_d()[$studentParentInfo->mr_d]." / ".$studentParentInfo->name }}</p>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>رقم الهاتف</b> <a class="pull-left">{{ $studentParentInfo->phone_number}}</a>
                    </li>
                    <li class="list-group-item">
                        <strong><i class="fa fa-book margin-r-5"></i>  البريد الالكتروني  </strong>
                        <p class="text-muted"> {{$studentParentInfo->email}} </p>
                    </li>
                    <li class="list-group-item">
                      <b>الديانة</b> <a class="pull-left">{{ religion()[$studentParentInfo->religion] }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>الجنسية</b> <a class="pull-left">{{ nationality()[$studentParentInfo->nationality]}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>المؤهل</b> <a class="pull-left">{{ qualification()[$studentParentInfo->qualification]}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>الوظيفة</b> <a class="pull-left">{{ $studentParentInfo->job}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>مكان العمل </b> <a class="pull-left">{{ $studentParentInfo->work_place}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>الحالة الاجنماعية</b> <a class="pull-left">{{ martial()[$studentParentInfo->martial] }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>الوظيفة</b> <a class="pull-left">{{ $studentParentInfo->job}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>{{ ($studentParentInfo->job) ? 'علي قيد الحياة' : 'متوفي' }}</b>
                    </li>
                    <strong><i class="fa fa-file-text-o margin-r-5"></i> ملاحظة </strong>
                    <p>{{$studentParentInfo->note}}</p>
                  </ul>
                  <a href="{{ route('student-parents.edit',  ['id' => $studentParentInfo->id]) }}" class="btn btn-primary btn-block"><b>تعديل البيانات</b></a>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>

          <div class="col-md-9">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">طلاب ولي الامر</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>اسم الطالب</th>
                    <th>اسم المرحلة التعليمية</th>
                    <th>اسم الصف</th>
                    <th>اسم الفصل</th>
                    <th>النوع</th>
                    <th>{{ __('home/labels.options') }}</th>
                  </tr>
                  @forelse ($studentParentInfo->students as $student)
                    <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->level->name }}</td>
                      <td>{{ $student->classroom->name }}</td>
                      <td>{{ $student->part->name }}</td>
                      <td>{{ gender()[$student->gender] }}</td>
                      <td>
                        <div class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="fa fa-ellipsis-h"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('students.show',  ['id' => $student->id]) }}">استعراض</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('students.edit',  ['id' => $student->id]) }}">تعديل</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('students.fees',  ['id' => $student->id]) }}">عرض البيانات المالية</a></li>
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
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>


      </div>
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



