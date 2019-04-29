<template>
  <div>
    <section class="content-header">
      <h1> Blank page <small> it all starts here </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
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
            <span class="info-box-icon bg-green"><ion-icon name="ios-hourglass"></ion-icon></span>

            <div class="info-box-content">
              <span class="info-box-text">طلاب بدون فصول</span>
              <span class="info-box-number">410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><ion-icon name="ios-cash"></ion-icon></span>

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
            <span class="info-box-icon bg-red"><ion-icon name="ios-swap"></ion-icon></span>

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
                    <h3 class="box-title">Title</h3>
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
            
                <!-- PRODUCT LIST -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">Recently Added</h3>

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
                            <a href="javascript:void(0)" class="product-title">Samsung TV
                            <span class="label label-warning pull-left">$1800</span></a>
                                <span class="product-description">
                                Samsung 32" 1080p 60Hz LED Smart HDTV.
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Bicycle
                            <span class="label label-info pull-left">$700</span></a>
                                <span class="product-description">
                                26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-left">$350</span></a>
                                <span class="product-description">
                                Xbox One Console Bundle with Halo Master Chief Collection.
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                        <div class="product-img">
                            <img src="modules/master/images/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                            <span class="label label-success pull-left">$399</span></a>
                                <span class="product-description">
                                PlayStation 4 500GB Console (PS4)
                                </span>
                        </div>
                        </li>
                        <!-- /.item -->
                    </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                
            </div>
        </div>  

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
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
                    <!-- /.box-body -->
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box box-success">
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
    </section>


    </div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
    }
</script>

