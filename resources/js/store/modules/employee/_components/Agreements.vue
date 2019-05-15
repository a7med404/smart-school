<template>
<div>
  <section class="content-header">
    <h1> الاقرارات <small>  </small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li class="active">الاقرارات</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">الاقرارات</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <!-- START CUSTOM TABS -->
        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#resignation" data-toggle="tab">استقالة</a></li>
                <!-- <li><a href="#address" data-toggle="tab">المعاشات</a></li> -->
                <li><a href="#docs" data-toggle="tab">استلام مستندات</a></li>
                <li><a href="#punish" data-toggle="tab">اصدار عقوبات</a></li>
                <li><a href="#start-work" data-toggle="tab">التحاق بالعمل</a></li>
                <li><a href="#permission" data-toggle="tab">اذن خروج</a></li>
                <li><a href="#warning" data-toggle="tab">انذارات</a></li>
                <li><a href="#do-work" data-toggle="tab">اقرار القيام بالعمل</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="resignation">
                  <p>استقالة:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-resignation" class="btn btn-default">اضافة طلب استقالة </button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الموظف  </th>
                                  <th>اسم التقرير</th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
                                  <td>
                                      <div class="btn-group">
                                          <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                          <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                          <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
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
                <div class="tab-pane" id="docs">
                  <p>استلام مستندات:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-docs" class="btn btn-default">اضافة استلام مستندات</button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الموظف  </th>
                                  <th>اسم التقرير</th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
                                  <td>
                                      <div class="btn-group">
                                          <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                          <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                          <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
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
                <div class="tab-pane" id="punish">
                  <p>اصدار عقوبات:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-punish" class="btn btn-default">اصدار عقوبات </button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الموظف  </th>
                                  <th>اسم التقرير</th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
                                  <td>
                                      <div class="btn-group">
                                          <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                          <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                          <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
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
                <div class="tab-pane" id="start-work">
                  <p>التحاق بالعمل:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-start-work" class="btn btn-default">اضافة التحاق بالعمل </button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الموظف  </th>
                                  <th>اسم التقرير</th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
                                  <td>
                                      <div class="btn-group">
                                          <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                          <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                          <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
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
                <div class="tab-pane" id="permission">
                  <p>اذن خروج:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-permission" class="btn btn-default">اضافة اذن خروج</button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الموظف  </th>
                                  <th>اسم التقرير</th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
                                  <td>
                                      <div class="btn-group">
                                          <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                          <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                          <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
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
                <div class="tab-pane" id="warning">
                  <p>انذارات:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-warning" class="btn btn-default">اضافة انذار </button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th>اسم الموظف  </th>
                                  <th>اسم التقرير</th>
                                  <th>options</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
                                  <td>
                                      <div class="btn-group">
                                          <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                          <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                          <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>محمد ابراهيم ابراهيم السيد</td>
                                  <td>Description</td>
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
                <div class="tab-pane" id="do-work">
                  <p>اقرار القيام بالعمل:</p>
                  <button type="button" data-toggle="modal" data-target="#modal-do-work" class="btn btn-default">اضافة اقرار القيام بالعمل </button>    
                  <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                          <thead>
                            <tr>
                              <th>#ID</th>
                              <th>اسم الموظف  </th>
                              <th>اسم التقرير</th>
                              <th>options</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>محمد ابراهيم ابراهيم السيد</td>
                              <td>اقرار استلام</td>
                              <td>
                                <div class="btn-group">
                                  <a class="btn btn-default" href="#"><i class="fa fa-arrows-alt"></i></a>
                                  <a class="btn btn-info   " href="#"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger confirm" href="#"> <i class="fa fa-times"></i></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>عوض الله محمد خالد</td>
                              <td>اقرار استلام</td>
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
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  
    <!-- Popup  -->
    <div class="modal fade" id="modal-resignation">
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
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                    <option value="0">عباس الخير عبد الرحمن محمد</option>
                    <option value="1">الفاضل محمد عثمان بلال</option>
                    <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">مقدم لـ</label>
                      <input class="form-control" placeholder="" type="text" name="home_number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">السبب</label>
                      <textarea class="form-control" placeholder="" name="health_status"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    <div class="modal fade" id="modal-docs">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
             <form role="form">
                <div class="row">
                  <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                        <option value="0">عباس الخير عبد الرحمن محمد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    <div class="modal fade" id="modal-punish">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
             <form role="form">
                <div class="row">
                  <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                        <option value="0">عباس الخير عبد الرحمن محمد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    <div class="modal fade" id="modal-start-work">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
             <form role="form">
                <div class="row">
                  <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                        <option value="0">عباس الخير عبد الرحمن محمد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    <div class="modal fade" id="modal-permission">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
             <form role="form">
                <div class="row">
                  <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                        <option value="0">عباس الخير عبد الرحمن محمد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    <div class="modal fade" id="modal-warning">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
             <form role="form">
                <div class="row">
                  <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                        <option value="0">عباس الخير عبد الرحمن محمد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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
    <div class="modal fade" id="modal-do-work">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-box">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="title">بيانات </h4>
          </div>
          <div class="modal-body">
             <form role="form">
                <div class="row">
                  <div class="col col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label">اسم الموظف</label>
                      <select class="form-control select2"  v-model="student.gender">
                        <option value="1">احمد محمد احمد علي</option>
                        <option value="0">عباس الخير عبد الرحمن محمد</option>
                        <option value="1">الفاضل محمد عثمان بلال</option>
                        <option value="0">معتز احمد محمد حنفي</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <button href="#" class="btn btn-primary">اضافة</button>
                    <button href="#" class="btn btn-primary"> حفظ و طباعة </button>
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

    import { mapGetters, mapActions } from 'vuex';
    export default {
        mounted() { },
        data(){ 
          return {
            student: {
              name                   : '',  
              religion               : '',  
              gender                 : '',  
              study_lang             : '',  
              is_partner_son         : '',  
              is_staff_son           : '',  
              identifcation_number   : '',  
              identifcation_expire   : '',  
              birthday               : '',  
              start_data             : '', 
              start_from             : '',
              start_year             : '', 
              note                   : '',
              student_parent_id      : '',
              study_language_id      : '',
              address_id             : '',
              contact_id             : '',
              level_id               : '',
              classroom_id           : '',
              part_id                : ''
            },

            address: {
              street_1 : '',
              street_2 : '',
              city : '',
              local : ''
            },

            contact: {
              number_1: '',
              number_2: '',
              email: ''
            },

            health: {
              doctor_name: '',
              doctor_number: '',
              blood_type: '',
              insurance_number: '',
              health_status: ''
            },
            
          }
        },
        methods: {
          // ...mapActions(['addStudent'])
        },
        props: [],
        // computed: { ...mapGetters(['allStudent']) },
        created() {},

    }
</script>