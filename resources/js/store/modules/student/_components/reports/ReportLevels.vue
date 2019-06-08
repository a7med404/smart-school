<template>
  <div>
    <section class="content-header">
      <h1>تقرير المراحل <small>  </small></h1>
      <ol class="breadcrumb">
        <li class="active">تقرير المراحل</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تقرير المراحل</h3>
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
                  <label class="control-label">اسم المرحلة التعليمية</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="1">رياض اطفال</option>
                    <option value="0">أساس</option>
                    <option value="0">ثانوي</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">النوع</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="0">ذكر</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">حـــفظ</button>
                <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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