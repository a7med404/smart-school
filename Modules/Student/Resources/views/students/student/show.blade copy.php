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
    <h1>{{ __('home/sidebar.all_students') }} </h1>
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

              <h3 class="text-center">{{ $studentInfo->name }}</h3>
              <p class="text-muted text-center">{{ $studentInfo->level->name." ".$studentInfo->classroom->name }}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>المرحلة</b> <a class="pull-left">{{ $studentInfo->level->name }}</a>
                </li>
                <li class="list-group-item">
                  <b>الصف</b> <a class="pull-left">{{ $studentInfo->classroom->name }}</a>
                </li>
                <li class="list-group-item">
                  <b>الفصل</b> <a class="pull-left">{{ $studentInfo->part->name}}</a>
                </li>
                <li class="list-group-item">
                  <b>النوع</b> <a class="pull-left">{{ gender()[$studentInfo->gender] }}</a>
                </li>
                <li class="list-group-item">
                  <b>الديانة</b> <a class="pull-left">{{ religion()[$studentInfo->religion] }}</a>
                </li>
                <li class="list-group-item">
                  <b>تاريخ الميلاد</b> <a class="pull-left">{{ $studentInfo->birthday}}</a>
                </li>
                <li class="list-group-item">
                  <b>تاريخ الميلاد</b> <a class="pull-left">{{ $studentInfo->birthday}}</a>
                </li>
                <strong><i class="fa fa-file-text-o margin-r-5"></i> ملاحظة </strong>
                <p>{{$studentInfo->note}}</p>
              </ul>
              <a href="{{ route('students.edit',  ['id' => $studentInfo->id]) }}" class="btn btn-primary btn-block"><b>تعديل بيانات الطالب</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          @if (!empty($studentInfo->health))
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">الحالة الصحية</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> اسم الطبيب</strong>
              <p class="text-muted">
                {{$studentInfo->health->doctor_name}}
              </p>
              <strong><i class="fa fa-book margin-r-5"></i> رقم الطبيب </strong>
              <p class="text-muted">
                {{$studentInfo->health->doctor_number}}
              </p>
              <strong><i class="fa fa-book margin-r-5"></i> فصيل الدم</strong>
              <p class="text-muted">
                {{$studentInfo->health->blood_type}}
              </p>

              <strong><i class="fa fa-book margin-r-5"></i> رقم التامين </strong>
              <p class="text-muted">
                {{$studentInfo->health->insurance_number}}
              </p>

              {{-- <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> خطوط العمل </strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p> --}}

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> الحالة الصحية </strong>
              <p>{{$studentInfo->health->health_status}}</p>

              <a href="{{ route('healthes.edit',  ['id' => $studentInfo->health->id]) }}" class="btn btn-primary btn-block"><b>تعديل الحالة الصحية</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          @else
            <button type="button" data-toggle="modal" data-target="#popup-add-healthe" href="#" class="btn btn-info btn-block"> <i class="fa fa-user-plus"></i> اضافة الحالة الصحية </button>
          @endif
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
              {{-- <li><a href="#studentParents" data-toggle="tab">{{ __('home/sidebar.studentParents') }} </a></li> --}}
              <li><a href="#address" data-toggle="tab">عنوان الطالب (المكاتب)</a></li>
              <li><a href="#contact" data-toggle="tab">بيانات الاتصال</a></li>
              <li><a href="#identifcation" data-toggle="tab">اثبات الشخصية</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="modules/master/images/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-left btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-left">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="modules/master/images/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-left btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-left btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="modules/master/images/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-left btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="modules/master/images/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="modules/master/images/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="modules/master/images/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="modules/master/images/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="modules/master/images/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-left">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="studentParents">
                <button type="button" data-toggle="modal" data-target="#popup-form" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة عنوان جديد </button>
                <hr>
                {{-- <div class="row">
                  @foreach ($studentInfo->studentParents as $studentParent)
                  <div class="col-md-4">
                    <div class="box box-success box-shadow">
                      <div class="box-header with-border">
                        <h3 class="box-title">{{ $studentParent->name }} <i class="fa fa-map-marker"></i> </h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="box-body">
                        {{ $studentParent->name }} /
                        {{ $studentParent->seats_number }} /
                        {{ $studentParent->student->name }} <br>
                        {{ $studentParent->description }}
                      </div>
                      <div class="box-footer">
                        <a type="button" class="btn btn-box-tool pull-left confirm" href="{{ route('studentParents.delete',  ['id' => $studentParent->id]) }}"><i class="fa fa-times"></i></a>
                        <a type="button" class="btn btn-box-tool pull-left" href="{{ route('studentParents.edit',  ['id' => $studentParent->id]) }}"><i class="fa fa-pencil"></i></a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div> --}}
              </div>

              <div class="tab-pane" id="address">
                <button type="button" data-toggle="modal" data-target="#popup-form" href="#" class="btn btn-info"> <i class="fa fa-user-plus"></i> اضافة عنوان جديد </button>
                <hr>
                <div class="row">
                  @foreach ($studentInfo->addresses as $address)
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
                  @foreach ($studentInfo->contacts as $contact)
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
                    @foreach ($studentInfo->identifcations as $identifcation)
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



            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @include('address::addresses.add', ['studentInfo' => $studentInfo])
      @include('address::contacts.add', ['studentInfo' => $studentInfo])
      @include('address::identifcations.add', ['studentInfo' => $studentInfo])
      @include('student::students.healthes.add', ['studentInfo' => $studentInfo])
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



