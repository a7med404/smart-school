@extends('cpanelAdmin.layouts.master')
@section('title')
{{ __('home/sidebar.all_users') }}
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
    <h1>{{ $userInfo->name }}</h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('\cpanelAdmin') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.HOME') }} </a></li>
        <li class="active"> {{ __('home/sidebar.all_users') }} </li>
    </ol>
</section>

{{-- {{ dd($userInfo->reservations->count()) }} --}}
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i> {{ __('home/labels.name') }}</strong>
              <p class="text-muted">{{ $userInfo->name }}</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> {{ __('home/labels.phone_number') }}</strong>
              <p class="text-muted">{{ $userInfo->phone_number }}</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> {{ __('home/labels.email') }}</strong>
              <p class="text-muted">{{ $userInfo->email }}</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> {{ __('home/labels.gender') }}</strong>
              <p class="text-muted">{{ $userInfo->gender }}</p>
              <hr>
              <strong><i class="fa fa-pencil margin-r-5"></i> خطوط العمل </strong>
              <p>
                @foreach ($userInfo->roles as $key => $role)
                  <span class="label label-info">{{ $role->display_name }} </span>
                @endforeach
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> {{ __('home/labels.note') }}</strong>
              <p class="text-muted"> {{ $userInfo->note }} </p>
              
              <a href="{{ route('users.edit',  ['id' => $userInfo->id]) }}" class="btn btn-primary btn-block"><b>تعديل بيانات الطالب</b></a>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#address" data-toggle="tab">عنوان الطالب (المكاتب)</a></li>
              <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="address">
                <button type="button" data-toggle="modal" data-target="#popup-form" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة عنوان جديد </button>
                <hr>
                <div class="row">
                  @foreach ($userInfo->addresses as $address)
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
                        {{ $address->number }} 
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

              <div class="tab-pane active" id="contact">
                <button type="button" data-toggle="modal" data-target="#popup-form-contact" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة جهة اتصال </button>
                <hr>
                <div class="row">
                  @foreach ($userInfo->contacts as $contact)
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
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @include('address::addresses.add', ['userInfo' => $userInfo])
      @include('address::contacts.add', ['userInfo' => $userInfo])
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



