@extends('cpanel.layouts.master')
@section('title')
Home
@stop

@section('content')
<div>
    <section class="content-header">
      <h1> لوحة التحكم <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">لوحة التحكم</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"> عدد الطلاب</span>
              <span class="info-box-number">1,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">طلاب لم يكملوا الرسوم </span>
              <span class="info-box-number">410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">مديونيات الطلاب</span>
              <span class="info-box-number">13,648</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> متوسط غياب الطلاب</span>
              <span class="info-box-number">93,139</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title"> رسوم الطلاب</h3>
                    <div class="box-tools pull-left">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
                    </div>
                    <div class="box-body">
                        <div class="demo-container table-responsive" style="height:100%">
                            <div class="">
                                <div id="offersRepport" style="width:100%; height:360px;"></div> 
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">طلاب بدون فصول</span>
                    <span class="info-box-number">200</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
                            50% من الطلاب
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">اولياء الامور</span>
                    <span class="info-box-number">950</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                            20% من الطلاب
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">طلاب غائبون</span>
                    <span class="info-box-number">114</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                            70% من الطلاب
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">عدد الطلاب في الترحيل</span>
                    <span class="info-box-number">163</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
                            40% من الطلاب
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>  

        <div class="row">
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Title</h3>
                        <div class="box-tools pull-left">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="echart_sonar" style="height:350px;"></div>
                    </div>
                </div>
            </div> -->
            <div class="col-md-4">

                <!-- PRODUCT LIST -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">اخر 5 عمليات مالية</h3>

                    <div class="box-tools pull-left">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">ابراهيم السيد
                            <span class="label label-success pull-left">399</span></a>
                                <span class="product-description">
                                دفع رسوم التسجيل 
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">محمد ابراهيم 
                            <span class="label label-warning pull-left">1800</span></a>
                                <span class="product-description">
                                دفع رسوم تعليمية للطالب ابراهيم السيد 
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">ابراهيم السيد
                            <span class="label label-info pull-left">700</span></a>
                                <span class="product-description">
                                اخذ مكافة ايمان السيد ابو العلا 
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title"> السيد ابو العلا <span class="label label-danger pull-left">350</span></a>
                                <span class="product-description">
                                اخذ سٌلف ايمان السيد ابو العلا 
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                    </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">عرض الكل</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">اعداد الطلاب في المراحل</h3>
                        <div class="box-tools pull-left">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="absence" style="height:350px;"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">تعداد الذكور و الاناث</h3>
                        <div class="box-tools pull-left">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="maleAndFemaleCount" style="height:350px;"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">العمليات المالية خلال اليوم</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                        <thead class="on-thead-style">
                        <tr>
                            <th>الطالب</th>
                            <th>المبلغ</th>
                            <th>نوع العملية</th>
                            <th>التاريخ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="pages/examples/invoice.html">ايمان السيد ابو العلا</a></td>
                            <td>450 ج.س</td>
                            <td><span class="label label-success">رسوم تعليمية</span></td>
                            <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20">10/03/2019 12:00:00 ص</div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">ايمان السيد ابو العلا</a></td>
                            <td>5000 ج.س</td>
                            <td><span class="label label-warning">زي مدرسي</span></td>
                            <td>
                            <div class="sparkbar" data-color="#f39c12" data-height="20">3/03/2019 12:00:00 ص</div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">محمد ابراهيم ابراهيم السيد</a></td>
                            <td>600 ج.س</td>
                            <td><span class="label label-danger">كتب</span></td>
                            <td>
                            <div class="sparkbar" data-color="#f56954" data-height="20">20/03/2019 7:00:00 ص</div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">السيد ابو العل</a></td>
                            <td>70 ج.س</td>
                            <td><span class="label label-info">مصروفات عامة</span></td>
                            <td>
                            <div class="sparkbar" data-color="#00c0ef" data-height="20">20/03/2019 12:00:00 ص</div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html"> ابراهيم ابراهيم السيد</a></td>
                            <td>3000 ج.س</td>
                            <td><span class="label label-warning">زي مدرسي</span></td>
                            <td>
                            <div class="sparkbar" data-color="#f39c12" data-height="20">20/03/2019 12:00:00 ص</div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">ابراهيم السيد</a></td>
                            <td>200 ج.س</td>
                            <td><span class="label label-danger">كتب</span></td>
                            <td>
                            <div class="sparkbar" data-color="#f56954" data-height="20">20/03/2019 12:00:00 ص</div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">السيد ابو العل</a></td>
                            <td>500 ج.س</td>
                            <td><span class="label label-success">رسوم تعليمية</span></td>
                            <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20">20/03/2019 12:00:00 ص</div>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                    <h3 class="box-title"> الموظفين النشطون حاليا</h3>

                    <div class="box-tools pull-right">
                        <span class="label label-danger"> 8 </span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <li>
                        <img src="modules/master/images/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">shahab Ibrahim</a>
                        <span class="users-list-date">Today</span>
                        </li>
                        <li>
                        <img src="modules/master/images/user8-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                        </li>
                        <li>
                        <img src="modules/master/images/user6-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                        <img src="modules/master/images/user2-160x160.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                        </li>
                    </ul>
                    <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">عرض الكل</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>

        </div>
    </section>


  </div>
@stop
