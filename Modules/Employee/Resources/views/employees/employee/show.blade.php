@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_employees') }}
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
    <h1>{{ __('home/sidebar.all_employees') }} </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\admin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li class="active"> {{ __('home/sidebar.all_employees') }} </li>
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
              <h3 class="text-center">{{ $employeeInfo->full_name }}</h3>
              <p class="text-muted text-center">{{ $employeeInfo->managament->name." ".$employeeInfo->department->name }}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>الادارة</b> <a class="pull-left">{{ $employeeInfo->managament->name }}</a>
                </li>
                <li class="list-group-item">
                  <b>القسم</b> <a class="pull-left">{{ $employeeInfo->department->name }}</a>
                </li>
                <li class="list-group-item">
                  <b>عنوان الوظيفة</b> <a class="pull-left">{{ $employeeInfo->job_title}}</a>
                </li>
                <li class="list-group-item">
                  <b>النوع</b> <a class="pull-left">{{ gender()[$employeeInfo->gender] }}</a>
                </li>
                <li class="list-group-item">
                  <b>الديانة</b> <a class="pull-left">{{ religion()[$employeeInfo->religion] }}</a>
                </li>
                <li class="list-group-item">
                  <b>الحالة الاجتماعية</b> <a class="pull-left">{{ martial()[$employeeInfo->martial_status] }}</a>
                </li>
                <li class="list-group-item">
                  <b>تاريخ الميلاد</b> <a class="pull-left">{{ $employeeInfo->birth_date}}</a>
                </li>
                <li class="list-group-item">
                  <b>تاريخ مزاولة العمل</b> <a class="pull-left">{{ $employeeInfo->hiring_date}}</a>
                </li>
                <li class="list-group-item">
                  <b>تاريخ التعيين</b> <a class="pull-left">{{ $employeeInfo->start_date}}</a>
                </li>
                <strong><i class="fa fa-file-text-o margin-r-5"></i> ملاحظة </strong>
                <p>{{$employeeInfo->note}}</p>
              </ul>
              <a href="{{ route('employees.edit',  ['id' => $employeeInfo->id]) }}" class="btn btn-primary btn-block"><b>تعديل بيانات الموظف</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#address" data-toggle="tab">عنوان السكن</a></li>
              <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
              <li><a href="#identifcation" data-toggle="tab">اثبات الشخصية</a></li>
              <li><a href="#certificates" data-toggle="tab"> الشهادات التعليميه</a></li>
              <li><a href="#auth" data-toggle="tab"> بيانات الدخول</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="address">
                <button type="button" data-toggle="modal" data-target="#popup-form" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة عنوان جديد </button>
                <hr>
                <div class="row">
                  @foreach ($employeeInfo->addresses as $address)
                  <div class="col-md-4">
                    <div class="box box-success box-shadow">
                      <div class="box-header with-border">
                        <h3 class="box-title">{{ getCity()[$address->city] }} <i class="fa fa-map-marker"></i> </h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="box-body">
                        {{ getLocal()[$address->city] }} /
                        {{ getLocal()[$address->local] }} /
                        {{ $address->street_2 }} /
                        {{ $address->street_1 }} /
                        {{ $address->home_number }}
                      </div>
                      <div class="box-footer">
                        <a type="button" class="btn btn-box-tool pull-left confirm" href="{{ route('addresses.delete',  ['id' => $address->id]) }}"><i class="fa fa-times"></i></a>
                        <a type="button" class="btn btn-box-tool pull-left" href="{{ route('addresses.edit',  ['id' => $address->id]) }}"><i class="fa fa-pencil"></i></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>

              <div class="tab-pane" id="contact">
                <button type="button" data-toggle="modal" data-target="#popup-form-contact" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة جهة اتصال </button>
                <hr>
                <div class="row">
                  @foreach ($employeeInfo->contacts as $contact)
                  <div class="col-md-4">
                    <div class="box box-success box-shadow">
                      <div class="box-header with-border">
                        <h3 class="box-title"> بيانات الاتصال <i class="fa fa-map-marker"></i> </h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="box-body">
                        {{ $contact->number_1 }} /
                        {{ $contact->number_2 }} /
                        {{ $contact->email }} /
                        {{ $contact->note }}
                      </div>
                      <div class="box-footer">
                        <a type="button" class="btn btn-box-tool pull-left confirm" href="{{ route('contacts.delete',  ['id' => $contact->id]) }}"><i class="fa fa-times"></i></a>
                        <a type="button" class="btn btn-box-tool pull-left" href="{{ route('contacts.edit',  ['id' => $contact->id]) }}"><i class="fa fa-pencil"></i></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>

              <div class="tab-pane" id="identifcation">
                <button type="button" data-toggle="modal" data-target="#popup-form-identifcation" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة اثبات الشخصية </button>
                <hr>
                <div class="row">
                  @foreach ($employeeInfo->identifcations as $identifcation)
                  <div class="col-md-4">
                    <div class="box box-success box-shadow">
                      <div class="box-header with-border">
                        <h3 class="box-title"> بيانات اثبات الشخصية <i class="fa fa-map-marker"></i> </h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="box-body">
                        {{ $identifcation->type }} /
                        {{ $identifcation->identifcation_number }} /
                        {{ $identifcation->issue_date }} /
                        {{ $identifcation->issue_place }}
                      </div>
                      <div class="box-footer">
                        <a type="button" class="btn btn-box-tool pull-left confirm" href="{{ route('identifcations.delete',  ['id' => $identifcation->id]) }}"><i class="fa fa-times"></i></a>
                        <a type="button" class="btn btn-box-tool pull-left" href="{{ route('identifcations.edit',  ['id' => $identifcation->id]) }}"><i class="fa fa-pencil"></i></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>

              <div class="tab-pane" id="certificates">
                <button type="button" data-toggle="modal" data-target="#popup-add-certificate" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة شهادة </button>
                <hr>
                <div class="row">
                  @foreach ($employeeInfo->certificates as $certificate)
                  <div class="col-md-6">
                    <div class="box box-success box-shadow">
                      <div class="box-header with-border">
                        <h3 class="box-title"> الشهادات التعليميه <i class="fa fa-map-marker"></i> </h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="box-body">
                        {{ $certificate->name }} /
                        {{ $certificate->Applicant }} /
                        {{ certificateType()[$certificate->type] }} /
                        {{ $certificate->major }} /
                        {{ certificateDegree()[$certificate->degree] }} /
                        {{ $certificate->qualification_date }} /
                        {{ $certificate->experience_years }}
                      </div>
                      <div class="box-footer">
                        <a type="button" class="btn btn-box-tool pull-left confirm" href="{{ route('certificates.delete',  ['id' => $certificate->id]) }}"><i class="fa fa-times"></i></a>
                        <a type="button" class="btn btn-box-tool pull-left" href="{{ route('certificates.edit',  ['id' => $certificate->id]) }}"><i class="fa fa-pencil"></i></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane" id="auth">
                <button type="button" data-toggle="modal" data-target="#popup-form-auth" href="#" class="btn btn-info"> <i class="fa fa-lock"></i> تعديل بياناتتسجيل الدخول </button>
                <hr>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @include('address::addresses.add', ['employeeInfo' => $employeeInfo])
      @include('address::contacts.add', ['employeeInfo' => $employeeInfo])
      @include('address::identifcations.add', ['employeeInfo' => $employeeInfo])
      @include('employee::employees.employee.certificates.add', ['employeeInfo' => $employeeInfo])
      @include('employee::employees.employee.edit-auth', ['employeeInfo' => $employeeInfo])
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
    $(function () {
        $('#qualification_date').datepicker({
            autoclose: true,
            language: 'ar',
            rtl: true,
            format: 'yyyy-mm-dd'
        });
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



