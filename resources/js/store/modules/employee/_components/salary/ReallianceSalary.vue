<template>
  <div>
    <section class="content-header">
      <h1> اعتماد الرواتب <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">اعتماد الرواتب</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">اعتماد الرواتب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">السنة المالية</label>
                  <select class="form-control select2">
                      <option value="CA">2010</option>
                      <option value="TE">2011</option>
                      <option value="TE">2012</option>
                      <option value="CA">2013</option>
                      <option value="TE">2014</option>
                      <option value="TE">2015</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الادارة</label>
                  <select class="form-control select2">
                      <option value="CA">التعلبم</option>
                      <option value="TE">الحسابات</option>
                      <option value="TE">شؤون الموظفين</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> القسم</label>
                  <select class="form-control select2">
                      <option value="CA">اداري</option>
                      <option value="TE">معلم</option>
                      <option value="TE">عامل</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> الشهر</label>
                  <input class="form-control" placeholder="" type="text" name="name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <button class="btn btn-primary btn-md">حفــظ</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>