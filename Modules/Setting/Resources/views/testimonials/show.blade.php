@extends('cpanel.layouts.master')
@section('title')
  Permission Informations
@endsection
@section('header')
@endsection

                @section('content')
                  <!-- Start  Breadcrumb -->
                  <div class="row">
                    <div class="col-lg-12  float-right">
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\permissions') }}">All Permissions</a></li>
                        <li><i class="fa fa-user"></i>Permission Informations</li>
                      </ol>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                  <!-- End  Breadcrumb -->

                <div class="x_panel">
                  <div class="x_title">
                    <h2> {{ $permissionInfo->name}} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view">
                        </div>
                      </div>
                      <h3>{{ $permissionInfo->display_name}}</h3>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $permissionInfo->name}} </li>
                        <li><i class="fa fa-briefcase user-profile-icon"></i> {{ $permissionInfo->name}} </li>
                        <li class="m-top-xs">
                          <p class="lead"> {{ $permissionInfo->description }} </p>
                        </li>
                      </ul>
                      <a href="{{ route('permissions.edit', ['id' => $permissionInfo->id]) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit permission</a>
                      <br />
                      {{-- <!-- start skills -->
                      <ul class="list-unstyled user_data">
                        <li>
                          <p><h4>Has Permissions</h4></p>
                          <div class="btn btn-info">
                            {{ $permissionInfo->permissions->count() }}
                          </div>
                        </li>
                      </ul> --}}
                      <!-- end of skills -->
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>permission Activity Report</h2>
                        </div>
                        <div class="col-md-6">
                          {{-- <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                          </div> --}}
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      {{-- <div id="graph_bar" style="width:100%; height:280px;"></div> --}}

                      <!-- end of user-activity-graph -->
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> Offers </a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Manage Permission Roles </a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start Last Offers -->
                            <ul class="messages">
                              @foreach($permissionInfo->roles as $role)
                              <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">{{ $role->display_name }}</h4>
                                  <blockquote class="message">{{ $role->description }}</blockquote>
                                  <br />
                                    <ul class="">
                                        <li class=""><strong> Display Name: </strong><a>{{ $role->display_name }}</a> </li>
                                        <li class=""><strong> Name: </strong><a>{{ $role->name }}</a></li>
                                    </ul>
                                  <p class="url">
                                  </p>
                                </div>
                              </li>
                              {{-- <div class="tags">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#"><i class="fa fa-paperclip"></i><strong> permissions </strong></a><br />
                                @foreach($permission->permissions as $permission)
                                  <a href="{{ route('permissions.show', ['id' => $permissionInfo->id]) }}" class="tag"><i class="fa fa-tag"></i> {{ $permission->display_name }} </a>
                                @endforeach
                              </div> --}}
                              @endforeach
                            </ul>
                            <!-- end Last Offers -->
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <!-- start Users projects -->
                            @if($permissionInfo->roles->count() > 0)
                            <div class="table-responsive">
                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                    <th>#ID</th>
                                    <th>Display Name</th>
                                    <th>Description</th>
                                    <th>{{ __('home/labels.options') }}</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $id = 0 ?>
                                    @foreach($permissionInfo->roles as $role)
                                  <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ $role->display_name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>
                                      <a class="btn btn-info btn-xs"   href="{{ route('permissions.edit', ['id' => $role->id]) }}">Edit</a>
                                      <a class="btn btn-danger btn-xs" href="{{ url('cpanel/offer/'.$role->id.'/delete') }}">Delete</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            @else
                              <p> No Roles To Show...</p>
                            @endif
                            <!-- end Users projects -->

                          </div>
                        </div>
                      </div>
                      Its Permissions
                    </div>
                  </div>
                  </div>
                </div>
              @endsection

@section('footer')
@endsection
