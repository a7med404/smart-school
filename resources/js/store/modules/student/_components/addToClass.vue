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
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
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
                  <label class="control-label">القسم</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">المرحلة التعليمية</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الصف</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> اسم الفصل</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
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