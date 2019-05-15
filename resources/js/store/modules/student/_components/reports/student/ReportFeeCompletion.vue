<template>
  <div>
    <section class="content-header">
      <h1>تقرير مخالصه بمصروفات طالب  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">تقرير مخالصه بمصروفات طالب </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تقرير مخالصه بمصروفات طالب </h3>
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
                  <label class="control-label"> التاريخ من</label>
                  <input name="absence_date" type="text" class="form-control" id="datepicker" />
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label"> التاريخ الي</label>
                  <input name="absence_date" type="text" class="form-control" id="datepicker" />
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
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
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">عرض</button>
                <button href="#" class="btn btn-primary">طباعة</button>
              </div>
            </div>

          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
              <thead>
                  <tr>
                      <th>#ID</th>
                      <th>اسم الطالب</th>
                      <th>المستخدم </th>
                      <th>التاريخ </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>عبد الرحيم عباس محمد هادي</td>
                      <td>abdoo00</td>
                      <td><a href="#" class="">20-2-2019</a></td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>غازي عبد الله التوم بابكر</td>
                      <td>gazoo5</td>
                      <td><a href="#" class="">30-1-2019</a></td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
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