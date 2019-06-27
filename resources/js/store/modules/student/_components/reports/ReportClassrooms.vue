<template>
  <div>
    <section class="content-header">
      <h1>تقرير قائمة الفصول  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">تقرير قائمة الفصول </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تقرير قائمة الفصول </h3>
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
                  <label class="control-label"> اسم المرحلة التعليمية </label>
                  <input class="form-control" placeholder="" type="text" name="">
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الصف</label>
<<<<<<< HEAD
                  <select class="form-control select2" >
=======
                  <select class="form-control select2">
>>>>>>> 67e2e63170d1c2fc91e8ffd6b8ee5b9d8744f07a
                    <option value="1">حضانة</option>
                    <option value="0">الاول</option>
                    <option value="1">الثاني</option>
                    <option value="0">الاول</option>
                    <option value="1">الثاني</option>
                    <option value="0">الثالث</option>
                    <option value="1">الرابع</option>
                    <option value="0">الخامس</option>
                    <option value="0">السادس</option>
                    <option value="1">السابع</option>
                    <option value="0">الثامن</option>
                    <option value="0">الاول</option>
                    <option value="1">الثاني</option>
                    <option value="0">الثالث</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الفصول</label>
                  <select class="form-control select2">
                    <option value="1">ابوبكر</option>
                    <option value="0">عمر</option>
                    <option value="1">علي</option>
                    <option value="0">عثمان</option>
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
          <div class="row">
              <!-- Print Buttons -->
              <div class="no-print">
                  <div class="col-xs-12">
                  <a href="/student/print-page/report-classrooms" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> طباعة</a>
                  <a type="button" href="/student/print-page/report-classrooms" class="btn btn-success" style="margin-right: 5px;">
                      <i class="fa fa-download"></i> انشاء ملف PDF
                  </a>
                  <a href="/student/print-page/report-classrooms" class="btn btn-primary"><i class="fa fa-pdf-card"></i> ملف PDF </a>
                  </div>
              </div>
              <!-- End Prints buttons -->
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