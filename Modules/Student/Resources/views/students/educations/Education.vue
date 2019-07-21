<template>
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        شوؤن تعليمية
        <!-- <small>13 new messages</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">شوؤن تعليمية</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="mailbox.html" class="btn btn-primary btn-block margin-bottom">شوؤن تعليمية</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">شوؤن تعليمية</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><router-link :to="{name: 'education-levels'}"> <i class="fa fa-envelope-o"></i>المراحل التعلمية <span class="label label-primary pull-left">12</span></router-link></li>
                <li><router-link :to="{name: 'classrooms'}"> <i class="fa fa-filter"></i> الصفوف التعلمية</router-link></li>
                <li><router-link :to="{name: 'part-rooms'}"> <i class="fa fa-envelope-o"></i> الفصول التعلمية <span class="label label-primary pull-left">12</span></router-link></li>
                <li><router-link :to="{name: 'dist-students'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب علي الفصول</router-link></li>
                <li><router-link :to="{name: 'test'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب علي الفصول</router-link></li>
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">

          <!-- <router-view :key="$route.fullPath"></router-view> -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   </div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
    }
</script>

