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
          <div class="">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                  <div class="w-select">
                    <div class="title"> اختيار الطالب:</div>
                    <fieldset class="form-group">
                      <select class="form-control select2" name="parent">
                        <option value="1">احمد ابراهيم</option>
                        <option value="0">انثي</option>
                      </select>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="box-body">
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
                        <label class="control-label">تاريخ الغياب</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
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
                        <label class="control-label">تاريخ الاجازة</label>
                        <input name="absence_date" type="text" class="form-control" id="datepicker" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
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
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>

  </div>
</template>

<script>
// require(['../../../../../../public/modules/master/js/bootstrap-select.js']);
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>