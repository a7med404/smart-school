<template>
  <div>
    <section class="content-header">
      <h1>دفع الرسوم  <small>  </small></h1>
      <ol class="breadcrumb">
        <li><a href="#">شوؤن تعليمية</a></li>
        <li class="active">دفع الرسوم </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">دفع الرسوم </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">  الطالب</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">  السنة المالية</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                  <label class="control-label">  العام الدراسي</label>
                  <select class="form-control select2">
                    <option value="1">الكل</option>
                    <option value="0">انثي</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-12 col-12 m-t-25">
                <div class="form-group">
                  <button href="#" class="btn btn-primary">عرض</button>
                </div>
              </div>
            </div>
            
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">    
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>رقم تسلسل الطالب</th>
                          <th>اسم الطالب</th>
                          <th>اسم المرحلة التعليمية</th>
                          <th>اسم الصف </th>
                          <th>الفصل  </th>
                          <th>العنوان</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>20001</td>
                          <td>Description</td>
                          <td>Description</td>
                          <td>Description</td>
                          <td>Description</td>
                          <td>Description</td>
                          <td>Description</td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <hr>
                     
          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <h2 class="page-header">انواع الرسوم</h2>
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>رسوم تعليمية</th>
                          <th>كتب</th>
                          <th>انشطة</th>
                          <th>الاجمالي</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>2000</td>
                          <td>500</td>
                          <td>400</td>
                          <td>23000</td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <table class="table table-striped table-bordered table-hover full-width m-t-20" id="table_id">
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>مدين</th>
                          <th>دائن</th>
                          <th>التاريخ</th>
                          <th>رقم الايصال الورقي </th>
                          <th>ملاحظات  </th>
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
                             <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="caret"></span> خيارات 
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">استرجاع</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">الغاء</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">	طباعة ايصال</a></li>
                              </ul>
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
                             <div class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="caret"></span> خيارات 
                              </a>
                              <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">استرجاع</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">الغاء</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">	طباعة ايصال</a></li>
                              </ul>
                            </div>
                          </td>
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
    

    <!-- Popup  -->
    <div class="modal fade" id="popup-add-formal">
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
                    <label class="control-label">  العام الدراسي </label>
                    <select class="form-control select2">
                      <option value="1">الكل</option>
                      <option value="0">انثي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اسم المرحلة التعليمية</label>
                    <select class="form-control select2">
                      <option value="1">الكل</option>
                      <option value="0">انثي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">اسم الصف</label>
                    <select class="form-control select2">
                      <option value="1">الكل</option>
                      <option value="0">انثي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label">نوع الرسوم</label>
                    <select class="form-control select2">
                      <option value="1">الكل</option>
                      <option value="0">انثي</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label"> القيمة </label>
                    <input class="form-control" placeholder="" type="text" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
                  <button href="#" class="btn btn-primary">عرض</button>
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