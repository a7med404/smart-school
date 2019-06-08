<template>
  <div>
    <section class="content-header">
      <h1>تقرير الفصول  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">تقرير الفصول </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تقرير الفصول </h3>
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
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الصف</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
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
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">حـــفظ</button>
                <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
              </div>
            </div>

          </form>
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>اسم الطالب</th>
                          <th>اسم المرحلة التعليمية</th>
                          <th>اسم الصف</th>
                          <th>تليفون الطالب</th>
                          <th>الهاتف الخلوى للاب</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>محمد عبد الرحمن علي</td>
                          <td>اساس</td>
                          <td>الثامن</td>
                          <td>012343454</td>
                          <td><a href="#" class="">012354545</a></td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>علي عبد الرحمن علي</td>
                          <td>اساس</td>
                          <td>السابع</td>
                          <td>012356434</td>
                          <td><a href="#" class="">012354545</a></td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
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