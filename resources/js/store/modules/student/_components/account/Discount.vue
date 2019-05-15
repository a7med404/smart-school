<template>
  <div>
    <section class="content-header">
      <h1>تنزيل خصومات <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">تنزيل خصومات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">تنزيل خصومات</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#siblings" data-toggle="tab">خصم للاخوة</a></li>
                  <li><a href="#parents" data-toggle="tab">خصم ابناء عامليين</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="siblings">
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>بيانات خصم للاخوة:</p>
                      </div>
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <a type="button" data-toggle="modal" data-target="#popup-add-siblings" href="#" class="btn btn-info pull-left">اضافة</a>
                      </div>
                    </div>
                    <p> طلاب تم تنزيل خصومات عليهم فى هذا العام:</p>
                    <div class="row">
                      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>اسم الطالب</th>
                                    <th> اب</th>
                                    <th>ام</th>
                                    <th>تاريخ الميلاد </th>
                                    <th>عدد الاخوة  </th>
                                    <th>المرحلة التعليمية</th>
                                    <th>اسم الصف</th>
                                    <th>options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td><a href="#" class="">Description</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td>Description</td>
                                    <td><a href="#" class="">Description</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                            <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parents">
                    <div class="row">
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>بيانات خصم ابناء عامليين</p>
                      </div>
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                          <a type="button" data-toggle="modal" data-target="#popup-add-parents" href="#" class="btn btn-info pull-left">اضافة</a>
                      </div>
                    </div>
                    <p> طلاب تم تنزيل خصومات عليهم فى هذا العام:</p>
                    <div class="row">
                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                              <thead>
                                  <tr>
                                      <th>#ID</th>
                                      <th>المرحلة التعليمية</th>
                                      <th>اسم الصف</th>
                                      <th>انواع الرسوم</th>
                                      <th>اجباري </th>
                                      <th>القيمة  </th>
                                      <th>العام الدراسي</th>
                                      <th>options</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td><a href="#" class="">Description</a></td>
                                      <td>
                                          <div class="btn-group">
                                              <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                              <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td>Description</td>
                                      <td><a href="#" class="">Description</a></td>
                                      <td>
                                          <div class="btn-group">
                                              <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                              <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                              <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                          
                        </div>
                      </div>
                    </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-siblings">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">المرحلة التعليمية</label>
                    <select class="form-control select2" name="">
                      <option value="1">رياض اطفال</option>
                      <option value="0">أساس</option>
                      <option value="0">ثانوي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اسم الصف</label>
                    <select class="form-control select2" name="">
                      <option value="1">حضانة</option>
                      <option value="0" selected="selected">الاول</option>
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
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> اسم الفصل</label>
                    <select class="form-control select2" name="">
                      <option value="1" selected="selected">ابوبكر</option>
                      <option value="0">عمر</option>
                      <option value="1">علي</option>
                      <option value="0">عثمان</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">النوع</label>
                    <select class="form-control select2"  name="">
                      <option selected="selected" value="Father">اب</option>
	                    <option value="Mother">ام</option>
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
        </div>
      </div>
    </div>
    <!-- ... end Popup  -->


    <!-- Popup  -->
    <div class="modal fade" id="popup-add-parents">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اختر موظف</label>
                    <select class="form-control select2" name="addToClass.level_id">
                      <option value="1">احمد محمد احمد علي</option>
                      <option value="0">عباس الخير عبد الرحمن محمد</option>
                      <option value="1">الفاضل محمد عثمان بلال</option>
                      <option value="0">معتز احمد محمد حنفي</option>
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