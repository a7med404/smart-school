<template>
  <div>
    <section class="content-header">
      <h1>دفع رسوم التسجيل  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">دفع رسوم التسجيل </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">دفع رسوم التسجيل </h3>
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
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> الطالب</label>
                  <select class="form-control select2">
                    <option value="1">احمد عبد الله احمد علي</option>
                    <option value="0">محمد سيد علي السيد</option>
                    <option value="1">الفاضل محمد عثمان بلال</option>
                    <option value="0">ياسر عمار محمد ادم</option>
                    <option value="0">هاني عمار محمد ادم</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> المبلغ </label>
                  <input class="form-control" placeholder="" type="text" name="name">
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">  رسوم التسجيل   </label>
                  <input class="form-control" disabled placeholder="" type="text" name="name" value="500 ج.س">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">ملاحظة</label>
                  <textarea class="form-control" placeholder="" ></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">حفظ</button>
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