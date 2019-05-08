<template>
  <div>
    <section class="content-header">
      <h1>توزيع الطلاب علي الفصول <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">توزيع الطلاب علي الفصول</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">توزيع الطلاب علي الفصول</h3>
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
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">القسم</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
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
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">اسم الصف</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">الترتيب حسب السن</label>
                  <select class="form-control select2">
                    <option value="1">الخرطوم</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                <button href="#" class="btn btn-primary">اضافة</button>
              </div>
            </div>

          </form>

          <!-- START CUSTOM TABS -->

          <div class="m-t-50">
            <div class="row">
              <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#manual" data-toggle="tab">بيانات عامة</a></li>
                    <li><a href="#random" data-toggle="tab">عنوان الطالب</a></li>
                    <li><a href="#alphabetic" data-toggle="tab">بيانات الاتصال</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="manual">
                      <p>بيانات عامة:</p>
                      <a type="button" data-toggle="modal" data-target="#popup-add-manual" href="#" class="btn btn-info">توزيع</a>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="random">
                      <p>بيانات عامة:</p>
                      <a type="button" data-toggle="modal" data-target="#popup-add-random" href="#" class="btn btn-info">توزيع</a>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="alphabetic">
                      <p>بيانات عامة:</p>
                      <a type="button" data-toggle="modal" data-target="#popup-add-alphabetic" href="#" class="btn btn-info">توزيع</a>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-manual">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <select class="form-control select2" name="martial">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
              </div>           
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">اضافة</button>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-random">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <select class="form-control select2" name="martial">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
              </div>           
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">اضافة</button>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-alphabetic">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> اسم الصف </label>
                    <select class="form-control select2" name="martial">
                      <option value="CA">اختيار</option>
                      <option value="TE">المسيحية</option>
                      <option value="TE">اخرى</option>
                    </select>
                  </div>
                </div>
              </div>           
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">اضافة</button>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->

  </div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>