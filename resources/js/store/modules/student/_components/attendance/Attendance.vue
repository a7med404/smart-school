<template>
  <div>
    <section class="content-header">
      <h1> تسجيل الاجازات و الغياب <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">تسجيل الاجازات و الغياب</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تسجيل الاجازات و الغياب</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

          <div class="box-body">
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="title"> اختيار الطالب:</div>
                <fieldset class="form-group">
                  <select class="form-control select2" name="parent">
                    <option value="1">احمد ابراهيم</option>
                    <option value="0">انثي</option>
                  </select>
                </fieldset>
              </div>
            </div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#absence" data-toggle="tab">الغياب</a></li>
                <li><a href="#offday" data-toggle="tab">الاجازات</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="absence" role="tabpanel" aria-expanded="true">
                  <div class="row">
                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label"> التاريخ</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">السبب</label>
                        <textarea class="form-control" placeholder="" name="absence_reason"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <button class="btn btn-primary btn-md">اضافة</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="offday" role="tabpanel" aria-expanded="true">
                  <div class="row">
                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">تاريخ بداية الاجازة</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                      </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">تاريخ نهاية الاجازة</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="form-group">
                        <label class="control-label">السبب</label>
                        <textarea class="form-control" placeholder="" name="absence_reason"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                      <button class="btn btn-primary btn-md">اضافة</button>
                    </div>
                  </div>
                </div>
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